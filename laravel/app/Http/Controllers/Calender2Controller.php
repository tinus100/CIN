<?php

namespace App\Http\Controllers;

use App\Models\Event;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Calender2Controller extends Controller


{


    /**
     * Display the calender with all exising events. Code taken from fullcalendar source code.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('calender');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calender.create');
    }

    /**
     * Check for any overlap with existing events.
     * If time is availaible, new event is created and stored.
     * Any other case, error is returned.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($this->checkForOverlap($request->start)) {
            $end = $this->determineEndTime($request->ammount, $request->start);

            if ($this->checkForOverlap($end)) {
                $data = $request->validate([
                    'title' => 'required',
                    'start' => 'required',
                    'ammount' => 'required'
                ]);
                $event = new Event();
                $event->title = $data['title'];
                $event->start = $data['start'];
                $event->ammount = $data['ammount'];
                $event->end = $end;
                $event->save();
                return redirect('/events');
            } else {
                return redirect("/events/create");
            }
        } else {
            return redirect("/events/create");
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {


        return view('calender.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

    public function edit(Event $event)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Event $event)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/calender');
    }

    // Function checks for any overlap in start or end value of existing events in the database.
    public function checkForOverlap($value) {
        return Event::where('start', '<=', $value)->where('end', '>=', $value)->count() == 0;
    }

    // An hour is added to the start time for every person. New variable is returned.
    public function determineEndTime($ammount, $start) {
        $hourString = 'PT'.$ammount.'H';
        $date = new DateTime($start);
        $date->add(new DateInterval($hourString));
        return $date;
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->where('function', '=', 'admin')
        ->orWhere('function', '=', 'werknemer')
        ->get();

        if ($this->validateFunction()) {
            return view('functions.admin.admin-page.index', ['users' => $users]);
        } else{
            return redirect('/');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'function' => 'required|string',
            'voornaam' => 'required|string|max:20',
            'achternaam' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'function' => $request->function,
            'voornaam' => $request->voornaam,
            'achternaam' => $request->achternaam,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

//        Auth::login($user);

        return redirect('/admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('functions.admin.admin-page.edit', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin');
    }

    public function validateFunction()
    {
        // if (Auth::user()->function = 'admin') {
        //     return true;
        // } else {
        //     return false;
        // }

        switch (Auth::user()->function) {
            case 'admin':
                return true;
                break;

            default:
                return false;
                break;
        }
    }
}

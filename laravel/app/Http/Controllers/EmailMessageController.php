<?php

namespace App\Http\Controllers;

use App\Mail\AgendaUitnodiging;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class EmailMessageController extends Controller
{
    public function store(Registration $registration)
    {


        Mail::to($registration->email)
            ->send(new AgendaUitnodiging());

        return redirect('/registration');
    }
}

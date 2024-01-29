<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {
        switch (Auth::user()->function) {
            case 'admin':
                return view('functions.admin.index');
                break;
            case 'werknemer':
                return view('functions.werknemer.index');
                break;
        }
    }
}

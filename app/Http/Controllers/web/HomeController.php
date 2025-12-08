<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Scheduling;
use App\Models\Lodging;
use App\Models\User;
class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'totalAgendamentos' => Scheduling::count(),
            'totalAlojamentos'  => Lodging::count(),
            'totalUtilizadores' => User::count(),
        ]);
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Lodging;
use App\Models\Scheduling;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalUsers' => User::count(),
            'admins' => User::where('role', 'admin')->count(),
            'coordinators' => User::where('role', 'coordinator')->count(),
            'operationals' => User::where('role', 'operational')->count(),
            'clients' => User::where('role', 'client')->count(),

            'totalLodgings' => Lodging::count(),
            'totalSchedulings' => Scheduling::count(),

            'scheduled' => Scheduling::where('state', 'scheduled')->count(),
            'inProgress' => Scheduling::where('state', 'in_progress')->count(),
            'finished' => Scheduling::where('state', 'finished')->count(),
            'cancelled' => Scheduling::where('state', 'cancelled')->count(),
        ]);
    }
}



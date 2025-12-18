<?php

namespace App\Http\Controllers\Operational;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Scheduling;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // All schedulings assigned to this operational user
        $schedulings = $user->schedulings;

        $total = $schedulings->count();

        $byState = $schedulings->groupBy('state')->map->count();

        return view('operational.dashboard', [
            'total' => $total,
            'byState' => $byState,
        ]);
    }
}

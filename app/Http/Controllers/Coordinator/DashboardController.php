<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\Scheduling;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Schedulings by state
        $schedulingsByState = Scheduling::select('state', DB::raw('count(*) as total'))
            ->groupBy('state')
            ->pluck('total', 'state');

        // 2. Workload per operational user
        $workloadByUser = User::where('role', 'operational')
            ->withCount('schedulings')
            ->get()
            ->pluck('schedulings_count', 'name');

        return view('coordinator.dashboard', compact(
            'schedulingsByState',
            'workloadByUser'
        ));
    }
}

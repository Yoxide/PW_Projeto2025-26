<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scheduling;
class SchedulingController extends Controller
{
    public function index(){
        $schedulings = Scheduling::all();
        return view('schedulings.index', compact('schedulings'));
    }

    public function create(){
        return view('schedulings.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'priority'        => 'required|in:low,medium,high',
            'start_date'      => 'required|date',
            'estimated_days'  => 'required|integer|min:1',
            'notes'           => 'required|string',
        ]);

        // state default = scheduled
        $data['state'] = 'scheduled';

        Scheduling::create($data);

        return redirect()->route('schedulings.index')
            ->with('success', 'Agendamento criado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Scheduling;
use App\Models\Lodging;
use Illuminate\Http\Request;

class SchedulingController extends Controller
{
    public function index()
    {
        $schedulings = Scheduling::orderBy('start_date')->get();
        return view('schedulings.index', compact('schedulings'));
    }

    public function create()
    {
        $lodgings = Lodging::where('lodging_owner_id', auth()->id())->get();
        return view('schedulings.create', compact('lodgings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'priority' => 'required|in:low,medium,high',
            'start_date' => 'required|date',
            'estimated_days' => 'required|integer|min:1',
            'state' => 'required|in:scheduled,in progress,finished,cancelled',
            'notes' => 'required|string|max:255',
            'lodging_id' => 'required|exists:lodgings,id', //  associa a um lodging
        ]);

        Scheduling::create($validated);

        return redirect()->route('schedulings.index')
            ->with('success', 'Agendamento criado com sucesso!');
    }

    public function edit(Scheduling $scheduling)
    {
        $lodgings = Lodging::orderBy('name')->get();
        return view('schedulings.edit', compact('scheduling', 'lodgings'));
    }

    public function update(Request $request, Scheduling $scheduling)
    {
        $validated = $request->validate([
            'priority' => 'required|in:low,medium,high',
            'start_date' => 'required|date',
            'estimated_days' => 'required|integer|min:1',
            'state' => 'required|in:scheduled,in progress,finished,cancelled',
            'notes' => 'required|string|max:255',
            'lodging_id' => 'required|exists:lodgings,id',
        ]);

        $scheduling->update($validated);

        return redirect()->route('schedulings.index')
            ->with('success', 'Agendamento atualizado com sucesso');
    }

    public function destroy(Scheduling $scheduling)
    {
        $scheduling->delete();

        return redirect()->route('schedulings.index')
            ->with('success', 'Agendamento eliminado com sucesso');
    }
}

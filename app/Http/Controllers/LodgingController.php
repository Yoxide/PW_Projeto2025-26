<?php

namespace App\Http\Controllers;

use App\Models\Lodging;
use App\Models\LodgingOwner;
use Illuminate\Http\Request;

class LodgingController extends Controller
{
    public function index()
    {
        $lodgings = Lodging::all();
        return view('lodgings.index', compact('lodgings'));
    }

    public function create()
    {
        $owners = LodgingOwner::orderBy('lodging_owner_name')->get();
        return view('lodgings.create', compact('owners'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'lodging_owner_id' => 'required|exists:lodging_owners,id',
        ]);

        Lodging::create($validated);

        return redirect()
            ->route('lodgings.index')
            ->with('success', 'Alojamento criado com sucesso!');
    }

    public function edit(Lodging $lodging)
    {
        $owners = LodgingOwner::orderBy('lodging_owner_name')->get();
        return view('lodgings.edit', compact('lodging', 'owners'));
    }

    public function update(Request $request, Lodging $lodging)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'lodging_owner_id' => 'required|exists:lodging_owners,id',
        ]);

        $lodging->update($validated);

        return redirect()
            ->route('lodgings.index')
            ->with('success', 'Alojamento atualizado com sucesso!');
    }

    public function destroy(Lodging $lodging)
    {
        $lodging->delete();

        return redirect()
            ->route('lodgings.index')
            ->with('success', 'Alojamento removido com sucesso!');
    }
}

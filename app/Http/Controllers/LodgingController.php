<?php
namespace App\Http\Controllers;

use App\Models\Lodging;
use Illuminate\Http\Request;

class LodgingController extends Controller
    {public function index() {
    $lodgings = Lodging::all();
    return view('lodgings.index', compact('lodgings'));
}

    public function create()
    {return view('lodgings.create');}

    public function store(Request $request)
    {
    $request->validate(['name'        => 'required',
    'address'     => 'required',
    'capacity'    => 'required|integer',
    'type'        => 'required|in:appartment,house,room',
    'description' => 'required',]);

    Lodging::create([
        'name' => $request->name,
        'address' => $request->address,
        'capacity' => $request->capacity,
        'type' => $request->type,
        'description' => $request->description,
        'lodging_owner_id' => 1,  // a qd nao tiver o login
        'state' => 'active']);

    return redirect()->route('lodgings.index')->with('success', 'Alojamento criado com sucesso');}
    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchedulingController extends Controller
{
    public function index(){
        return view('schedulings.index');}

    public function create(){
        return view('schedulings.create');}

    public function store(Request $request){
    return redirect()->route('schedulings.index');} }

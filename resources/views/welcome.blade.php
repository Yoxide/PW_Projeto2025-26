@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

<link rel="stylesheet" href="styles/styles.css">

<h1>Hello {{$nome}}</h1>


<div class="imgs">
    <img class="img1" src="img/cat.png" width="200" height="200">
    <img class="img2" src="img/cat2.jpg" width="200" height="200">
</div>

@endsection

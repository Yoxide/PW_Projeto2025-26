<h1> Contacts PAGE</h1>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>

@foreach($nomes as $value)
    <p>{{$value}}</p>

@endforeach

@for($i = 0; $i < count($nomes); $i++)
    <p>{{ $nomes[$i] }} - {{ $numeros[$i] }}</p>
@endfor
</body>

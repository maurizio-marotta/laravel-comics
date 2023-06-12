@extends('layout.main')

@section('content')


<div class="container-1 d-flex">

    <div class="sc-card d-flex">
        <img class="fum" src="{{$fumetto['src'] ?? null}}"  alt="{{$fumetto['titolo'] ?? null}}">
        <h5 class="card-title">{{$fumetto['titolo'] ?? null}}</h5>
        <h6 class="card-text">Prezzo: {{$fumetto['price'] ?? null}} <br> Tipo: {{$fumetto['type'] ?? null}}</h6>
    </div>

</div>

@endsection

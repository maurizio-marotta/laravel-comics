@extends('layout.main')

@section('content')
    <div class="img"></div>
    <div class="containers ">
        @foreach ($fumetti as $fumetto)
            {{-- {{dd($fumetto["titolo"])}} --}}
            <div class="card">
                <a href="{{ route('comics-detail', ['slug' => $fumetto['slug']])}}">
                    <img class="immagine" src="{{ $fumetto['src'] ?? null }}" alt="">
                </a>
                <span>{{ $fumetto['titolo'] ?? null }}</span>
            </div>
        @endforeach
    </div>
@endsection

@extends('layout.main')

@section('content')


    <div class="containers ">
        @forelse ($fumetti as $fumetto)
        <div class="card">
            <img class="immagine" src="{{ $fumetto['src'] }}" alt="">
            <span>{{ $fumetto['titolo'] }}</span>
        </div>

            @empty

            @endforelse
    </div>
@endsection


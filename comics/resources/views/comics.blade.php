@extends('layout.main')

@section('content')


    @forelse ($fumetti as $fumetto)

        <div class="card">
            <img src="{{ $fumetto['src'] }}" alt="">
            <p>{{ $fumetto['titolo'] }}</p>
        </div>

    @empty

    @endforelse
@endsection

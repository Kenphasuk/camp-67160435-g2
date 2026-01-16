@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Pokedex</h1>
        <a href="{{ route('pokedex.create') }}" class="btn btn-primary">Add New Pokémon</a>
    </div>

    <div class="row">
        @foreach($pokemons as $pokemon)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $pokemon->image_url }}" class="card-img-top" alt="{{ $pokemon->name }}" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemon->name }}</h5>
                    <p class="card-text">
                        <strong>Type:</strong> {{ $pokemon->type }}<br>
                        <strong>Species:</strong> {{ $pokemon->species }}<br>
                        <strong>Height:</strong> {{ $pokemon->height }} cm<br>
                        <strong>Weight:</strong> {{ $pokemon->weight }} kg<br>
                        <strong>HP:</strong> {{ $pokemon->hp }}<br>
                        <strong>Attack:</strong> {{ $pokemon->attack }}<br>
                        <strong>Defense:</strong> {{ $pokemon->defense }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('pokedex.show', $pokemon->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('pokedex.edit', $pokemon->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pokedex.destroy', $pokemon->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

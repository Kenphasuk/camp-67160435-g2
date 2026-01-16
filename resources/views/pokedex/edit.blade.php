@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pokémon: {{ $pokedex->name }}</h1>

    <form action="{{ route('pokedex.update', $pokedex->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pokedex->name }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $pokedex->type }}" required>
        </div>

        <div class="mb-3">
            <label for="species" class="form-label">Species</label>
            <input type="text" class="form-control" id="species" name="species" value="{{ $pokedex->species }}" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="height" class="form-label">Height (cm)</label>
                <input type="number" class="form-control" id="height" name="height" value="{{ $pokedex->height }}" min="1" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="weight" class="form-label">Weight (kg)</label>
                <input type="number" class="form-control" id="weight" name="weight" value="{{ $pokedex->weight }}" min="1" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="hp" class="form-label">HP</label>
                <input type="number" step="0.1" class="form-control" id="hp" name="hp" value="{{ $pokedex->hp }}" min="0" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="attack" class="form-label">Attack</label>
                <input type="number" step="0.1" class="form-control" id="attack" name="attack" value="{{ $pokedex->attack }}" min="0" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" step="0.1" class="form-control" id="defense" name="defense" value="{{ $pokedex->defense }}" min="0" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image_url" name="image_url" value="{{ $pokedex->image_url }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Pokémon</button>
        <a href="{{ route('pokedex.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

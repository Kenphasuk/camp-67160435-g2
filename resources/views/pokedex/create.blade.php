@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Pokémon</h1>

    <form action="{{ route('pokedex.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>

        <div class="mb-3">
            <label for="species" class="form-label">Species</label>
            <input type="text" class="form-control" id="species" name="species" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="height" class="form-label">Height (cm)</label>
                <input type="number" class="form-control" id="height" name="height" min="1" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="weight" class="form-label">Weight (kg)</label>
                <input type="number" class="form-control" id="weight" name="weight" min="1" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="hp" class="form-label">HP</label>
                <input type="number" step="0.1" class="form-control" id="hp" name="hp" min="0" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="attack" class="form-label">Attack</label>
                <input type="number" step="0.1" class="form-control" id="attack" name="attack" min="0" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" step="0.1" class="form-control" id="defense" name="defense" min="0" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image_url" name="image_url" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Pokémon</button>
        <a href="{{ route('pokedex.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

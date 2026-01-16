@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $pokedex->image_url }}" class="img-fluid rounded" alt="{{ $pokedex->name }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $pokedex->name }}</h1>

            <table class="table">
                <tr>
                    <th>Type:</th>
                    <td>{{ $pokedex->type }}</td>
                </tr>
                <tr>
                    <th>Species:</th>
                    <td>{{ $pokedex->species }}</td>
                </tr>
                <tr>
                    <th>Height:</th>
                    <td>{{ $pokedex->height }} cm</td>
                </tr>
                <tr>
                    <th>Weight:</th>
                    <td>{{ $pokedex->weight }} kg</td>
                </tr>
                <tr>
                    <th>HP:</th>
                    <td>{{ $pokedex->hp }}</td>
                </tr>
                <tr>
                    <th>Attack:</th>
                    <td>{{ $pokedex->attack }}</td>
                </tr>
                <tr>
                    <th>Defense:</th>
                    <td>{{ $pokedex->defense }}</td>
                </tr>
                <tr>
                    <th>Created At:</th>
                    <td>{{ $pokedex->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Updated At:</th>
                    <td>{{ $pokedex->updated_at->format('d/m/Y H:i') }}</td>
                </tr>
            </table>

            <div class="mt-3">
                <a href="{{ route('pokedex.edit', $pokedex->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pokedex.destroy', $pokedex->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('pokedex.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection

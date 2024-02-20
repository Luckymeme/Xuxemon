
@extends('layouts.app')

@section('content')
    <h1>Create Pokémon</h1>
    <form action="{{ route('pokemons.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" class="form-control" required>
                @foreach ($types as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <select name="size" class="form-control" required>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input type="number" name="weight" step="0.01" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Pokémon</button>
    </form>
@endsection

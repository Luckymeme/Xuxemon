
@extends('layouts.app')

@section('content')
    <h1>Edit Pokémon</h1>
    <form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST">
        @csrf
         @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $pokemon->name }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" class="form-control" required>
                @foreach ($types as $type)
                    <option value="{{ $type }}"{{ $pokemon->type == $type ? ' selected' : '' }}>{{ $type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <select name="size" class="form-control" required>
                <option value="small"{{ $pokemon->size == 'small' ? ' selected' : '' }}>Small</option>
                <option value="medium"{{ $pokemon->size == 'medium' ? ' selected' : '' }}>Medium</option>
                <option value="large"{{ $pokemon->size == 'large' ? ' selected' : '' }}>Large</option>
            </select>
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input type="number" name="weight" step="0.01" class="form-control" value="{{ $pokemon->weight }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Pokémon</button>
    </form>
@endsection

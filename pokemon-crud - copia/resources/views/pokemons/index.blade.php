
@extends('layouts.app')

@section('content')
    <h1>Pokémon List</h1>
    <a href="{{ route('pokemons.create') }}" class="btn btn-success">Add Pokémon</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Weight</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
                <tr>
                    <td>{{ $pokemon->id }}</td>
                    <td>{{ $pokemon->name }}</td>
                    <td>{{ $pokemon->type }}</td>
                    <td>{{ $pokemon->size }}</td>
                    <td>{{ $pokemon->weight }}</td>
                    <td>
                        <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('login') }}" class="btn btn-primary">Volver al Login</a>


@endsection

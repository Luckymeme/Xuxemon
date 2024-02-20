
@extends('layouts.app')

@section('content')
    <h1>Pokémon List</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Weight</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('login') }}" class="btn btn-primary">Volver al Login</a>

@endsection

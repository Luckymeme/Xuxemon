<?php
namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
        // En PokemonController.php
    public function pokemons()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.veer', compact('pokemons'));
    }

    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }


    public function create()
    {
        $types = ['Electrico', 'Fuego', 'Agua', 'Planta', 'Normal', 'Volador', 'Psychico']; 
        return view('pokemons.create', compact('types'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'size' => 'required|in:small,medium,large',
            'weight' => 'required|numeric',
        ]);

        Pokemon::create($request->all());

        return redirect()->route('pokemons.index')->with('success', 'Pokemon creado correctamente.');
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.show', compact('pokemon'));
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $types = ['Electrico', 'Fuego', 'Agua', 'Planta', 'Normal', 'Volador', 'Psychico']; 
        return view('pokemons.edit', compact('pokemon', 'types'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'size' => 'required|in:small,medium,large',
            'weight' => 'required|numeric',
        ]);

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all());

        return redirect()->route('pokemons.index')->with('success', 'Pokemon actualizado correctamente.');
    }

    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();

        return redirect()->route('pokemons.index')->with('success', 'Pokemon eliminado correctamente.');
    }



}

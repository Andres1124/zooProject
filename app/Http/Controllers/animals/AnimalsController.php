<?php

namespace App\Http\Controllers\animals;

use App\Http\Controllers\Controller;
use App\Models\animals\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ecosystem' => 'required',
            'species' => 'required',
            'weight' => 'required',
            'food' => 'required',
            'medicines' => 'required',
        ]);


        $animal = Animal::create([
            'name' => $request->name,
            'ecosystem' => $request->ecosystem,
            'species' => $request->species,
            'food' => $request->food,
            'medicines' => $request->medicines,
            'weight' => $request->weight
        ]);

        if ($animal->id) return redirect('/home');
        else return redirect('/animals');
    }

    public function show(Animal $animal)
    {
        return view('animals.show', ['animal' => $animal]);
    }

    public function update(Animal $animal)
    {
        $animal->name = request('name');
        $animal->ecosystem = request('ecosystem');
        $animal->species = request('species');
        $animal->weight = request('weight');
        $animal->food = request('food');
        $animal->medicines = request('medicines');

        $animal->save();

        if ($animal->id) return redirect('/home');
        else return redirect('/animals');
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect('/home');
    }
}

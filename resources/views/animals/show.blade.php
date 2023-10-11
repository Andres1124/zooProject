@extends('partials.app')
@section('content')
@include('partials.header')
    <div class="w-full flex items-center justify-center">
        <div class="p-4 flex flex-col items-center justify-center w-1/3 border border-gray-400 rounded-lg mt-12">
            <h1 class="text-4xl uppercase text-center">Editar animal</h1>
            <form action="/animals/{{$animal->id}}/edit" method="POST" class="mt-12 flex flex-col items-center justify-center">
                @method('PATCH')
                @csrf
                <input type="text" name="name" placeholder="Nombre" value="{{ $animal->name }}" class="border border-green-600 rounded-full p-4">
                <input type="text" name="species" placeholder="Especie" value="{{ $animal->species }}" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="ecosystem" placeholder="Habitat" value="{{ $animal->ecosystem }}" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="food" placeholder="Tipo de comida" value="{{ $animal->food }}" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="weight" placeholder="Peso" value="{{ $animal->weight }}" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="medicines" placeholder="Medicinas" value="{{ $animal->medicines }}" class="border border-green-600 rounded-full p-4 mt-4">
                <button class="bg-green-500 mt-4 py-3 px-12 rounded-full">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
@extends('partials.app')
@section('content')
@include('partials.header')
    <div class="w-full flex items-center justify-center">
        <div class="p-4 flex flex-col items-center justify-center w-1/3 border border-gray-400 rounded-lg mt-12">
            <h1 class="text-4xl uppercase text-center">Crear animal</h1>
            <form action="/animals" method="POST" class="mt-12 flex flex-col items-center justify-center">
                @method('post')
                @csrf
                <input type="text" name="name" placeholder="Nombre" class="border border-green-600 rounded-full p-4">
                <input type="text" name="species" placeholder="Especie" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="ecosystem" placeholder="Habitat" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="food" placeholder="Tipo de comida" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="weight" placeholder="Peso" class="border border-green-600 rounded-full p-4 mt-4">
                <input type="text" name="medicines" placeholder="Medicinas" class="border border-green-600 rounded-full p-4 mt-4">
                <button class="bg-green-500 mt-4 py-3 px-12 rounded-full">Crear</button>
            </form>
        </div>
    </div>
@endsection
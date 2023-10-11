@extends('partials.app')
@section('content')
    @include('partials.header')
    <div class="flex w-full">
        <div class="w-1/5 p-4">
            <div class="flex flex-col">
                <div class="flex items-center justify-between">
                    <div>
                        <i class="fa fa-paw"></i>
                        <a href="/animals" class="ml-2">Animales</a>
                    </div>
                    <i class="fa fa-angle-right"></i>
                </div>
                <div class="mt-2 flex flex-col pl-4">
                    <a href="#" class="">Especie</a>
                    <a href="#" class="">Habitat</a>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="w-full bg-green-600 p-6 text-white">
                <h1 class="text-6xl">Animales</h1>
            </div>
            <div class="p-6">
                <a href="/animals" class="py-3 px-12 bg-green-600 rounded-full text-white">Nuevo animal</a>
            </div>
            <div class="p-6"> 
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-5">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Especie
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Habitat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tipo de comida
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Medicinas
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Peso (kg)
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($animals as $animal)
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                        {{ $animal->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $animal->species }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $animal->ecosystem }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $animal->food }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $animal->medicines }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $animal->weight }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="/animals/{{$animal->id}}/delete" class="text-red-500"><i class="fa fa-trash"></i></a>
                                        <a href="/animals/{{$animal->id}}" class="text-blue-500 ml-4"><i class="fa fa-pen"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
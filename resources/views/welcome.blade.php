@extends('partials.app')
@section('content')
    <div class="bg-home w-full h-screen flex flex-col justify-center items-center">
        <div class="text-center text-white -mt-40">
            <p class="text-6xl font-bold uppercase">Bienvenidos a</p>
            <p class="text-6xl font-bold uppercase">nuestro</p>
            <p class="text-6xl font-bold uppercase">zoologico</p>
        </div>
        <div class="flex items-center mt-12">
            <a href="/login">
                <div class="rounded-lg bg-green-600 p-4 h-60 w-60 flex flex-col items-center justify-center">
                    <div class="rounded-full h-20 w-20 flex justify-center items-center bg-white mx-auto">
                        <i class="fa fa-user text-3xl"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-center text-white text-3xl">Administrador</h3>
                    </div>
                </div>
            </a>
            <a href="/login">
                <div class="rounded-lg bg-green-600 p-4 ml-12 h-60 w-60 flex flex-col items-center justify-center">
                    <div class="rounded-full h-20 w-20 flex justify-center items-center bg-white mx-auto">
                        <i class="fa fa-hands text-3xl"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-center text-white text-3xl">Cuidador</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center mt-12">
            <p class="text-green-600 text-4xl uppercase">¿Ingresar cómo?</p>
        </div>
    </div>
@endsection

@extends('partials.app')
@section('content')
    <div class="h-screen w-screen bg-green-600 flex justify-center items-center">
        <div class="flex items-center w-[800px] h-[600px] bg-white rounded-lg">
            <div class="rounded-lg h-full overflow-hidden w-1/2">
                <img class="w-full h-full" src="https://images.unsplash.com/photo-1525152334085-d5f17f22d5c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1968&q=80" alt="">
            </div>
            <div class="p-4 flex flex-col items-center justify-center w-1/2">
                <h1 class="text-4xl uppercase text-center">Registro</h1>
                <form action="/request/register" method="POST" class="mt-12 flex flex-col items-center justify-center">
                    @method('post')
                    @csrf
                    <input type="text" name="name" placeholder="Nombre" class="border border-green-600 rounded-full p-4">
                    <input type="text" name="phone" placeholder="Teléfono" class="border border-green-600 rounded-full p-4 mt-4">
                    <input type="email" name="email" placeholder="Correo" class="border border-green-600 rounded-full p-4 mt-4">
                    <input type="password" name="password" placeholder="Contraseña" class="border border-green-600 rounded-full p-4 mt-6">
                    <button class="bg-green-500 mt-4 py-3 px-12 rounded-full">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
@endsection
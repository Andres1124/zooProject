@extends('partials.app')
@section('content')
    <div class="h-screen w-screen bg-green-600 flex justify-center items-center">
        <div class="flex items-center w-[800px] h-[600px] bg-white rounded-lg">
            <div class="rounded-lg h-full overflow-hidden w-1/2">
                <img class="w-full h-full" src="https://plus.unsplash.com/premium_photo-1666238814567-7f076738a865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2030&q=80" alt="">
            </div>
            <div class="p-4 flex flex-col items-center justify-center w-1/2">
                <h1 class="text-4xl uppercase text-center">Iniciar sesión</h1>
                <form action="/request/login" method="POST" class="mt-12 flex flex-col items-center justify-center">
                    @method('post')
                    @csrf
                    <input type="email" name="email" placeholder="Correo" class="border border-green-600 rounded-full p-4">
                    <input type="password" name="password" placeholder="Contraseña" class="border border-green-600 rounded-full p-4 mt-6">
                    <div class="flex items-center mt-4">
                        <input type="checkbox" id="remember">
                        <label for="remember" class="text-green-600 ml-2">Recuerdame</label>
                    </div>
                    <button class="bg-green-500 mt-4 py-3 px-12 rounded-full">Ingresar</button>
                </form>
                <div class="mt-4">
                    <a href="#" class="text-green-600">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>
@endsection
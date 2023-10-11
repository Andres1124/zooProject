<header class="w-full">
    <div class="flex items-center justify-between bg-green-600 p-4 w-full border-b border-gray-100">
        <div>
            <p class="text-white text-3xl">ZooProject</p>
        </div>

        <div class="text-white">
            {{ Auth::check() ? Auth::user()->name: '' }}
        </div>

        <div>
            <a href="/logout" class="text-white">Cerrar Sesión</a>
        </div>
    </div>
</header>
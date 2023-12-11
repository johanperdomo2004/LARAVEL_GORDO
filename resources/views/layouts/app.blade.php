<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="bg-gray-100">
        
        <header class="p-5 border-b bg-white shadow flex justify-between">

            <h1 class="ml-14 text-3xl font-black">
                Devstagram
            </h1>

            @auth
                <nav class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                    </svg>
                    <a class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer" href="{{route('post.create')}}">
                        Crear
                    </a>
                    <a class="font-bold uppercase text-gray-600"  href="#">
                       Hola <span class="font-bold uppercase text-gray-600" >{{ auth()->user()->username }}</span>
                    </a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600">
                            Cerrar Sesión 
                        </button>
                    </form>
                </nav>
            @endauth

            @guest
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600" href="{{route('login')}}">Login</a>
                    <a class="font-bold uppercase text-gray-600" href="{{route('register')}}">
                        Crear Cuenta
                    </a>
                </nav>
            @endguest
            {{-- <ul class="mr-14 mt-1 font-bold flex gap-5 text-xl">
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('register')}}">Crear cuenta</a>
            </ul> --}}

        </header>

        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('contenido')
            </h2>
        </main>

        <footer class="text-center p-10 text-gray-500 font-bold uppercase">

            Devstagram - Todos los derechos reservados {{ date('Y') }}

        </footer>


    </body>
</html>

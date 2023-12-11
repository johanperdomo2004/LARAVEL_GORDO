@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('contenido')
<div class="md:flex">
        <div class="md:w-7/12 flex items-center p-10">
        </div>
        <div class="md:w-5/12 shadow-xl rounded-xl p-10">
            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf 

                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje')}}</p>
                @endif
                <div class="mb-5 text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">E-mail</label>
                    <input class="border p-3 w-full rounded-lg" type="email" name="email" id="email" placeholder="Ingrese el e-mail">
                    @error('email')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5 text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Contraseña</label>
                    <input class="border p-3 w-full rounded-lg" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                    @error('password')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="checkbox" name="remember"> <label class="text-gray-600 text-sm for="">Mantener mi sesión abierta</label>
                </div>
                <div>
                    <input type="submit" value="Iniciar sesión" class="text-xl p-3 bg-red-500 w-full rounded-xl mt-3 font-bold text-white cursor-pointer hover:bg-red-400 transition-colors uppercase">
                </div>
            </form>
        </div>
    </div>
@endsection
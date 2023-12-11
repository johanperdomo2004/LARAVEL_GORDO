@extends('layouts.app')

@section('titulo')
    Registro de inventario de Almacen
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-7/12 flex items-center p-10">
        </div>
        <div class="md:w-5/12 shadow-xl rounded-xl p-10">
            <form action="" method="POST">
                @csrf 
                <div class="mb-5  text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">Nombres</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="name" id="name" placeholder="Ingrese sus Nombres">
                    @error('name')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5 text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="lastname">Apellidos</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus Apellidos">
                    @error('lastname')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5  text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">Nombre de usuario</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="username" id="username" placeholder="Ingrese sus apellidos">
                    @error('username')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5 text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">E-mail</label>
                    <input class="border p-3 w-full rounded-lg" type="email" name="email" id="email" placeholder="Ingrese el e-mail">
                    @error('email')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5 text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="rol">Rol</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="rol" id="rol" placeholder="Ingrese su rol">
                    @error('rol')
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
                <div class="mb-5 text-left text-lg">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confirmation">Confirmar contraseña</label>
                    <input class="border p-3 w-full rounded-lg" type="password" id="password_confirmation" name="password_confirmation" placeholder="Ingrese su contraseña de nuevo">
                </div>
                <div>
                    <input type="submit" value="Crear cuenta" class="text-xl p-3 bg-red-500 w-full rounded-xl mt-3 font-bold text-white cursor-pointer hover:bg-red-400 transition-colors uppercase">
                </div>
            </form>
        </div>
    </div>
@endsection
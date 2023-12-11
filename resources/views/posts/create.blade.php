@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-6/12 px-10">
            <form action="{{ route('imagenes.store')}}" enctype="multipart/form-data" id="dropzone" class="text-[1.7rem] dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
               @csrf
            </form>
        </div>

        <div class="md:w-6/12 px-10 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-[1.4rem] text-gray-500 font-bold">Título</label>
                    <input type="text" id="name" name="name" placeholder="Titulo" class="border w-[80%] h-[50px] text-[1.3rem] pl-5 rounded-lg @error('name')
                    border-red-500 @enderror" value="{{ old('Titulo') }}">
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-[1.3rem] text-gray-500 font-bold">Descripción de la publicación</label>
                    <textarea name="descripcion" id="descripcion" placeholder="Descripción de la publicación" class="text-[1.3rem] border p-3 w-[80%] rounded-lg 
                    @error('titulo') border-red-500 @enderror">{{ old('titulo') }}</textarea>
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="publicar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold
                 w-[80%] text-white p-2 rounded-lg text-[1.4rem]">
            </form>
        </div>
    </div>
@endsection

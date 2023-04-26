@extends('layouts.app')
@section('titulo')
Crear nueva publicacion
@endsection

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
    <form action="#" id="dropzone" class="dropzone border-dashed border-2 w-full h-72 rounded flex flex-col justify-center items-center">

    </form>
    </div>
    <div class="md:w-1/2 px-10">Descripción

        <form action="{{route('cuenta.store')}}" method="POST">
            @csrf
            <div class="mb-5 bg-white p-6 rounded-lg shadow-lg mx-5">
                <label class="mb-2 block text-gray-700 font-bold" for="titulo">Titulo</label>
                <input class="border p-1 w-full rounded-lg @error('titulo') border-red-500 @enderror" type="text" id="titulo" name="titulo" value="{{old('titulo')}}">
                @error('name')
                    <p class="text-red-600">{{$message}}</p>                        
                @enderror
            </div>

            @csrf
            <div class="mb-5 bg-white p-6 rounded-lg shadow-lg mx-5">
               <label class="mb-2 block text-gray-700 font-bold" for="descripcion">Descripcion</label><textarea
               <input class="border p-1 w-full rounded-lg @error('descripcion') border-red-500 @enderror" type="text" id="descripcion" name="descripcion">{{old('descripcion')}}</textarea>
               @error('name')
                   <p class="text-red-600">{{$message}}</p>                        
               @enderror
            </div>

            <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-700 cursor-pointer" type="submit" value="Crear cuenta">
        </form>
    
    </div>
</div>
@endsection
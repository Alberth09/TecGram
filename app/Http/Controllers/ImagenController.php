<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Imagen;
use Illuminate\Http\Str;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');
        return response()->json(['imagen'=>$nombreImagen]);
        $nombreImagen = Str::uuid() .".". $imagen->extension();
        $ImagenServidor = Image::make($imagen);
        $ImagenServidor->fit(500,500);
        $ImagenRuta = public_path('uploads'). '/'. $nombreImagen;
        $ImagenServidor->save($ImagenRuta);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use App\Categoria;
use App\Producto;
use Image;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::where('baja','=',1)->paginate(2);
        return view('IntProductos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::all();
        return view('IntProductos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=new Producto();
        $producto->nombre=$request->input('nombre');
        if($request->hasFile('img')){
            $file=$request->file('img');
            $foto= $producto->nombre;
            $image= Image::make($file)->encode('webp',90)->save(public_path('/imgproductos/' . $foto.'.webp'));
            $producto->imagen=$foto.'.webp';
        }
        $producto->descripcion=$request->input('descripcion');
        $producto->slug=Str::slug($producto->nombre);
        $producto->baja=1;
        $producto->id_categoria=$request->input('categoria');
        $producto->save();
        $status="Producto agregado :)";
        return view('IntProductos.index',compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id)->firstOrFail();
        $categorias=Categoria::all();
        return view('IntProductos.edit',compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto=Producto::find($id)->firstOrFail();
        $producto->nombre=$request->input('nombre');
        if($request->hasFile('img')){
            $file_path = public_path() . "/imgproductos/$producto->imagen";
            \File::delete($file_path);

            $file=$request->file('img');
            $foto= $producto->nombre;
            $image= Image::make($file)->encode('webp',90)->save(public_path('/imgproductos/' . $foto.'.webp'));
            $producto->imagen=$foto.'.webp';
        }
        $producto->descripcion=$request->input('descripcion');
        $producto->slug=Str::slug($producto->nombre);
        $producto->baja=1;
        $producto->id_categoria=$request->input('categoria');
        $producto->save();
        $status="Producto agregado :)";

        $productos=Producto::where('baja','=',1)->paginate(2);;
        return view('IntProductos.index',compact('status','productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::find($id)->firstOrFail();
        $producto->baja=0;
        $producto->save();
        $status="Producto agregado :)";
        $productos=Producto::where('baja','=',1)->paginate(2);;
        return view('IntProductos.index',compact('status','productos'));
    }
}

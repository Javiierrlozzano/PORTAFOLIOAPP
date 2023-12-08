<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Cliente;
/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();

        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $categoria= Categoria::pluck('NombreCategoria','id');
        return view('producto.create', compact('producto','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);
        $Imagene = null;
        $Imagene2 = null;
        $Imagene3 = null;
        $Imagene4 = null;
        if (request()->hasFile('Imagen')) {
            $uploadedFile = request()->file('Imagen');
            $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
            $Imagene = Storage::url('app/'.$path); // Obtener la URL del archivo almacenado
        }
        if (request()->hasFile('Imagen2')) {
            $uploadedFile = request()->file('Imagen2');
            $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
            $Imagene2 = Storage::url('app/'.$path); // Obtener la URL del archivo almacenado
        }
        if (request()->hasFile('Imagen3')) {
            $uploadedFile = request()->file('Imagen3');
            $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
            $Imagene3 = Storage::url('app/'.$path); // Obtener la URL del archivo almacenado
        }
        if (request()->hasFile('Imagen4')) {
            $uploadedFile = request()->file('Imagen4');
            $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
            $Imagene4 = Storage::url('app/'.$path); // Obtener la URL del archivo almacenado
        }

        $producto = Producto::create([
            'NombreProducto' => $request->NombreProducto,
            'Estado' => $request->Estado,
            'Valor' => $request->Valor,
            'Oferta' => $request->Oferta,
            'Descripcion' => $request->Descripcion,
            'CantidadExitente' => $request->CantidadExitente,
            'Descuento' => $request->Descuento,
            'Categoria_id' => $request->Categoria_id,
            'agregarcomentario' => $request->agregarcomentario,
        ]);
        
        if ($Imagene) {
            $producto->Imagen = $Imagene;
        }
        
        if ($Imagene2) {
            $producto->Imagen2 = $Imagene2;
        }
        
        if ($Imagene3) {
            $producto->Imagen3 = $Imagene3;
        }
        
        if ($Imagene4) {
            $producto->Imagen4 = $Imagene4;
        }
        
        $producto->save();
        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias =Categoria::all();
        $producto = Producto::find($id);
        $empresas= Empresa::where('Estado','Activo')->first();
        $cliente=null;
        return view('producto.show', compact('producto','empresas','categorias','cliente'));
    }

    public function mostrar($id,$clientes)
    {
        $categorias =Categoria::all(); 
        $producto = Producto::find($id);
        $empresas= Empresa::where('Estado','Activo')->first();
        $cliente = Cliente::find($clientes);
        return view('producto.show', compact('producto','empresas','categorias','cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria= Categoria::pluck('NombreCategoria','id');
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto','categoria'));
    }
// app/Models/Product.php

public function autocomplete(Request $request)
{
    $term = $request->input('term');
    $productos = Producto::where('NombreProducto', 'LIKE', "%$term%")->get();

    return response()->json($productos);
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

$Imagene = null;
$Imagene2 = null;
$Imagene3 = null;
$Imagene4 = null;

// Verifica si hay archivo adjunto y actualiza las variables correspondientes
if (request()->hasFile('Imagen')) {
    $uploadedFile = request()->file('Imagen');
    $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
    $Imagene = Storage::url('app/' . $path); // Obtener la URL del archivo almacenado
}

if (request()->hasFile('Imagen2')) {
    $uploadedFile = request()->file('Imagen2');
    $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
    $Imagene2 = Storage::url('app/' . $path); // Obtener la URL del archivo almacenado
}

if (request()->hasFile('Imagen3')) {
    $uploadedFile = request()->file('Imagen3');
    $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
    $Imagene3 = Storage::url('app/' . $path); // Obtener la URL del archivo almacenado
}

if (request()->hasFile('Imagen4')) {
    $uploadedFile = request()->file('Imagen4');
    $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
    $Imagene4 = Storage::url('app/' . $path); // Obtener la URL del archivo almacenado
}

$producto->update([
    'NombreProducto' => $request->NombreProducto,
    'Estado' => $request->Estado,
    'Valor' => $request->Valor,
    'Oferta' => $request->Oferta,
    'Descripcion' => $request->Descripcion,
    'CantidadExitente' => $request->CantidadExitente,
    'Descuento' => $request->Descuento,
    'Categoria_id' => $request->Categoria_id,
    'agregarcomentario' => $request->agregarcomentario,
]);

if ($Imagene) {
    $producto->Imagen = $Imagene;
}

if ($Imagene2) {
    $producto->Imagen2 = $Imagene2;
}

if ($Imagene3) {
    $producto->Imagen3 = $Imagene3;
}

if ($Imagene4) {
    $producto->Imagen4 = $Imagene4;
}

$producto->save();
return redirect()->route('productos.index')
    ->with('success', 'Producto actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}

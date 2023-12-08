<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/**
 * Class EmpresaController
 * @package App\Http\Controllers
 */
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::paginate();

        return view('empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = new Empresa();
        return view('empresa.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empresa::$rules);
        $Imagene = null;
        if (request()->hasFile('Logo')) {
            $uploadedFile = request()->file('Logo');
            $path = $uploadedFile->store(''); // Almacenar la imagen en la carpeta "storage/app/public/Imagen"
            $Imagene = Storage::url('app/'.$path); // Obtener la URL del archivo almacenado
        }
        
        $empresa = Empresa::create([
            'Nombre'=> $request->Nombre,
            'Nit'=> $request->Nit,
            'Direccion'=>$request->Direccion,
            'Telefono'=>$request->Telefono,
            'celular'=>$request->celular,
            'Logo'=>$Imagene,
            'Eslogan'=>$request->Eslogan,
            'Estado'=>$request->Estado,
        ]);

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresa $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        request()->validate(Empresa::$rules);

        $empresa->update($request->all());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id)->delete();

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa deleted successfully');
    }
}

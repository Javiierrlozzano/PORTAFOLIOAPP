<?php

namespace App\Http\Controllers;

use App\Models\Detfactura;
use Illuminate\Http\Request;

/**
 * Class DetfacturaController
 * @package App\Http\Controllers
 */
class DetfacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detfacturas = Detfactura::paginate();

        return view('detfactura.index', compact('detfacturas'))
            ->with('i', (request()->input('page', 1) - 1) * $detfacturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detfactura = new Detfactura();
        return view('detfactura.create', compact('detfactura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detfactura::$rules);

        $detfactura = Detfactura::create($request->all());

        return redirect()->route('detfacturas.index')
            ->with('success', 'Detfactura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detfactura = Detfactura::find($id);

        return view('detfactura.show', compact('detfactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detfactura = Detfactura::find($id);

        return view('detfactura.edit', compact('detfactura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detfactura $detfactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detfactura $detfactura)
    {
        request()->validate(Detfactura::$rules);

        $detfactura->update($request->all());

        return redirect()->route('detfacturas.index')
            ->with('success', 'Detfactura updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detfactura = Detfactura::find($id)->delete();

        return redirect()->route('detfacturas.index')
            ->with('success', 'Detfactura deleted successfully');
    }
}

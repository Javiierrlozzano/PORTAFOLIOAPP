<?php

namespace App\Http\Controllers;

use App\Models\Movimientosdetallado;
use Illuminate\Http\Request;

/**
 * Class MovimientosdetalladoController
 * @package App\Http\Controllers
 */
class MovimientosdetalladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientosdetallados = Movimientosdetallado::paginate();

        return view('movimientosdetallado.index', compact('movimientosdetallados'))
            ->with('i', (request()->input('page', 1) - 1) * $movimientosdetallados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimientosdetallado = new Movimientosdetallado();
        return view('movimientosdetallado.create', compact('movimientosdetallado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Movimientosdetallado::$rules);

        $movimientosdetallado = Movimientosdetallado::create($request->all());

        return redirect()->route('movimientosdetallados.index')
            ->with('success', 'Movimientosdetallado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movimientosdetallado = Movimientosdetallado::find($id);

        return view('movimientosdetallado.show', compact('movimientosdetallado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimientosdetallado = Movimientosdetallado::find($id);

        return view('movimientosdetallado.edit', compact('movimientosdetallado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Movimientosdetallado $movimientosdetallado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimientosdetallado $movimientosdetallado)
    {
        request()->validate(Movimientosdetallado::$rules);

        $movimientosdetallado->update($request->all());

        return redirect()->route('movimientosdetallados.index')
            ->with('success', 'Movimientosdetallado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $movimientosdetallado = Movimientosdetallado::find($id)->delete();

        return redirect()->route('movimientosdetallados.index')
            ->with('success', 'Movimientosdetallado deleted successfully');
    }
}

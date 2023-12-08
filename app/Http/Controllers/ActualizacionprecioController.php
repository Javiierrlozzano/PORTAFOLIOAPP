<?php

namespace App\Http\Controllers;

use App\Models\Actualizacionprecio;
use Illuminate\Http\Request;

/**
 * Class ActualizacionprecioController
 * @package App\Http\Controllers
 */
class ActualizacionprecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualizacionprecios = Actualizacionprecio::paginate();

        return view('actualizacionprecio.index', compact('actualizacionprecios'))
            ->with('i', (request()->input('page', 1) - 1) * $actualizacionprecios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actualizacionprecio = new Actualizacionprecio();
        return view('actualizacionprecio.create', compact('actualizacionprecio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Actualizacionprecio::$rules);

        $actualizacionprecio = Actualizacionprecio::create($request->all());

        return redirect()->route('actualizacionprecios.index')
            ->with('success', 'Actualizacionprecio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actualizacionprecio = Actualizacionprecio::find($id);

        return view('actualizacionprecio.show', compact('actualizacionprecio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actualizacionprecio = Actualizacionprecio::find($id);

        return view('actualizacionprecio.edit', compact('actualizacionprecio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actualizacionprecio $actualizacionprecio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualizacionprecio $actualizacionprecio)
    {
        request()->validate(Actualizacionprecio::$rules);

        $actualizacionprecio->update($request->all());

        return redirect()->route('actualizacionprecios.index')
            ->with('success', 'Actualizacionprecio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $actualizacionprecio = Actualizacionprecio::find($id)->delete();

        return redirect()->route('actualizacionprecios.index')
            ->with('success', 'Actualizacionprecio deleted successfully');
    }
}

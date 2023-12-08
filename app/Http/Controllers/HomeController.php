<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
   
        // Verificar si el usuario está autenticado
                if (Auth::check()) {
                    // Verificar el rol del usuario
                    if (Auth::user()->perfil =='Administrador') {
                        // Usuario es administrador, redirigir al área de administrador
                        return view('home');
                    } else {
                        // Usuario no es administrador, redirigir al área normal
                        return redirect('/');
                    }
                }

                // Usuario no está autenticado, redirigir a la página de bienvenida
                return redirect('/');
                }

            }

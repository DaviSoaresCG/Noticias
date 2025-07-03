<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
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
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $noticias = Noticia::where('user_id', Auth::id())->get();
        return view('dashboard', compact('noticias'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string'
        ]);

        $noticias = Noticia::where('title', 'LIKE', '%' . $request->search . '%')
            ->where('user_id',Auth::id())
            ->get();

        foreach ($noticias as $noticia) {
                $noticia->content = Str::words($noticia->content, 100);
            
        }


        return view('dashboard', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validação
        $request->validate([
            'title' => 'required|min:3|max:255|string',
            'content' => 'required|min:3|max:60000|string'
        ]);

        $noticia = Noticia::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $noticia = Noticia::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('noticias.noticia_completa', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $noticia = Noticia::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:3|max:60000'
        ]);

        $noticia = Noticia::findOrFail($id);

        $noticia->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $noticia = Noticia::where('user_id', Auth::id())
            ->where('id', $id)
            ->firstOrFail();

        $noticia->delete();

        return redirect()->route('home');
    }
}

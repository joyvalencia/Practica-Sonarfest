<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class EntradaController extends Controller
{
   public function mevesentrades(): View{
       $entrades = Entrada::with(['concert.artista'])
            ->where('user_id', Auth::id())
            ->get();
       return view('entrades.meves', compact('entrades'));
    }

    public function create(Concert $concert): View{
       $concert->load('artista', 'escenari');
       return view('entrades.create', compact('concert'));
    }

    public function store(Request $request, Concert $concert): RedirectResponse{
       $request->validate([
           'preu_pagat'=>'required|numeric|min:0.01',
       ]);

       Entrada::create([
           'user_id' => Auth::id(),
           'concert_id'=> $concert->id,
           'preu_pagat'=> $request->preu_pagat,
       ]);
       return redirect()->route('entrades.meves');
    }

    public function assistents(Concert $concert): View{
       $entrades = $concert->entrades()->with('user')->get();
       return view('entrades.assistents', compact('concert', 'entrades'));
    }
}

@extends('layouts.app')

@section('content')
    <div style="padding: 20px; max-width: 600px; margin: 0 auto;">
        <h1>Comprar entrada</h1>

        <a href="{{ route('concerts.show', $concert) }}">Tornar</a>

        <div style="margin-top: 20px;">
            <p>
                <strong>Concert:</strong> {{ $concert->nom }}
            </p>

            <p>
                <strong>Artista:</strong> {{ $concert->artista->nom }}
            </p>

            <p>
                <strong>Data:</strong> {{ $concert->data_hora }}
            </p>

            <p>
                <strong>Escenari:</strong> {{ $concert->escenari->nom }}
            </p>

            <form action="{{ route('entrades.store', $concert) }}" method="POST">
                @csrf

                <p>
                    <label style="font-weight: bold;">Preu de l'entrada:</label><br>
                    <input type="number" name="preu_pagat"
                           value="{{ old('preu_pagat') }}"
                           step="0.01" min="0.01" required
                           style="width: 100%; padding: 8px; margin-top: 5px;">

                    @error('preu_pagat')
                    <br><span style="color: red; font-size: 0.9em;">{{ $message }}</span>
                    @enderror
                </p>

                <p style="margin-top: 25px;">
                    <button type="submit" style="background: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">
                        Comprar entrada
                    </button>
                </p>
            </form>
        </div>
    </div>
@endsection


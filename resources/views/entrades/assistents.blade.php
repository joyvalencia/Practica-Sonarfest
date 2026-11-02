@extends('layouts.app')

@section('content')
    <div style="padding: 20px; max-width: 1000px; margin: 0 auto;">
        <h1>Assistents del concert</h1>

        <a href="{{ route('concerts.show', $concert) }}">Tornar</a>

        <h2 style="margin-top: 20px;">{{ $concert->nom }}</h2>

        <p>
            <strong>Escenari:</strong> {{ $concert->escenari->nom }}
        </p>

        <p>
            <strong>Entrades venudes:</strong>
            {{ $entrades->count() }} / {{ $concert->escenari->aforament_maxim }}
        </p>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; text-align: left;">
            <thead>
            <tr style="background-color: #f3f4f6; border-bottom: 2px solid #e5e7eb;">
                <th style="padding: 12px;">Nom d'usuari</th>
                <th style="padding: 12px;">Data de compra</th>
                <th style="padding: 12px;">Codi d'entrada</th>
            </tr>
            </thead>

            <tbody>
            @foreach($entrades as $entrada)
                <tr style="border-bottom: 1px solid #e5e7eb;">
                    <td style="padding: 12px;">{{ $entrada->user->name }}</td>
                    <td style="padding: 12px;">{{ $entrada->created_at }}</td>
                    <td style="padding: 12px;">{{ $entrada->codi_entrada }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

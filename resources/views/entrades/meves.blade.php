@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Les meves entrades</h1>

        @if($entrades->isEmpty())
            <p>Encara no has comprat cap entrada.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Concert</th>
                    <th>Artista</th>
                    <th>Data</th>
                    <th>Preu pagat</th>
                    <th>Codi d'entrada</th>
                </tr>
                </thead>
                <tbody>
                @foreach($entrades as $entrada)
                    <tr>
                        <td>
                            <a href="{{ route('concerts.show', $entrada->concert) }}">
                                {{ $entrada->concert->nom }}
                            </a>
                        </td>
                        <td>{{ $entrada->concert->artista->nom }}</td>
                        <td>{{ $entrada->concert->data_hora }}</td>
                        <td>{{ $entrada->preu_pagat }} €</td>
                        <td>{{ $entrada->codi_entrada }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

<?php

namespace Database\Seeders;

use App\Models\Entrada;
use App\Models\Concert;
use App\Models\User;
use Illuminate\Database\Seeder;

class EntradaSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Creem 5 usuaris de prova
        $usuaris = User::orderBy('id')->take(5)->get();

        // 2. Agafem els 15 concerts
        $concerts = Concert::orderBy('id')->take(15)->get();

        // 3. Creem les entrades

        // Concert 1
        Entrada::create(['user_id' => $usuaris[0]->id, 'concert_id' => $concerts[0]->id, 'preu_pagat' => 25.00]);
        Entrada::create(['user_id' => $usuaris[1]->id, 'concert_id' => $concerts[0]->id, 'preu_pagat' => 30.00]);

        // Concert 2
        Entrada::create(['user_id' => $usuaris[2]->id, 'concert_id' => $concerts[1]->id, 'preu_pagat' => 25.00]);
        Entrada::create(['user_id' => $usuaris[3]->id, 'concert_id' => $concerts[1]->id, 'preu_pagat' => 35.00]);

        // Concert 3
        Entrada::create(['user_id' => $usuaris[4]->id, 'concert_id' => $concerts[2]->id, 'preu_pagat' => 30.00]);
        Entrada::create(['user_id' => $usuaris[0]->id, 'concert_id' => $concerts[2]->id, 'preu_pagat' => 25.00]);

        // Concert 4
        Entrada::create(['user_id' => $usuaris[1]->id, 'concert_id' => $concerts[3]->id, 'preu_pagat' => 35.00]);
        Entrada::create(['user_id' => $usuaris[2]->id, 'concert_id' => $concerts[3]->id, 'preu_pagat' => 30.00]);

        // Concert 5
        Entrada::create(['user_id' => $usuaris[3]->id, 'concert_id' => $concerts[4]->id, 'preu_pagat' => 25.00]);
        Entrada::create(['user_id' => $usuaris[4]->id, 'concert_id' => $concerts[4]->id, 'preu_pagat' => 35.00]);

        // Concert 6
        Entrada::create(['user_id' => $usuaris[0]->id, 'concert_id' => $concerts[5]->id, 'preu_pagat' => 30.00]);
        Entrada::create(['user_id' => $usuaris[1]->id, 'concert_id' => $concerts[5]->id, 'preu_pagat' => 25.00]);

        // Concert 7
        Entrada::create(['user_id' => $usuaris[2]->id, 'concert_id' => $concerts[6]->id, 'preu_pagat' => 35.00]);
        Entrada::create(['user_id' => $usuaris[3]->id, 'concert_id' => $concerts[6]->id, 'preu_pagat' => 30.00]);

        // Concert 8
        Entrada::create(['user_id' => $usuaris[4]->id, 'concert_id' => $concerts[7]->id, 'preu_pagat' => 25.00]);
        Entrada::create(['user_id' => $usuaris[0]->id, 'concert_id' => $concerts[7]->id, 'preu_pagat' => 35.00]);

        // Concert 9
        Entrada::create(['user_id' => $usuaris[1]->id, 'concert_id' => $concerts[8]->id, 'preu_pagat' => 30.00]);
        Entrada::create(['user_id' => $usuaris[2]->id, 'concert_id' => $concerts[8]->id, 'preu_pagat' => 25.00]);

        // Concert 10
        Entrada::create(['user_id' => $usuaris[3]->id, 'concert_id' => $concerts[9]->id, 'preu_pagat' => 35.00]);
        Entrada::create(['user_id' => $usuaris[4]->id, 'concert_id' => $concerts[9]->id, 'preu_pagat' => 30.00]);

        // Concert 11
        Entrada::create(['user_id' => $usuaris[0]->id, 'concert_id' => $concerts[10]->id, 'preu_pagat' => 25.00]);
        Entrada::create(['user_id' => $usuaris[1]->id, 'concert_id' => $concerts[10]->id, 'preu_pagat' => 35.00]);

        // Concert 12
        Entrada::create(['user_id' => $usuaris[2]->id, 'concert_id' => $concerts[11]->id, 'preu_pagat' => 30.00]);
        Entrada::create(['user_id' => $usuaris[3]->id, 'concert_id' => $concerts[11]->id, 'preu_pagat' => 25.00]);

        // Concert 13
        Entrada::create(['user_id' => $usuaris[4]->id, 'concert_id' => $concerts[12]->id, 'preu_pagat' => 35.00]);
        Entrada::create(['user_id' => $usuaris[0]->id, 'concert_id' => $concerts[12]->id, 'preu_pagat' => 30.00]);

        // Concert 14
        Entrada::create(['user_id' => $usuaris[1]->id, 'concert_id' => $concerts[13]->id, 'preu_pagat' => 25.00]);
        Entrada::create(['user_id' => $usuaris[2]->id, 'concert_id' => $concerts[13]->id, 'preu_pagat' => 35.00]);

        // Concert 15
        Entrada::create(['user_id' => $usuaris[3]->id, 'concert_id' => $concerts[14]->id, 'preu_pagat' => 30.00]);
        Entrada::create(['user_id' => $usuaris[4]->id, 'concert_id' => $concerts[14]->id, 'preu_pagat' => 25.00]);
    }
}

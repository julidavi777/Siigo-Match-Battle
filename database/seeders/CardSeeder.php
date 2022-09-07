<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create([
            'title' => 'A1',
            'rank' => 'Cabo tercero',
            'attack' => 15,
            'defense' => 20,
            'energy' => 35,
            'intelligence' => 22,
            'strategy' => 29,
            'image' => 'https://github.com/julidavi777/images/blob/master/cabo_primero.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'A2',
            'rank' => 'Cabo Segundo',
            'attack' => 18,
            'defense' => 22,
            'energy' => 33,
            'intelligence' => 25,
            'strategy' => 32,
            'image' => 'https://github.com/julidavi777/images/blob/master/cabo_segundo.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'A3',
            'rank' => 'Cabo Primero',
            'attack' => 17,
            'defense' => 27,
            'energy' => 29,
            'intelligence' => 27,
            'strategy' => 33,
            'image' => 'https://github.com/julidavi777/images/blob/master/cabo_primero.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'A4',
            'rank' => 'Sargeno Segundo',
            'attack' => 15,
            'defense' => 31,
            'energy' => 18,
            'intelligence' => 32,
            'strategy' => 39,
            'image' => 'https://github.com/julidavi777/images/blob/master/sargento_segundo.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'B1',
            'rank' => 'Sargento Viceprimero',
            'attack' => 14,
            'defense' => 33,
            'energy' => 23,
            'intelligence' => 25,
            'strategy' => 41,
            'image' => 'https://github.com/julidavi777/images/blob/master/sargento_viceprimero.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'B2',
            'rank' => 'Sargento Primero',
            'attack' => 10,
            'defense' => 30,
            'energy' => 12,
            'intelligence' => 29,
            'strategy' => 47,
            'image' => 'https://github.com/julidavi777/images/blob/master/sargento_primero.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'B3',
            'rank' => 'Sargento Mayor',
            'attack' => 9,
            'defense' => 32,
            'energy' => 11,
            'intelligence' => 35,
            'strategy' => 52,
            'image' => 'https://github.com/julidavi777/images/blob/master/sargento_Mayor.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'B4',
            'rank' => 'Sargento Mayor Comando',
            'attack' => 18,
            'defense' => 18,
            'energy' => 10,
            'intelligence' => 41,
            'strategy' => 54,
            'image' => 'https://github.com/julidavi777/images/blob/master/sargento_mayor_comando.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'C1',
            'rank' => 'Sargento Mayor Comando Conjunto',
            'attack' => 17,
            'defense' => 21,
            'energy' => 12,
            'intelligence' => 55,
            'strategy' => 50,
            'image' => 'https://github.com/julidavi777/images/blob/master/sargento_mayor_comando_conjunto.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'C2',
            'rank' => 'Marinero Primero',
            'attack' => 11,
            'defense' => 15,
            'energy' => 21,
            'intelligence' => 22,
            'strategy' => 18,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/suboficiales/marinero_primero.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'C3',
            'rank' => 'Suboficial Tercero',
            'attack' => 19,
            'defense' => 23,
            'energy' => 41,
            'intelligence' => 34,
            'strategy' => 36,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/suboficiales/suboficial_tercero.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'C4',
            'rank' => 'Suboficial Segundo',
            'attack' => 20,
            'defense' => 21,
            'energy' => 45,
            'intelligence' => 37,
            'strategy' => 36,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/suboficiales/suboficial_segundo.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'D1',
            'rank' => 'Suboficial Primero',
            'attack' => 21,
            'defense' => 21,
            'energy' => 47,
            'intelligence' => 39,
            'strategy' => 35,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/suboficiales/suboficial_primero.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'D2',
            'rank' => 'Suboficial Jefe',
            'attack' => 23,
            'defense' => 22,
            'energy' => 27,
            'intelligence' => 51,
            'strategy' => 55,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/suboficiales/suboficial_jefe.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'D3',
            'rank' => 'Suboficial Jefe Tecnico',
            'attack' => 25,
            'defense' => 42,
            'energy' => 25,
            'intelligence' => 55,
            'strategy' => 60,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/suboficiales/suboficial_jefe_tecnico.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'D4',
            'rank' => 'Suboficial Jefe Tecnico Comando',
            'attack' => 29,
            'defense' => 41,
            'energy' => 24,
            'intelligence' => 54,
            'strategy' => 60,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/suboficiales/suboficial_jefe_tecnico_comando.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'E2',
            'rank' => 'Teniente',
            'attack' => 20,
            'defense' => 15,
            'energy' => 25,
            'intelligence' => 22,
            'strategy' => 25,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/teniente.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'E3',
            'rank' => 'Teniente de Fragata',
            'attack' => 22,
            'defense' => 25,
            'energy' => 27,
            'intelligence' => 29,
            'strategy' => 28,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/teniente_fragata.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'E4',
            'rank' => 'Teniente de Navio',
            'attack' => 24,
            'defense' => 29,
            'energy' => 35,
            'intelligence' => 18,
            'strategy' => 21,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/teniente_navio.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'F1',
            'rank' => 'Capitán de Corbeta',
            'attack' => 21,
            'defense' => 28,
            'energy' => 37,
            'intelligence' => 31,
            'strategy' => 28,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/capitan_corbeta.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'F2',
            'rank' => 'Capitán de Fragata',
            'attack' => 22,
            'defense' => 27,
            'energy' => 30,
            'intelligence' => 39,
            'strategy' => 27,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/capitan_fragata.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'F3',
            'rank' => 'Capitán de Navío',
            'attack' => 24,
            'defense' => 28,
            'energy' => 28,
            'intelligence' => 41,
            'strategy' => 38,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/capitan_navio.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'F4',
            'rank' => 'Contralmirante ',
            'attack' => 24,
            'defense' => 28,
            'energy' => 30,
            'intelligence' => 45,
            'strategy' => 40,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/contraalmirante.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'G1',
            'rank' => 'Almirante',
            'attack' => 25,
            'defense' => 25,
            'energy' => 32,
            'intelligence' => 49,
            'strategy' => 41,
            'image' => 'https://github.com/julidavi777/images/blob/master/marina/oficiales/almirante.jpg?raw=true'
        ]);
        Card::create([
            'title' => 'G2',
            'rank' => 'Aerotécnico',
            'attack' => 18,
            'defense' => 25,
            'energy' => 40,
            'intelligence' => 26,
            'strategy' => 29,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/aerotecnico.PNG?raw=true'

        ]);
        Card::create([
            'title' => 'G3',
            'rank' => 'Técnico Cuarto',
            'attack' => 19,
            'defense' => 24,
            'energy' => 42,
            'intelligence' => 29,
            'strategy' => 31,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/tecnico_cuarto.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'G4',
            'rank' => 'Técnico Tercero',
            'attack' => 25,
            'defense' => 25,
            'energy' => 37,
            'intelligence' => 30,
            'strategy' => 33,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/tecnico_tercero.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'H1',
            'rank' => 'Técnico Segundo',
            'attack' => 27,
            'defense' => 25,
            'energy' => 39,
            'intelligence' => 31,
            'strategy' => 37,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/tecnico_segundo.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'H2',
            'rank' => 'Técnico Primero',
            'attack' => 27,
            'defense' => 25,
            'energy' => 41,
            'intelligence' => 34,
            'strategy' => 36,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/tecnico_primero.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'H3',
            'rank' => 'Técnico Subjefe',
            'attack' => 29,
            'defense' => 26,
            'energy' => 35,
            'intelligence' => 34,
            'strategy' => 35,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/tecnico_subjefe.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'H4',
            'rank' => 'Técnico Jefe',
            'attack' => 31,
            'defense' => 28,
            'energy' => 39,
            'intelligence' => 36,
            'strategy' => 30,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/tecnico_jefe.PNG?raw=true'
        ]);
        Card::create([
            'title' => 'E1',
            'rank' => 'Técnico Jefe Comando',
            'attack' => 37,
            'defense' => 31,
            'energy' => 35,
            'intelligence' => 35,
            'strategy' => 39,
            'image' => 'https://github.com/julidavi777/images/blob/master/aerea/tecnico_jefe_comando.PNG?raw=true'
        ]);
    }
}

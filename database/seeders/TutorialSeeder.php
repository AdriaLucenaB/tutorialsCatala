<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tutorial;

class TutorialSeeder extends Seeder
{
    public function run()
    {
        // Crear 5 tutoriales de ejemplo
        Tutorial::create([
            'title' => 'Reparació de pantalla d\'iPhone',
            'summary' => 'Aprèn com substituir la pantalla d\'un iPhone.',
            'steps' => json_encode([
                '1. Apaga l\'iPhone',
                '2. Desmunta la carcassa',
                '3. Desconnecta la pantalla',
                '4. Substitueix la pantalla',
                '5. Reconnecta la pantalla i torna a muntar',
            ]),
            'device' => 'iPhone',
            'language' => 'ca',
        ]);

        Tutorial::create([
            'title' => 'Substitució de bateria d\'iPhone',
            'summary' => 'Guia pas a pas per canviar la bateria d\'un iPhone.',
            'steps' => json_encode([
                '1. Apaga l\'iPhone',
                '2. Desmunta la carcassa',
                '3. Desconnecta la bateria',
                '4. Col·loca la nova bateria',
                '5. Reconnecta la bateria i torna a muntar',
            ]),
            'device' => 'iPhone',
            'language' => 'ca',
        ]);

        Tutorial::create([
            'title' => 'Reparació d\'una càmera digital',
            'summary' => 'Tutorial per reparar una càmera digital que no engega.',
            'steps' => json_encode([
                '1. Apaga la càmera',
                '2. Treu la bateria',
                '3. Inspecciona els components interns',
                '4. Canvia els components danyats',
                '5. Torna a muntar la càmera i prova',
            ]),
            'device' => 'Càmera Digital',
            'language' => 'ca',
        ]);

        Tutorial::create([
            'title' => 'Reparació d\'un ordinador portàtil',
            'summary' => 'Guia per solucionar els problemes d\'encès d\'un ordinador portàtil.',
            'steps' => json_encode([
                '1. Desconnecta el portàtil de l\'energia',
                '2. Obre la tapa',
                '3. Comprova les connexions internes',
                '4. Reemplaça els components danyats',
                '5. Tanca i prova el portàtil',
            ]),
            'device' => 'Ordinador Portàtil',
            'language' => 'ca',
        ]);

        Tutorial::create([
            'title' => 'Reparació d\'un ordinador de sobretaula',
            'summary' => 'Passos per reparar una font d\'alimentació d\'un ordinador de sobretaula.',
            'steps' => json_encode([
                '1. Apaga l\'ordinador',
                '2. Desconnecta els cables',
                '3. Desmunta la torre',
                '4. Substitueix la font d\'alimentació',
                '5. Torna a muntar la torre i prova',
            ]),
            'device' => 'Ordinador de sobretaula',
            'language' => 'ca',
        ]);
    }
}

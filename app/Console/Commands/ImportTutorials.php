<?php

// app/Console/Commands/ImportTutorials.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Tutorial;

class ImportTutorials extends Command
{
    protected $signature = 'ifixit:import {device}';
    protected $description = 'Importa tutorials des de iFixit per a un dispositiu concret';

    public function handle()
    {
         $device = $this->argument('device');
        
        // Hacer la solicitud a la API con el parámetro 'namespace=ITEM'
        $response = Http::get("https://www.ifixit.com/api/2.0/wikis/device/$device?namespace=ITEM");

        // Verificar si la solicitud falló
        if ($response->failed()) {
            $this->error('Error en descarregar informació.');
            $this->line('Código de respuesta: ' . $response->status());  // Mostrar el código de estado HTTP
            $this->line('Respuesta completa: ' . $response->body());   // Mostrar el contenido completo de la respuesta
            return;
        }

        $data = $response->json();

        // Verificar si los datos de la respuesta son válidos
        if (empty($data)) {
            $this->error('La respuesta de la API está vacía.');
            $this->line('Respuesta completa: ' . json_encode($data)); // Mostrar la respuesta completa
            return;
        }

        // Verificar si los tutoriales están presentes en la respuesta
        if (!isset($data['tutorials']) || empty($data['tutorials'])) {
            $this->error('No s\'han trobat tutorials per al dispositiu: ' . $device);
            $this->line('Respuesta completa: ' . json_encode($data)); // Mostrar la respuesta completa
            return;
        }

        // Importar los tutoriales
        foreach ($data['tutorials'] as $tutorial) {
            Tutorial::create([
                'title' => $tutorial['title'],
                'summary' => $tutorial['summary'] ?? '',
                'steps' => json_encode($tutorial['steps'] ?? []),
                'device' => $device,
                'language' => 'ca'
            ]);
        }

        $this->info("Tutorials importats des de la API de iFixit per al dispositiu: " . $device);
    }
}
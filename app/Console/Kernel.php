<?php
// app/Console/Kernel.php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Los comandos de la aplicación.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\ImportTutorials::class,  // Asegúrate de que esté registrado aquí
    ];

    /**
     * Definir la programación de las tareas.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Puedes programar tareas aquí si lo deseas
    }

    /**
     * Registrar los comandos para la aplicación.
     *
     * @return void
     */
    protected function commands()
    {
        // Cargar todos los comandos de la carpeta Commands
        $this->load(__DIR__.'/Commands');

        // Cargar las rutas de los comandos
        require base_path('routes/console.php');
    }
}

<?php
use App\Http\Controllers\TutorialController;

Route::get('/', function () {
    return redirect('/tutorials');
});

// Rutas de recursos para tutoriales
Route::resource('tutorials', TutorialController::class);
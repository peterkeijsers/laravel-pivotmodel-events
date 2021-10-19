<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'learningObjectives' => \App\Models\LearningObjective::paginate(10),
        'tags' => \App\Models\Tag::all()
    ]);
});

Route::put('/learningobjective/{learningObjective}', function (\App\Models\LearningObjective $learningObjective) {
    $randomTag = \App\Models\Tag::all()->random();
    $learningObjective->tags()->save($randomTag);
    return redirect('/');
})->name('learningObjective.update');

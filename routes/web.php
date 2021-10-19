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
        'learningObjectives' => \App\Models\LearningObjective::with('tags')->paginate(10)
    ]);
});

Route::put('/learningobjective/addtag{learningObjective}', function (\App\Models\LearningObjective $learningObjective) {
    $randomTag = \App\Models\Tag::all()->random();
    $learningObjective->tags()->save($randomTag);
    return redirect('/');
})->name('learningObjective.addRandomTag');

Route::delete('/learningobjective/deletetag/{learningObjective}', function (\App\Models\LearningObjective $learningObjective) {
    $randomTag = $learningObjective->tags()->get()->random();
    $learningObjective->tags()->detach($randomTag);
    return redirect('/');
})->name('learningObjective.deleteRandomTag');

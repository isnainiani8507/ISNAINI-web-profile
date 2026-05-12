<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificationController;

Route::get('/', function () {
    $educations = DB::table('education_histories')->get();
    return view('index', ['educations' => $educations]);
});

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/interests', [InterestController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/certifications', [CertificationController::class, 'index']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\AsignaturaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD API para Cliente
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/all', [ClienteController::class, 'all']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::put('/clientes', [ClienteController::class, 'update']);
Route::delete('/clientes', [ClienteController::class, 'destroy']);

// CRUD API para Profesor
Route::get('/profesores', [ProfesorController::class, 'index']);
Route::post('/profesores', [ProfesorController::class, 'store']);
Route::get('/profesores/{id}', [ProfesorController::class, 'show']);
Route::put('/profesores/{id}', [ProfesorController::class, 'update']);
Route::delete('/profesores/{id}', [ProfesorController::class, 'destroy']);

// CRUD API para Proyecto
Route::get('/proyectos', [ProyectoController::class, 'index']);
Route::post('/proyectos', [ProyectoController::class, 'store']);
Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);

// CRUD API para Estudiantes
Route::get('/estudiantes', [EstudiantesController::class, 'index']);
Route::post('/estudiantes', [EstudiantesController::class, 'store']);
Route::get('/estudiantes/{id}', [EstudiantesController::class, 'show']);
Route::put('/estudiantes/{id}', [EstudiantesController::class, 'update']);
Route::delete('/estudiantes/{id}', [EstudiantesController::class, 'destroy']);

// Crud api Asignatura
Route::get('/asignaturas', [AsignaturaController::class, 'index']);
Route::post('/asignaturas', [AsignaturaController::class, 'store']);
Route::get('/asignaturas/{id}', [AsignaturaController::class, 'show']);
Route::put('/asignaturas/{id}', [AsignaturaController::class, 'update']);
Route::delete('/asignaturas/{id}', [AsignaturaController::class, 'destroy']);

// Asociar una asignatura a un proyecto
Route::post('/proyectos/{id}/asignaturas/{asignatura_id}', [ProyectoController::class, 'asociarAsignatura']);

// Desasociar una asignatura de un proyecto
Route::delete('/proyectos/{id}/asignaturas/{asignatura_id}', [ProyectoController::class, 'desasociarAsignatura']);



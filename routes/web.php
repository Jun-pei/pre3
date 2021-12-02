<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Cursos\CursosIndex;
use App\Http\Livewire\Cursos\CursosCreate;
use App\Http\Livewire\Cursos\CursosDelete;
use App\Http\Livewire\Cursos\CursosEdit;
use App\Http\Livewire\Cursos\CursosMostrar;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosMostrar;

Route::get('/cursos', CursosIndex::class)->name('cursos.index');
Route::get('/cursos/create', CursosCreate::class)->name('cursos.create');
Route::get('/cursos/{curso}/mostrar', CursosMostrar::class)->name('cursos.mostrar');
Route::get('/cursos/{curso}/edit', CursosEdit::class)->name('cursos.edit');
Route::get('/cursos/{curso}/delete', CursosDelete::class)->name('cursos.delete');

Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');
Route::get('/usuarios/create', UsuariosCreate::class)->name('usuarios.create');
Route::get('/usuarios/{usuario}/mostrar', UsuariosMostrar::class)->name('usuarios.mostrar');
Route::get('/usuarios/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');
Route::get('/usuarios/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');
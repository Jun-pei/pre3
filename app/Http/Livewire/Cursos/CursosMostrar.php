<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Livewire\Component;

class CursosMostrar extends Component
{
    public Curso $curso;
    public function render()
    {
        return view('livewire.cursos.cursos-mostrar');
    }
}
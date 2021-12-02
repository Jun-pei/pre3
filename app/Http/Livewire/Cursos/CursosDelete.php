<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Livewire\Component;

class CursosDelete extends Component
{
    public Curso $curso;
    public function render()
    {
        return view('livewire.cursos.cursos-delete');
    }

    public function delete()
    {
        $this->curso->delete();
        return redirect(route('cursos.index'));
    }
}
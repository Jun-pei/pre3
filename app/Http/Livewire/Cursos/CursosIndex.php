<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Livewire\Component;
use Livewire\WithPagination;

class CursosIndex extends Component
{

    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {

        $cursos = ($this->cargado == true) ? Curso::where('curso', 'LIKE', '%' . $this->search . '%')
            ->orwhere('categoria', 'LIKE', '%' . $this->search . '%')
            ->orwhere('precio', 'LIKE', '%' . $this->search . '%')
            ->paginate(5) : [];
        return view('livewire.cursos.cursos-index', compact('cursos'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}
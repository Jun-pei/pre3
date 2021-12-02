<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class CursosCreate extends Component
{

    use WithFileUploads;
    public Curso $curso;
    public $foto;

    public function mount()
    {
        $this->curso = new Curso();
    }

    public function render()
    {
        return view('livewire.cursos.cursos-create');
    }

    public function crear()
    {
        $this->validate();
        if ($this->foto != null) {
            $this->curso->foto = Storage::disk('public')->put('images/cursos', $this->foto);
        }
        $this->curso->save();
        return redirect(route('cursos.index'));
    }

    protected function rules()
    {
        return RulesCurso::Reglas();
    }
}
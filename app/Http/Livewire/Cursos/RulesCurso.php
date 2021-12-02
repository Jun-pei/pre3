<?php

namespace App\Http\Livewire\Cursos;

class RulesCurso
{

    public static function Reglas()
    {
        return
            [
                'curso.curso' => 'required|string',
                'curso.categoria' => 'required|string',
                'curso.precio' => 'numeric|required',
                'curso.subtitulos' => 'required',
                'foto'=>'nullable|image'
            ];
    }
}
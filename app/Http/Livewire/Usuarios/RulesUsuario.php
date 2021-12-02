<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function Reglas()
    {
        return
            [
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'required|string',
                'usuario.password' => 'required',
                'foto'=>'nullable|image'
            ];
    }
}
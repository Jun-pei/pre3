<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;

class UsuariosDelete extends Component
{
    public Usuario $usuario;
    public function render()
    {
        return view('livewire.usuarios.usuarios-delete');
    }

    public function delete()
    {
        $this->usuario->delete();
        return redirect(route('usuarios.index'));
    }
}
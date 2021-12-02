<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 150px;height:150px;" class="mx-auto mt-3 card-img-top"
            src="{{ $usuario->foto != null ? Storage::disk('public')->url($usuario->foto) : Storage::disk('public')->url('images/usuarios/default.png') }}" alt="Card image cap">
        <div class="text-center card-body">
            <h5 class="card-title">{{ $usuario->nombre_usuario }}</h5>
            <span class="card-text">Email: {{ $usuario->email }}</span><br>
            <a href="{{route('usuarios.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
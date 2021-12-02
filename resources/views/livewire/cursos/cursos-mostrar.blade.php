<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 150px;height:150px;" class="mx-auto mt-3 card-img-top"
            src="{{ $curso->foto != null ? Storage::disk('public')->url($curso->foto) : Storage::disk('public')->url('images/cursos/default.png') }}" alt="Card image cap">
        <div class="text-center card-body">
            <h5 class="card-title">{{ $curso->curso }}</h5>
            <span class="card-text">Categoria: {{ $curso->categoria }}</span><br>
            <small class="card-text">Precio: {{ $curso->precio }}</small>
            <a href="{{route('cursos.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
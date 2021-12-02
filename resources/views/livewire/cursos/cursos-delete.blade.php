<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $curso->foto != null ? Storage::disk('public')->url($curso->foto) : Storage::disk('public')->url('images/cursos/default.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$curso->curso}}</h5>
          <p class="card-text">{{$curso->categoria}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('cursos.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>
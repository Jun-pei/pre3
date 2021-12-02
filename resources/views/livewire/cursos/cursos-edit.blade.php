<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header">
                Modificar curso
            </div>
            <div class="card-body">
                @include('livewire.cursos.formulario')
            </div>
            <div class="card-footer text-muted">
                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-primary btn-sm"><i class="fa fa-iedit"></i> Modificar</button>
                <a href="{{ route('cursos.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>

</div>
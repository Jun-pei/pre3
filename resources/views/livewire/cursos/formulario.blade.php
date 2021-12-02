<div class="row">


    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Loading...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>



    <div class="col-4">

        @if ($foto != null)
            <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width: 230px;height:230px;"
                src="{{ $curso->foto != null ? Storage::disk('public')->url($curso->foto) : Storage::disk('public')->url('images/cursos/default.png') }}"
                alt="">
        @endif

        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Subir imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                @error('foto') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </form>
    </div>

    <div class="mx-auto col-6">
        <div class="form-group">
            <label>Curso</label>
            <input wire:model.defer="curso.curso" type="text" class="form-control">
            @error('curso.curso') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <input wire:model.defer="curso.categoria" type="text" class="form-control">
            @error('curso.categoria') <span class="text-danger">{{ $message }}</span>@enderror

        </div>


        <div class="form-group">
            <label>Precio</label>
            <input wire:model="curso.precio" type="text" class="form-control">
            @error('curso.precio') <span class="text-danger">{{ $message }}</span>@enderror
            <span>{{ $curso->precio >= 1000 ? 'Esta muy caro' : '' }}</span>
        </div>

        <div class="form-group">
            <label>Subtitulos</label>
            <input wire:model.defer="curso.subtitulos" type="text" class="form-control">
            @error('curso.subtitulos') <span class="text-danger">{{ $message }}</span>@enderror

        </div>


    </div>



</div>
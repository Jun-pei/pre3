<div wire:init="cargando">

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>


        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
                <a href="{{ route('cursos.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-plus-circle"></i> Crear nuevo</a>
            </div>
        </div>
    </div>


    @if (count($cursos) > 0)
        <table class="table text-center table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cursos as $curso)
                    <tr>
                        <th scope="row">{{ $curso->id }}</th>
                        <th>
                            <img style="width: 40px;height:40px;"src="{{ $curso->foto != null ? Storage::disk('public')->url($curso->foto) : Storage::disk('public')->url('images/cursos/default.png') }}"
                                alt="">
                        </th>
                        <td>{{ $curso->curso }}</td>
                        <td>{{ $curso->categoria }}</td>
                        <td>{{ $curso->precio }}</td>
                        <td>
                            <a href="{{ route('cursos.mostrar', $curso) }}" title="Mostrar más"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('cursos.edit', $curso) }}" title="Editar curso"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('cursos.delete', $curso) }}" title="Eliminar curso seleccionado más"
                                class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    @else
        <img class="mx-auto d-block" style="width: 300px;height:300px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
    @endif

    {{ $cargado == true ? $cursos->links() : null }}
</div>
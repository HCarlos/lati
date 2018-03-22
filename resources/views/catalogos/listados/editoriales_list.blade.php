<div class="dataTables_wrapper" role="grid">
    @if ($items)
        <table id="{{ $tableName}}" aria-describedby="sample-table-2_info"  class="table table-striped table-bordered table-hover dataTable hide" >
            <thead>
            <tr role="row">
                <th aria-label="id" style="width: 80px;" colspan="1" rowspan="1" aria-controls="{{ $tableName}}" tabindex="0" role="columnheader" class="sorting" >ID</th>
                <th aria-label="editorial" style="width: 200px;" colspan="1" rowspan="1" aria-controls="{{ $tableName}}" tabindex="1" role="columnheader" class="sorting">Editorial</th>
                <th aria-label="representante" style="width: 200px;" colspan="1" rowspan="1" aria-controls="{{ $tableName}}" tabindex="2" role="columnheader" class="sorting">Representante</th>
                <th aria-label="" style="width: 200px;" colspan="1" rowspan="1" role="columnheader" class="sorting_disabled"></th>
            </tr>
            </thead>
            <tbody aria-relevant="all" aria-live="polite" role="alert">
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->editorial }}</td>
                    <td>{{ $item->representante }}</td>
                    <td width="100">
                        @if ($user->hasAnyPermission(['eliminar_registro','all']))
                            <a href="#" class="btn btn-link btn-xs margen-izquierdo-1em pull-right btnAction2" id ="editorial-{{$item->id.'-'.$user->id.'-'.$id}}-2-/destroy_editorial/" title="Eliminar">
                                <i class="fa fa-trash fa-lg red" ></i>
                            </a>
                        @endif
                        @if ($user->hasAnyPermission(['editar_registro','all']))
                            {{--<a href="{{ route('catalogos/', array('id' => $id,'idItem' => $item->id,'action' => 1)) }}" class="btn btn-link btn-xs pull-right" title="Editar">--}}
                            <a href="{{ route('catalogos/', array('id' => $id,'idItem' => $item->id,'action' => 1)) }}" class="btn btn-link btn-xs pull-right editarReg" target="_blank" title="Editar">
                                <i class="fas fa-pencil-alt blue"></i>
                            </a>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger" role="alert">No se encontraron datos</div>
    @endif
</div>
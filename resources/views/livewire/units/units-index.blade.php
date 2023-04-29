<div class="col-md-8">
    <div class="card border-0 shadow">
        <div class="card-header bg-white">
            <div class="text-center">
                <h3 class="mb-1 pt-2">{{ __('Unidades') }}</h3>
            </div>
        </div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>Unidad</th>
                        <th>Línea</th>
                        <th>Placas</th>
                        <th>Clasificación</th>
                        <th>Tipo de combustible</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($units->count())
                        @foreach ($units as $unit)
                            <tr>
                                <td>{{$unit->unidad}}</td>
                                <td>{{$unit->linea}}</td>
                                <td>{{$unit->placa}}</td>
                                <td>{{$unit->clasification->clasificación}}</td>
                                <td>{{$unit->fuel->combustible}}</td>
                                <td width="10px"><a class="btn btn-light btn-sm" href="{{route('units.show', $unit)}}"><i class="fas fa-eye"></i></a></td>
                                <td width="10px"><a class="btn btn-light btn-sm" href="{{route('units.edit', $unit)}}"><i class="fas fa-edit"></i></a></td>
                                <td width="10px">
                                    <form action="{{ route('units.destroy', $unit) }}" method="POST" class="alert-delete">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="delete()"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr scope="row">
                            <td colspan="6">
                                <p class="text-center text-danger pt-3"><strong>Sin registro</strong></p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$units->links()}}
        </div>
    </div>
</div>

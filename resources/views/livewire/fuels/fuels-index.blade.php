<div class="col-md-8">
    <div class="card border-0 shadow">
        <div class="card-header bg-white">
            <div class="text-center">
                <h3 class="mb-1 pt-2">{{ __('Combustible') }}</h3>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>Combustible</th>
                        <th>Precio por litro</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($fuels->count())
                        @foreach ($fuels as $fuel)
                            <tr>
                                <td>{{$fuel->combustible}}</td>
                                <td>${{$fuel->precio}} MXN</td>
                                <td width="10px"><a class="btn btn-light btn-sm" href="{{route('fuels.show', $fuel)}}"><i class="fas fa-eye"></i></a></td>
                                <td width="10px"><a class="btn btn-light btn-sm" href="{{route('fuels.edit', $fuel)}}"><i class="fas fa-edit"></i></a></td>
                                <td width="10px">
                                    <form action="{{ route('fuels.destroy', $fuel) }}" method="POST" class="alert-delete">
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
    </div>
</div>

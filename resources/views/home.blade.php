@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="text-center">
                        <h3>{{ __('Catalogo') }}</h3>
                    </div>
                    <hr>
                    <div class="row pb-4">
                        <div class="col-12 col-lg-6 pt-4">
                            <a href="{{ route('routes.index') }}" class="btn shadow-sm btn-light btn-lg p-5 w-100 border">
                                <i class="fa-solid fa-route fa-4x"></i>
                                <h2>Rutas</h2>
                                <span class="badge bg-dark">{{$all_routes}}</span>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6 pt-4">
                            <a href="{{ route('tollbooths.index') }}" class="btn shadow-sm btn-light btn-lg p-5 w-100 border">
                                <i class="fa-solid fa-hand-holding-dollar fa-4x"></i>
                                <h2>Casetas</h2>
                                <span class="badge bg-dark">{{$all_tollbooths}}</span>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6 pt-4">
                            <a href="{{ route('units.index') }}" class="btn shadow-sm btn-light btn-lg p-5 w-100 border">
                                <i class="fa-solid fa-truck-plane fa-4x"></i>
                                <h2>Unidades</h2>
                                <span class="badge bg-dark">{{$all_units}}</span>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6 pt-4">
                            <a href="{{ route('fuels.index') }}" class="btn shadow-sm btn-light btn-lg p-5 w-100 border">
                                <i class="fa-solid fa-gas-pump fa-4x"></i>
                                <h2>Precios de combustible</h2>
                                <span class="badge bg-dark">{{$all_fuels}}</span>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row pb-4">
                        <div class="col-12 col-md-6 pt-4">
                            <a href="{{ route('generarPresupuesto') }}" class="btn shadow-sm btn-primary btn-lg p-5 w-100 border">
                                <i class="fa-solid fa-file-invoice fa-4x"></i>
                                <h2>Generar presupuesto</h2>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 pt-4">
                            <a href="{{ route('fuels.index') }}" class="btn shadow-sm btn-secondary btn-lg p-5 w-100 border">
                                <i class="fa-solid fa-file-invoice-dollar fa-4x"></i>
                                <h2>Reportes</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? 'Show Pago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}">{{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Tel:</strong>
                            {{ $pago->numero_tel }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $pago->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $pago->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Pago:</strong>
                            {{ $pago->monto_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pago:</strong>
                            {{ $pago->fecha_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Plan:</strong>
                            {{ $pago->plan }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

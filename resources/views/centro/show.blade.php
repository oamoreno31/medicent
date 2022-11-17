@extends('layouts.app')

@section('template_title')
    {{ $centro->name ?? 'Show Centro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Centro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centro.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $centro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $centro->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $centro->latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $centro->longitud }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $centro->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

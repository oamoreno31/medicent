@extends('layouts.app')

@section('template_title')
    Centro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Centros Médicos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('centro.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @if (empty($centros))
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div>
                                No se han encontrado centros médicos, crea uno nuevo!
                            </div>
                        </div>
                        @else
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($centros as $centro)
                                <div class="col">
                                    <div class="card">
                                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $centro->nombre }}</h5>
                                            <p class="card-text">{{ $centro->direccion }}</p>
                                            <?php $query = $centro->longitud.'%2C'.$centro->latitud ?>
                                            <form action="{{ route('centro.destroy',$centro->id) }}" method="POST">
                                                <?php echo "<a class='btn btn-sm btn-warning' target='_blank' href='https://www.google.com/maps/search/?api=1&query=".$centro->latitud.'%2C'.$centro->longitud.",17z'><i class='fa fa-fw fa-edit'></i> Ver en Mapa</a>"; ?>
                                                <a class="btn btn-sm btn-primary " href="{{ route('centro.show',$centro->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('centro.edit',$centro->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                {!! $centros->links() !!}
            </div>
        </div>
    </div>
@endsection

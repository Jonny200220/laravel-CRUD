@extends('layouts/main')

@section('contenido')
    <div class="container mt-4 ">
        <h2>Crud con Laravel 11 - Nombres</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <a href="{{route('create')}}" class="btn btn-primary">
                        <i class="fa-solid fa-plus"></i> Agregar nombre
                      </a>
                      <hr>
                      <table class="table table-sm table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)  
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <form action="" method="post">
                                        <a href="" class="btn btn-info">
                                            <i class="fa-solid fa-list"></i> Mostrar
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fa-solid fa-pen"></i> Editar
                                        </a>
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>No hay datos en la tabla...</td>
                                </tr>
                            @endforelse
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-end">
                        {{$items -> links()}}
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
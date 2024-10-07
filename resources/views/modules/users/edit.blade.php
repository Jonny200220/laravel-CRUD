@extends('layouts/main')

<div class="container mt-4">
    <h2>Actualizar Usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update', $item->id) }}" method="post">
                            @csrf {{-- Token necesario para que la app sepa de donde viene (procedencia)--}}
                            @method('PUT') {{--Esto es para que entienda la ruta de PUT--}}
                            <label for="name">Ingresa el nombre: </label>
                            <input type="text" name="name" id="name" class="form-control" required value="{{ $item-> name }}">
                            <button class="btn btn-warning mt-3">
                                Actualizar
                            </button>
                            <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancelar</a>    
                        </form>
                    </div>
              </div>
        </div>
    </div>
</div>
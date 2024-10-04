@extends('layouts/main')

<div class="container mt-4">
    <h2>Agregar Nuevo Usuario</h2>
    <div class="row">
        <div class="col">
            <div class="card">
                    <div class="card-body">
                        <form action="{{route('store')}}" method="post">
                            @csrf {{-- Token necesario para que la app sepa de donde viene (procedencia)--}}
                            @method('POST') {{--Esto es para que entienda la ruta de POST--}}
                            <label for="name">Ingresa el nombre: </label>
                            <input type="text" name="name" id="name" class="form-control" required>
                            <button class="btn btn-primary mt-3">
                                Agregar
                            </button>
                            <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancelar</a>    
                        </form>
                    </div>
              </div>
        </div>
    </div>
</div>
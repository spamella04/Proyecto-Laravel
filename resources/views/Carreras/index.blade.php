@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Carreras</h2>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carreras as $carrera)
            <tr>
                <td>{{$carrera->codigo}}</td>
                <td>{{$carrera->nombre}}</td>
                <td>{{$carrera->descripcion}}</td>
                <td>{{$carrera->acciones}}</td>
                <td>
                    <!--  
                    
                    </form>-->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('layouts.user')

@section('content')

<div class="well body-hight">

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tables as $table)
            <tr>
                <td>{{ $table->nombre_producto }}</td>
                <td>{{ $table->descripcion }}</td>
                <td>{{ $table->precio }}</td>
                <td>{{ $table->cantidad }}</td>

                <td>
                    <center>
                        <a href = "{{URL::route('edit', $table->id )}}" class="btn btn-info">
                            <span class="glyphicon glyphicon-pencil"></span>Editar</a></center></td>
        <td><center><a href = "{{ action('ProductosController@destroy', $table->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></center></td>      
        </tr>
        @endforeach

        </tbody>

     </table>
     <center>
        {!!$tables->render()!!}
     </center>
</div>

@stop
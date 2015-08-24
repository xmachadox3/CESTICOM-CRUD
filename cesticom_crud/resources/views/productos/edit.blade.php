@extends('layouts.user')

@section('content')



    @if($errors->any())
      <ul class="alert alert-danger"> 
         @foreach($errors->all() as $error)
               <li>{{$error}}</li>
         @endforeach
      </ul>
  
     @endif

     <div class="well body-hight">
         {!! Form::model($table,['method'=>'PATCH','action'=>['ProductosController@update',$table->id],'class'=>'form-signup form-paddind']) !!}


         <div class="form-group">

             {!! Form::text('nombre_producto',null,['class'=>'form-control from-width','placeholder'=>'name']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('descripcion',null,['class'=>'form-control from-width','placeholder'=>'email']) !!}

         </div>

         <div class="form-group">

             {!! Form::text('precio',null,['class'=>'form-control from-width','placeholder'=>'job']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('cantidad',null,['class'=>'form-control from-width','placeholder'=>'salary']) !!}

         </div>

         <div class="form-group">

             {!! Form::submit('Editar Producto',['class'=>'btn btn-large btn-primary btn-block']) !!}

         </div>

         {!! Form::close() !!}

     </div>


@stop
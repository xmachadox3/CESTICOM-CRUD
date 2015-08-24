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

         {!! Form::open(['url'=>'/store','class'=>'form-signup form-paddind']) !!}


         <div class="form-group">

             {!! Form::text('nombre_producto',null,['class'=>'form-control from-width','placeholder'=>'Nombre del producto']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('descripcion',null,['class'=>'form-control from-width','placeholder'=>'descripcion']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('precio','0.00',['class'=>'form-control from-width','placeholder'=>'precio']) !!}

         </div>
         <div class="form-group">

             {!! Form::text('cantidad','00',['class'=>'form-control from-width','placeholder'=>'cantidad']) !!}

         </div>

         <div class="form-group">

             {!! Form::submit('Crear Producto',['class'=>'btn btn-large btn-primary btn-block']) !!}

         </div>

         {!! Form::close() !!}



     </div>


@stop


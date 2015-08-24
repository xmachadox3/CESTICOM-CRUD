<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href = "{{ URL::to('/') }}"><span class="glyphicon glyphicon-dashboard"></span> CRUD - Productos</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href = "{{ URL::to('/') }}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
            <li><a href = "{{ URL::to('/create') }}"><span class="glyphicon glyphicon-save"></span> Crear</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            {!! Form::open(['url'=>'/search', 'class'=>'navbar-form']) !!}
            <div class="input-group">
                {!! Form::text('nombre_producto',null,['class'=>'form-control','placeholder'=>'name']) !!}
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>        
    </div>
</nav>

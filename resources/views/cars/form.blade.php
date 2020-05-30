@extends('layout.app')
@section('title', 'Registro')

@section('content')
<h1>Registro</h1>
<hr>

<div class="container">


  @if(isset($cars))

  {!! Form::model($cars, ['method' => 'put', 'route' => ['cars.update', $cars->id ], 'class' => 'form-horizontal']) !!}

  @else

  {!! Form::open(['method' => 'post','route' => 'cars.store', 'class' => 'form-horizontal']) !!}

  @endif

  <div class="card">
    <div class="card-header">
      <span class="card-title">
        @if (isset($cars))
        Editando registro #{{ $cars->id }}
        @else
        Criando novo registro
        @endif
      </span>
    </div>
    <div class="card-body">
      <div class="form-row form-group">

        {!! Form::label('marca', 'marca', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

          {!! Form::text('marca', null, ['class' => 'form-control', 'placeholder'=>'Informe a marca']) !!}

        </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('modelo', 'modelo', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

          {!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder'=>'Informe o modelo']) !!}

        </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('anoFabricacao', 'anoFabricacao', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-8">

          {!! Form::text('anoFabricacao', null, ['class' => 'form-control', 'placeholder'=>' Informe o ano de fabricação ']) !!}

        </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('anoModelo', 'anoModelo', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-4">

          {!! Form::text('anoModelo', null, ['class' => 'form-control', 'placeholder'=>'Informe o ano do modelo ']) !!}

        </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('placa', 'placa', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-10">

          {!! Form::text('placa', null, ['class' => 'form-control', 'placeholder'=>'Informe a placa' ]) !!}

        </div>

      </div>
      <div class="form-row form-group">

        {!! Form::label('km', 'km', ['class' => 'col-form-label col-sm-2 text-right']) !!}

        <div class="col-sm-10">

          {!! Form::text('km', null, ['class' => 'form-control', 'placeholder'=>'Informe a kilometragem' ]) !!}

        </div>

      </div>
    </div>
    <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit( isset($cars) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}

    </div>
  </div>

  {!! Form::close() !!}

</div>
@endsection
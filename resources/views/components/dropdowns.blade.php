@extends('layout')

@section('content')
    <h1>Dynamic Dropdowns</h1>
    {!! Form::model($makeForm,['class' => 'form','id'=> 'search', 'method' => 'GET']) !!}
        {!! Field::select('make_id',$makes,['placeholder' => 'Seleccione la Marca' ]) !!}
        @if($makeForm['make_id'] != null )
        {!! Field::select('makeyear_id',$makeYears,['placeholder' => 'Seleccione el year' ]) !!}
        @endif
        @if($makeForm['makeyear_id'] != null )
        {!! Field::select('model_id',$models,['placeholder' => 'Seleccione el Modelo' ]) !!}
        @endif
    {!! Form::close() !!}
@endsection
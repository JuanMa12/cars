@extends('welcome')

@section('content')
    <h1>Features Cars</h1>
    {!! Form::model($car,['class' => 'form','id'=> 'search', 'method' => 'POST']) !!}
    {!! Field::selectMultiple('features[]',$features,null,['label' => 'Features', 'id' => 'features']) !!}
    <button class="btn btn-primary">Save</button>
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script>
        $(document).ready(function (){
            $('#features').select2({tags:true,tokenSeparators: [',']});
        });
    </script>
@endsection
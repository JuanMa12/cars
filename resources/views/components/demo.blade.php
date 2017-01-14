@extends('autocomplete')

@section('content')
    <h1>Autocomplete Demo</h1>
    {!! Form::open(['class' => 'form']) !!}
    {!! Field::text('user',['class' => 'easy-autocomplete']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            var options = {
                url: "/autocomplete/users",
                ajaxSettings:{
                    dataType: "json",
                    method: "GET",
                    data: {}
                },
                preparePostData: function(data){
                    data.term = $('#user').val();
                    return data;
                },
                requestDelay: 500,
                getValue: "name",
                template:{
                    type: "description",
                    fields: {description: "email"}
                },
                list:{
                    match:{enabled:true}
                },
                theme: "bootstrap"
            };

            $("#user").easyAutocomplete(options);
        });



        /*$(document).ready(function(){
            var options = {
                url: "/resources/people.json",
                getValue: "name",
                template:{
                    type: "description",
                    fields: {description: "email"}
                },
                list:{
                    match:{enabled:true}
                },
                theme: "bootstrap"
            };

            $("#user").easyAutocomplete(options);
        });*/

    </script>
@endsection
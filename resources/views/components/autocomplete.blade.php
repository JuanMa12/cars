@extends('autocomplete')

@section('content')
    <h1>Autocomplete</h1>
    {!! Form::open(['class' => 'form']) !!}
    {!! Field::text('user',['class' => 'easy-autocomplete']) !!}
    {!! Field::hidden('user_id',null,['id'=>'user_id']) !!}
    {!! Field::submit('Enviar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $("#user").easyAutocomplete({
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
                    match:{enabled:true},
                    onSelectItemEvent: function(){
                        var user = $('#user').getSelectedItemData();
                        $('#user_id').val(user.id);
                    },
                    onClickEvent: function(){
                        var user = $('#user').getSelectedItemData();
                        window.location.href = '/user/' + user.id;
                    }
                },
                theme: "bootstrap"
            }).change(function(){
                $('#user_id').val('');
            });
        });
    </script>
@endsection
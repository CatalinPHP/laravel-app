@extends("layout")

@section("content")
    <div class="body centered">
        <h1>Dictionary</h1>
        <p></p>
        {!!Form::open(['url' => '/store']) !!}
        <div class="form-group">
            {!! Form::label('word' , 'Word:') !!}
            {!! Form::text('word', null  , ['class' => 'form-control']) !!}
            {!! Form::label('translated_word' , 'Translate:') !!}
            {!! Form::text('translated_word',  null  , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Word' , ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!!Form::close() !!}
    </div>

@stop


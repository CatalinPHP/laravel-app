@extends("layout")

@section("content")
    <div class="body centered">
        <h1>Search</h1>
        {!!Form::open(['url' => '/search']) !!}
        <div class="form-group">
            {!! Form::label('word' , 'Word:') !!}
            {!! Form::text('word', null  , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Search' , ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!!Form::close() !!}
    </div>

@stop

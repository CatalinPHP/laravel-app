@extends("layout")

@section("content")
    <div class="row">
        <div class="col-sm-2 last-words">
            <div class="last-words-title">
                <h5>Ultimele Cuvinte Incarcate</h5>
            </div>
            @foreach($words as $word)
                <div id="latest-word">{{$word['word']}}</div>
            @endforeach
        </div>
        <div class="col-sm-9">
            <div class="body centered-add-word">
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
        </div>
    </div>

@stop


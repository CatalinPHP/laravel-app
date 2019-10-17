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
        <div class="word_search">
            @isset($response)
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Cuvant</th>
                        <th scope="col">Traducere</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($response as $word)
                        <tr>
                            <td>{{$word['word']}}</td>
                            <td>{{$word['translated_word']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endisset
        </div>

        {!!Form::close() !!}
    </div>

@stop

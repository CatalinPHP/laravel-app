@extends("layout")

@section("content")
    <div class="body centered">
        <div class="card">
            <div class="card-header">
                Invata tot timpul
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            {!! Form::submit('Adauga cuvant' , ['class' => 'btn btn-primary form-control']) !!}
                            {!! link_to('/add/word', $title = null, $attributes = [], $secure = null); !!}
                        </div>
                        <div class="col-sm">
                            {!! Form::submit('Cauta cuvinte' , ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        <div class="col-sm">
                            {!! Form::submit('Nou' , ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@stop


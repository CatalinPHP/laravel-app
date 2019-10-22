@extends('layout')

@section('content')
    <div class="centered">
        <div class="message">

        </div>
        <div class="card">
            <h5 class="card-header">Traducerea cuvantului <strong> {{$words[0]['word']}} </strong> este :</h5>
            <div class="card-body">
                <form action="">
                    <div class="shuffle">
                        <div>
                            <input type="radio" name="word" value="correct"> {{$words[0]['translated_word']}}<br>
                        </div>

                        <div>
                            <input type="radio" name="word"> {{$words[1]['translated_word']}}<br>
                        </div>

                        <div>
                            <input type="radio" name="word"> {{$words[2]['translated_word']}}
                        </div>
                    </div>
                </form>
            </div>
            <div class="game-bottom-btn">
                <button class="btn btn-primary submit-game" id="btn-game" >Submit</button>
                <button class="btn btn-primary" id="btn-game" style="float: right"><a href="/game" style="color: white">Next</a></button>
            </div>
        </div>
    </div>

@stop

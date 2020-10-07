@extends("layout")

@section('css')
    {!! Html::style('css/image.css') ,
        Html::style('css/welcome.css')
!!}
@stop


@section("content")
    <div class="card quote">
        <div class="card-body">
            <p>"Cai camel ca orsao felo manusengo te aven hastrame thai te arasan le
                prijianimaste orto le ciacimasco."</p>
            <p><strong>1 Tim 2:4</strong></p>
        </div>
    </div>
    @isset($message)
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Deleted image successfully
        </div>
    @endisset
    <div class="title-gallery">
        <h4>Galerie</h4>
    </div>
    <div class="card-image">
        <div class="container">
            <div class="row images">
                @foreach ($images as $image)
                    <div class="col-sm-4">
                        <div class="gallery-image-style">
                            <img id="myImg" src="{{ asset('images/' . $image->getFilename()) }}">
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <label for="resolution">Resolution</label>
                                <select id="resolution">
                                    <option value=25>25%</option>
                                    <option value=50 selected="selected">50%</option>
                                    <option value=75>75%</option>
                                    <option value=100>100%</option>
                                    <option value=150>150%</option>
                                    <option value=200>200%</option>
                                </select>
                                <img class="modal-content" id="img">
                                <div id="caption"></div>
                            </div>
                        </div>
                        {!!Form::open(['url' => '/delete/image', 'method' => 'post']) !!}
                        <input type="hidden" value="{{$image->getFilename()}}" name="delete">
                        {!! Form::submit('DELETE' , [
                             'class' => 'btn btn-primary form-control',
                             'onclick' => "return confirm('Are you sure you want to delete this image?');"
                        ]) !!}
                        {!! Form::close() !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ asset('js/image.js')}}"></script>
@stop

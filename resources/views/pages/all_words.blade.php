@extends("layout")


@section("content")
    <div class="body centered box-words">
        <h1 class="table_title">Toate Cuvintele</h1>
        <div class="my-custom-scrollbar table-wrapper-scroll-y all-words">
            @isset($response)
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                    <tr>
                        <th scope="row">#</th>
                        <th scope="col">Cuvant</th>
                        <th scope="col">Traducere</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach ($response as $word)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$word['word']}}</td>
                            <td>{{$word['translated_word']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endisset

        </div>
    </div>

@stop

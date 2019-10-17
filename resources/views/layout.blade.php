<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {!! Html::style('css/body.css') !!}
    <title>Title</title>
</head>
        <body>
            @if (Session::flash('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            @yield('content')
            <a class="btn btn-primary" href="/home" role="button">Home</a>
        </body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>

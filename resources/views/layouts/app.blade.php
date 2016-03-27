<!DOCTYPE html>
<html lang="fi">
<head>
    <title>Pellco</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS And JavaScript -->
    {!! Html::style('css/app.css') !!}

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}

    {!! Html::script('js/form.js') !!}
</head>

<body>

@include('layouts.navbar')

@yield('content')

</body>
</html>
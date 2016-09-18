<!DOCTYPE html>
<html lang="fi">
<head>
    <title>PellCompany</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tilaa pellettejä kotiinkuljetuksella">
    <meta name="keywords" content="pellcompany,pellco,pelletti,puupelletti,pelletit,pellettitilaus,pellet,pellets,kotiinkuljetus,tilaus,tilaa">

    <!-- CSS And JavaScript -->
    {!! Html::style('css/app.css') !!}

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}

    {!! Html::script('js/form.js') !!}

    {!! Analytics::render() !!}
</head>

<body>

@include('layouts.navbar')

@yield('content')

</body>
</html>
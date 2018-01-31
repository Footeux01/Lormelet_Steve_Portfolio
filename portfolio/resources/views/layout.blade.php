<!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta description="portfolio steve lormelet">
        <meta keyword="curriculum vitae,portfolio,aformac,vichy,commentry,montluçon,presentation,competences,experiences,formations,projets,contacts">
        <meta name="msvalidate.01" content="77407A9531858A01EDFC1D9276DE4832" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{asset('img/loader.gif')}}" type="images/x-icon" />  
        

        <script src="https://use.fontawesome.com/8f2ece54f3.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{asset('js/date_heure.js')}}"></script>
        <script src="{{asset('js/clic_droit_bloque.js')}}"></script>

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}"> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        @include('header')
        @section('sidebar')
        @show
        <main>
            @yield('content')
        </main>
        @include('footer')
            <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/mdb.min.js')}}"></script>
            <script src="{{asset('js/popper.min.js')}}"></script>
            <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
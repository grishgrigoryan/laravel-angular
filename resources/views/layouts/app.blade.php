<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/build/css/app.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body  ng-app="starterApp" layout="row" ng-cloak  ng-init="serverData = [{name:'eden'}, {name:'frank'}, {name:'matt'}]" >
    @yield('content')

    <script src="/build/js/libs/angular.js"></script>
    <script src="/build/js/libs/angular-animate.js"></script>
    <script src="/build/js/libs/angular-aria.js"></script>
    <script src="/build/js/libs/angular-route.js"></script>
    <script src="/build/js/libs/angular-material.js"></script>
    <script src="/build/js/libs/angular-table.js"></script>
    <script src="/build/js/libs/angular-ui-route.js"></script>

    <script src="/build/js/service/UserService.js"></script>
    <script src="/build/js/app.js"></script>
    <script src="/build/js/controller/Controller.js"></script>
    <!-- JavaScripts -->

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

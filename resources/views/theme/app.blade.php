<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>Sistema de cuentas médicas</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('index') }}" class="btn btn-link">Inicio</a>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('business.index') }}" class="btn btn-link">Empresa</a>
            </div>
            <div class="col-sm-2">
                <a href="" class="btn btn-link">Clientes</a>
            </div>
            <div class="col-sm-12">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
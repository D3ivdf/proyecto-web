<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/administrador.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg color">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dignidad</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-items mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Administrador</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="inici">Cerrar sesíon</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="contenedor">
            <h1>Administrador</h1>
            <div class="form">
                <form class="row">
                    <div class="col-6 text-center">
                        <div class="mb-3">
                            <a href="bici" class="btn btn-primary">Ingresar bicicletas</a>
                        </div>
                        <div class="mb-3">
                            <a href="vistaE" class="btn btn-primary">bicicletas</a>
                        </div>
                        <div class="mb-3">
                            <a href="" class="btn btn-primary">Multas</a>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <div class="mb-3">
                            <a href="" class="btn btn-primary">Estaciones</a>
                        </div>
                        <div class="mb-3">
                            <a href="" class="btn btn-primary">Usuarios</a>
                        </div>
                        <div class="mb-3">
                            <a href="" class="btn btn-primary">Prestamos</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>
</html>
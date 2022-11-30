<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="col-4 row"></div>
            <div class="col-4 row caja ">
                <form action="{{route('usuario.store')}}" method="POST" >
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Nombres</label>
                    <input class="form-control" type="text" placeholder="Nombres" aria-label="default input example" name="Nombre" id="Nombre">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input class="form-control" type="text" placeholder="Apellidos" aria-label="default input example" name="Apellido" id="Apellido">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" placeholder="david@ejemplo.com" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" id="Email">
                    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="Password" id="contraseña">
                    <select class="form-select" aria-label="Default select example" name="rol" id="rol">
                        <option selected>Seleccione</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select><br>
                     <button type="submit" class="btn btn-info" onClick="vacios()" id="boton">Enviar</button>
                </form>
            </div>
            <div class="col-4 row"></div>
        </div>
    </main>
</body>
</html>
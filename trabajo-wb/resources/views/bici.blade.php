<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bici.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="col-4 row"></div>
            <div class="col-4 row caja ">
                <form action="{{route('bicicleta.store')}}" method="POST" >
                    @csrf
                    <label for="exampleInputEmail1" class="form-label">Modelo</label>
                    <input class="form-control" type="text" aria-label="default input example" name="modelo" id="modelo">
                    <label for="exampleInputEmail1" class="form-label">Estacion</label>
                    <input class="form-control" type="text" aria-label="default input example" name="estacion" id="estacion">
                    <label for="exampleInputEmail1" class="form-label">Tipo</label>
                    <input class="form-control" type="text" aria-label="default input example" name="tipo" id="tipo">
                    <label for="exampleInputEmail1" class="form-label">Detalles</label>
                    <Textarea class="form-control" type="text-area" aria-label="default input example" name="detalles" id="detalles"></Textarea><br>
                     <button type="submit" class="btn btn-info" onClick="vacios()" id="boton">Enviar</button>
                </form>
            </div>
            <div class="col-4 row"></div>
        </div>
    </main>
</body>
</html>
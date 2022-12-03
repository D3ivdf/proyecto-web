<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <title>Document</title>
</head>
<body>
    <div class='contenedor'>
        <div><h1>Estacion</h1></div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Modelo</th>
                <th scope="col">Estacion</th>
                <th scope="col">Tipo</th>
                <th scope="col">Detalles</th>
                </tr>
            </thead>
            <tbody>
            @foreach($bici as $b)
            <tr>
                <td>{{ $b->modelo }}</td>
                <td>{{ $b->estacion }}</td>
                <td>{{ $b->tipo }}</td>
                <td>{{ $b->detalles }}</td>
                <td>
                    <form action="{{route('bicicleta.edit',$b ->id)}}" method="GET">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-pencil-square">
                            </i>
                        </a>
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-items mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="registro">Registrarce</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logins">Inicio de sesíon</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://centrodeinformacion.manizales.gov.co/wp-content/uploads/2021/02/WhatsApp-Image-2021-02-08-at-8.13.38-PM-2.jpeg" class="d-block w-100" alt="..."     height= "600px" width ="800px">
                </div>
                <div class="carousel-item">
                <img src="https://pbs.twimg.com/media/EtuuTRnWgAIUS7T.jpg" class="d-block w-100" alt="..."   height= "600px" width ="800px">
                </div>
                <div class="carousel-item">
                <img src="https://centrodeinformacion.manizales.gov.co/wp-content/uploads/2022/01/3%EF%B8%8F%E2%83%A3-Por-primera-vez-en-Manizales-el-sistema-de-bicicletas-publicas-se-reactiva-desde-enero.-1-1024x682.jpeg" class="d-block w-100" alt="..."   height= "600px" width ="800px">
                </div>
                <div class="carousel-item">
                <img src="https://mimanizalesdelalma.com/wp-content/uploads/2021/09/Las-bicicletas-publicas-una-opcion-para-movilizarse-este-miercoles-22-de-septiembre-Dia-sin-Carro-Voluntario..jpg" class="d-block w-100" alt="..."   height= "600px" width ="800px">
                </div>
                <div class="carousel-item">
                <img src="https://centrodeinformacion.manizales.gov.co/wp-content/uploads/2022/05/4%EF%B8%8F%E2%83%A3-Sepa-como-acceder-al-servicio-de-Manizales-en-Bici-el-sistema-de-bicicletas-publicas-del-municipio.-1.jpeg" class="d-block w-100" alt="..."   height= "600px" width ="800px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="mapa"><h1 class="text-center">Bienvenido a la página de bicicletas publicas de Manizales</h1></div>
        <div class="mapa">
            <img src="https://www.oficinadelabicimanizales.com/public/imagenes/bicicletasPublicas/3.png" alt="mapa" width="1200px" height="600px">
        </div>

    </main>
</body>
</html>
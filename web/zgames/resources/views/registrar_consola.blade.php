<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png')}}" class="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{ route('registrar_consola')}}">Registrar Consola</a>
                  <a class="nav-link" href="{{ route('registrar_juego')}}">Registrar Juego</a>
                  <a class="nav-link" href="{{ route('ver_consola')}}">Ver Consolas</a>
                  <a class="nav-link" href="{{ route('ver_juegos')}}">Ver Juegos</a>
                </div>
              </div>
            </div>
          </nav>
      </header>
      <main class="container-fluid">
            <div class="row mt-5">
                <div class="col-12 col-md-8 col-lg-5 mx-auto">
                    <div class="card">
                            <div class="card-header bg-warning">
                                <span>Agregar Consola</span>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="nombre-txt" class="form-label">Nombre</label>
                                    <input type="text" id="nombre-txt" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="marca-select" class="form-label">Marca</label>
                                    <select id=",arca-select" class="form-select">
                                        <option value="Microsoft">Microsoft</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Nintendo">Nintendo</option>
                                        <option value="Sega">Sega</option>
                                    </select>
                                </div>
                                <div class="mb_3">
                                    <label for="anio-txt">Año de lanzamiento</label>
                                    <input type="number" class="form-control" id="anio-txt">
                                </div>
                            </div>
                            <div class="card-footer d-grid gap-1">
                                <button type="button" class="btn btn-primary">Registrar</button>
                            </div>
                    </div>
                </div>
            </div>     
      </main>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
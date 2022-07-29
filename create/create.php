<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/detail.css">
    <title>animeworld</title>
</head>
<body>

<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted"></p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Administrador</h4>
          <ul class="list-unstyled">
            <li><a href="create.php" class="text-white">Crear</a></li>
            <li><a href="edit.php" class="text-white">Editar</a></li>
            <li><a href="delete-anime.php" class="text-white">Eliminar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="./" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Animeworld</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<div class="container">
  <main >
  
    <div class="row g-8 justify-content-xl-center">
      <div class="col-lg-8">
        <h4 class="mb-12">Crear Anime</h4>
        <form action="create-anime.php" method="post" class="needs-validation" novalidate>
          <div class="row g-3">

            <div class="col-sm-12">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" name="titulo" placeholder="" value="" required>
            </div>

            <div class="col-sm-12">
              <label for="año" class="form-label">Año</label>
              <input type="text" class="form-control" name="año" placeholder="" value="" required>
            </div>

            <div class="col-sm-12">
              <label for="direccion" class="form-label">Dirección</label>
              <input type="text" class="form-control" name="direccion" placeholder="" value="" required>  
            </div>

            <div class="col-sm-12">
              <label for="guion" class="form-label">Guión</label>
              <input type="text" class="form-control" name="guion" placeholder="" value="" required>
            </div>

            <div class="col-sm-12">
              <label for="productora" class="form-label">Productora</label>
              <input type="text" class="form-control" name="productora" placeholder="" value="" required>
            </div>

            <div class="col-sm-12">
              <label for="sinopsis" class="form-label">Sinopsis</label>
              <input type="text" class="form-control" name="sinopsis" placeholder="" value="" required>
            </div>

            <div class="col-sm-12">
              <label for="imagen" class="form-label">Imagen URL</label>
              <input type="text" class="form-control" name="imagen" placeholder="" value="" required>
            </div>
        </div>
        <hr class="my-4">
        <button class="w-100 btn text-white bg-dark btn-lg" type="submit">Crear Anime</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
</body>
</html>
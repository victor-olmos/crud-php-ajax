<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personas</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">

</head>
<body>

<!-- NAVIGATION  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">crud</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
      </div>
    </nav> -->


    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM PERSONAS -->
              <form id="persona-form">
                  <input type="hidden" id="personaId">
                <div class="form-group">
                  <input type="text" id="name" placeholder="Nombre" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" id="last_name" placeholder="Apellido" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" id="rut" placeholder="Rut" class="form-control">
                </div>
                <div class="form-group">
                  <textarea id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripcion"></textarea>
                </div>
                <input type="hidden" id="personasId">
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Guardar
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
          <div class="card my-4" id="personas-result">
            <div class="card-body">
              <!-- SEARCH -->
              <ul id="container"></ul>
            </div>
          </div>

          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Rut</td>
                <td>Descripcion</td>
                <td>Acciones</td>
                <td></td>
              </tr>
            </thead>
            <tbody id="personas"></tbody>
          </table>
        </div>
      </div>
    </div>


    
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
    <script src="app.js"></script>
</body>
</html>
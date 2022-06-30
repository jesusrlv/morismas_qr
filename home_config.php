<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Generador de tickets | Morismas de Bracho</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Morismas de Bracho</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0" style="align-items: right;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-check-circle-fill"></i> Registrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#validate"><i class="bi bi-ticket-perforated-fill"></i> Canjear Ticket</a>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-qr-code"></i> Verificar Ticket</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="">
      <section class="py-5 text-center container-fluid" style="background: url(img/bracho-6.jpg)  50% 10px no-repeat ; background-size:cover;  height:720px;">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Morismas de Bracho</h1>
            <p class="lead text-muted">Zacatecas, Zac.</p>
          </div>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container marketing">
          <!-- Three columns of text below the carousel -->
          <div class="row mt-5">
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="180" height="140" src="img/bracho.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
              <h2 class="fw-normal">Registrar</h2>
              <p>Generador de ticket para pólvora.</p>
              <p><a class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ingresar &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="180" height="140" src="img/polvora.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="true"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
              <h2 class="fw-normal">Canjear Ticket</h2>
              <p>Canjea el ticket por pólvora.</p>
              <p><a class="btn btn-secondary" href="#">Ingresar &raquo;</a></p>
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="180" height="140" src="img/qrstatus.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
              <h2 class="fw-normal">Verificar Ticket</h2>
              <p>Verifica el estatus del QR.</p>
              <p><a class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#validate">Ingresrar &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
        <!-- START THE FEATURETTES -->
        <div class="container">
          <hr class="featurette-divider">

          <p class="fs-3"><i class="bi bi-list-check"></i> Lista de personas</p>

          <div class="row">
            <div class="col">
              <div class="input-group mb-4 w-100">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" placeholder="Filtrado" aria-label="Filtrado" aria-describedby="basic-addon1" id="myInput">
              </div>
            </div>
            <div class="col">
              <!-- <div class="input-group mb-4 justify-content-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarProducto"><i class="bi bi-plus-circle-dotted"></i> Agregar categoría</button>
              </div> -->
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover table-bordered table-sm align-middle mt-4">
              <thead style="background-color:#7B8DAB;" class="text-light align-middle">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Sel. <br><input class="form-check-input" type="checkbox" value=""></th>
                    <th scope="col">Nombre(s)</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Fecha de Registro</th>
                    <th scope="col">CURP</th>
                    <th scope="col">Cantidad Pólvora</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Editar</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php
                  include('query.php');
                  $x = 0;
                  while ($row_sqlQuery = $resultadoQuery->fetch_assoc()) {
                    $x++;
                    echo '
                    <tr class="text-center bg-white">
                      <td>' . $x . '</td>
                      <td><input class="form-check-input" type="checkbox" value="'.$row_sqlQuery['id'].'"></td>
                      <td>' . $row_sqlQuery['nombre'] . '</td>
                      <td>' . $row_sqlQuery['apellidos'] . '</td>
                      <td>' . $row_sqlQuery['fecha_entrega'] . '</td>
                      <td>' . $row_sqlQuery['curp'] . '</td>
                      <td>' . $row_sqlQuery['cantidad_polvora'] . '</td>
                      <td>' . $row_sqlQuery['detalles'] . '</td>
                      <td><span class="badge text-bg-secondary"><i class="bi bi-pencil-square"></i> Editar</span></td>
                    <tr>';
                  }
            echo'</table>';
            ?>
          </div>
        </div><!-- /.container -->
      </div><!-- /.album -->
    </main>
  </body>
  <!-- FOOTER -->
  <footer class="container">
  <hr class="featurette-divider">
    <p class="float-end"><a href="#" style="text-decoration:none"><i class="bi bi-caret-up-square-fill"></i> Arriba</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</html>

<!-- Modal alta-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-person-plus"></i> Alta de polvora</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="prcd/guardar.php" method="POST"><!--form-->
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" name="nombre" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-workspace"></i></span>
                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="basic-addon1"  name="apellidos" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-badge"></i></span>
                <input type="text" class="form-control" placeholder="CURP" aria-label="CURP" aria-describedby="basic-addon1" name="curp" required>
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
                <input type="text" class="form-control" placeholder="Cantidad" aria-label="Cantidad" aria-describedby="basic-addon1" maxlength="1" onkeypress="ValidaSoloNumeros()" onblur="validarInput(this);" name="cantidad_polvora" required>
              </div><!-- Si, y solo si se asignan 2kg de polvora, se habilita el campo de detalles y se convierte en obligatorio -->
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-card-text"></i></span>
                <textarea style="resize: none;" rows="4" type="text" class="form-control" placeholder="Detalles (opcional)" aria-label="Detalles" aria-describedby="basic-addon1" name="detalles" readonly></textarea>
              </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Cerrar</button>
            <button type="submit" class="btn btn-primary"><i class="bi bi-person-plus"></i> Guardar</button>
          </div>
        </form><!--form-->
    </div>
  </div>
</div>

<!-- Modal Validar-->
<div class="modal fade" id="validate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-person-plus"></i> Validar QR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#"><!--form-->
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" name="nombre">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-workspace"></i></span>
                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="basic-addon1"  name="apellidos">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-badge"></i></span>
                <input type="text" class="form-control" placeholder="CURP" aria-label="CURP" aria-describedby="basic-addon1" name="curp">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-123"></i></span>
                <input type="text" class="form-control" placeholder="Cantidad" aria-label="Cantidad" aria-describedby="basic-addon1" maxlength="1" onkeypress="ValidaSoloNumeros()" onblur="validarInput(this);" name="cantidad">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-card-text"></i></span>
                <textarea style="resize: none;" rows="4" type="text" class="form-control" placeholder="Detalles (opcional)" aria-label="Detalles" aria-describedby="basic-addon1" name="detalles"></textarea>
              </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Cerrar</button>
            <button type="submit" class="btn btn-primary"><i class="bi bi-person-plus"></i> Guardar</button>
          </div>
        </form><!--form-->
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
      $("#myInput").on("keyup", function () {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function () {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
      });
  });
</script>

<script>
  //Función que permite solo Números
  function ValidaSoloNumeros() {
  if ((event.keyCode < 48) || (event.keyCode > 50)) 
    event.returnValue = false;
  }
  function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);
    if (!validado)  //Coincide con el formato general?
    	return false;
    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
      //Fuente https://consultas.curp.gob.mx/CurpSP/
      var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
          lngSuma      = 0.0,
          lngDigito    = 0.0;
      for(var i=0; i<17; i++)
          lngSuma= lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
      lngDigito = 10 - lngSuma % 10;
      if(lngDigito == 10)
          return 0;
      return lngDigito;
    }
    if (validado[2] != digitoVerificador(validado[1])) 
    	return false;
        
    return true; //Validado
  }
</script>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

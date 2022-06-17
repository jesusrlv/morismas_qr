<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#">Dashboard <i class="bi bi-house-fill"></i></a>
  <hr>
  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Alta <i class="bi bi-record-circle-fill"></i></a>
  <a href="#">Listado <i class="bi bi-list-check"></i></a>
  <hr>
  <a href="../prcd/sort.php">Salir <i class="bi bi-door-open-fill"></i></a>
</div>

<div class="main">
    <div class="bg-secondary p-2">
        <h4 class="text-dark ms-2 mt-2">Morismas de bracho</h4>
        <!-- <p>This sidenav is always shown.</p> -->
    </div>

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card text-white bg-info h-100">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
              <div class="card-body align-items-center">
                    <div class="row align-items-center">
                      <div class="col-8 h-100">
                        <h3 class="card-title my-auto" style="text-size:15rem;">NÚMERO DE ALTAS</h5>
                        <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                    </div>
                      <div class="col-4 text-center">
                        <h1 class="card-title my-auto">3</h5>
                        <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-info h-100">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title">PÓLVORA ENTREGADA</h5>
                <p class="card-text">This is a short card.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-info h-100">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title">LISTADO</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-info h-100">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title">SALIR</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
   
</body>
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
        <form action=""><!--form-->
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
            <input type="text" class="form-control" placeholder="Detalles" aria-label="Detalles" aria-describedby="basic-addon1" name="detalles">
          </div>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Cerrar</button>
          <button type="button" class="btn btn-primary"><i class="bi bi-person-plus"></i> Guardar</button>
        </div>
      </form><!--form-->
    </div>
  </div>
</div>

<script>
  //Función que permite solo Números
function ValidaSoloNumeros() {
 if ((event.keyCode < 49) || (event.keyCode > 50)) 
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
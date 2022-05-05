<!DOCTYPE html>
<html>
<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
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
  <a href="#">Alta <i class="bi bi-record-circle-fill"></i></a>
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

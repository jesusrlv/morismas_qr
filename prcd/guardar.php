<html>
    <header>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="QR/ajax_generate_code.js"></script>
        <script src="print.js" type="text/javascript"></script>
    </header>
<body>

<?php
include('qc/qc.php');
include('QR/phpqrcode/qrlib.php'); 

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');

$fecha_entrega = strftime("%Y-%m-%d,%H:%M:%S");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$cantidad_polvora = $_POST['cantidad_polvora'];
$curp = $_POST['curp'];
$entregado = 0; 

function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
    }
    //genera un código de 9 caracteres de longitud.
    $codigo = generarCodigo(9);

    $contatena = $curp.'_'.$codigo;

    $codesDir = "QR/codes/";   
    // $codeFile = date('d-m-Y-h-i-s').'.png';
    $codeFile = $curp.'_'.$codigo.'.png';
    // QRcode::png($_POST['formData'], $codesDir.$codeFile, 'H', 10); 
    QRcode::png($contatena, $codesDir.$codeFile, 'H', 10); 
    echo '
    <div id="div_print">
        <p><strong>MORISMAS DE BRACHO<br>2022</strong></p>
        <p><strong>Nombre completo:</strong> ' . $_POST['nombre'] . ' ' . $_POST['apellidos'] . '</p>
        <p><strong>CURP:</strong> ' . $_POST['curp'] . '</p>
        <p><strong>Pólvora solicitada:</strong> ' . $_POST['cantidad_polvora'] . '</p>
        <p><strong></strong></p>
        <p class="text-center"><img class="img-thumbnail" src="'.$codesDir.$codeFile.'" /></p>
    </div>'
    ;

    $sqlinsert= "INSERT INTO asistentes(nombre,apellidos,fecha_entrega,curp,cantidad_polvora,entregado,codigo,qr,concatenado) VALUES('$nombre','$apellidos','$fecha_entrega','$curp','$cantidad_polvora','$entregado','$codigo','$codeFile','$contatena')";
    $resultado= $conn->query($sqlinsert);

    if($resultado){
        
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "Registro correcto",
            footer: "Morismas de Bracho 2022"
        }).then(function(){window.location="../home_config.php";});
        </script>';
        }
        else{
        echo 'No se registró el QR';
        }

?>
    
</body>
</html>
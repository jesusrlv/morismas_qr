<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="QR/ajax_generate_code.js"></script>
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
$detalles = $_POST['detalles'];
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
    echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';

    $sqlinsert= "INSERT INTO asistentes(nombre,apellidos,fecha_entrega,curp,detalles,cantidad_polvora,entregado,codigo,qr) VALUES('$nombre','$apellidos','$fecha_entrega','$curp','$detalles','$cantidad_polvora','$entregado','$codigo','$codeFile')";
    $resultado= $conn->query($sqlinsert);

    if($resultado){
        
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Registro correcto',
            html: '<a href=\"sweetalert2.github.io\">Imprimir Ticket</a>',
            footer: 'Morismas de Bracho 2022'
        }).then(function(){window.location='../home_config.php';});</script>";
        }
        else{
        echo 'No se registró el QR';
        }

?>

</body>
</html>
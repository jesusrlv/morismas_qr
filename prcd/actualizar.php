<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
include('qc/qc.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$cantidad_polvora = $_POST['cantidad_polvora'];
$curp = $_POST['curp'];
$detalles = $_POST['detalles'];
$entregado = 0; 

    $sqlinsert= "INSERT INTO asistentes(nombre,apellidos,curp,detalles,cantidad_polvora,entregado) VALUES('$nombre','$apellidos','$curp','$detalles','$cantidad_polvora','$entregado')";
    $resultado= $conn->query($sqlinsert);


    if($resultado){
        
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Registro correcto',
            text: 'Catálogo actualizado',
            footer: 'Ventas en línea</a>'
        }).then(function(){window.location='../home_config.php';});</script>";
        }
        else{
        echo 'No se registró producto';
        }


?>

</body>
</html>
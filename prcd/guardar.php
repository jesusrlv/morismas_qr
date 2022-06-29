<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
include('qc/qc.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$cantidad = $_POST['cantidad'];
$curp = $_POST['curp'];
$detalles = $_POST['detalles'];
$entregado = 0;

    $sqlinsert= "INSERT INTO asistentes(nombre,descripción,id_ext) VALUES('$talla','$cantidad','$id')";
    $resultado= $conn->query($sqlinsert);


    if($resultado){
        
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Producto registrado',
            text: 'Catálogo actualizado',
            footer: 'Ventas en línea</a>'
        }).then(function(){window.location='../tallas.php?id=".$id."';});</script>";
        }
        else{
        echo 'No se registró producto';
        }


?>

</body>
</html>
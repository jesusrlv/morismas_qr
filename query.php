<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
    include('prcd/qc/qc.php');

    $sqlQuery ="SELECT * FROM asistentes WHERE entregado = 0 ORDER BY fecha_entrega ASC";
    $resultadoQuery = $conn->query($sqlQuery);

    $sqlQueryEntregado ="SELECT * FROM asistentes WHERE entregado = 1 ORDER BY fecha_entrega ASC";
    $resultadoQueryEntregado = $conn->query($sqlQueryEntregado);

?>

</html>
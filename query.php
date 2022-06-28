<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
    include('prcd/qc/qc.php');

    $sqlQuery ="SELECT * FROM asistentes ORDER BY fecha_entrega ASC";
    $resultadoQuery = $conn->query($sqlQuery);

?>

</html>
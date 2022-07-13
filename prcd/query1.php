<?php
include('qc/qc.php');

$concatenado = $_POST['text'];

    $Query = "SELECT * FROM asistentes WHERE concatenado = '$concatenado' " ;
    $resultado_Query = $conn->query($Query);
    $row_sql_catalogo = $resultado_Query->fetch_assoc();

    echo '
          <p><strong>Nombre completo:</strong> ' . $row_sql_catalogo['nombre'] . ' ' . $row_sql_catalogo['apellidos'] . '</p>
          <p><strong>CURP:</strong> ' . $row_sql_catalogo['curp'] . '</p>
          <p><strong>Pólvora solicitada:</strong> ' . $row_sql_catalogo['cantidad_polvora'] . '</p>
    ';

?>
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
    echo "
    <!-- Inicia SWAL -->
          <script type='text/javascript'>
          function entrega() {
            
            Swal.fire({
              title: 'Estas seguro que deseas canjear el ticket?',
              text: 'Ojo, no lo podrás revertir!',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sí, canjear'
            
            }).then(function(){window.location='prcd/actualizarqrstatus.php?id=". $row_sql_catalogo['id'] ."';})

          }
          </script>
          <!-- Termina SWAL -->
    ";

?>
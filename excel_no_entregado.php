<?php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte_polvora_noentregada.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-type: text/html; charset=utf8");

echo "
    <html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">
    <html>
    <head><meta http-equiv=\"Content-type\" content=\"text/html;charset=utf-8\" /></head>";
?>
          <body>
            <table>
                <tr>
                    <th>#</th>
                    <th>Nombre(s)</th>
                    <th>Apellidos</th>
                    <th>Fecha de Registro</th>
                    <th>CURP</th>
                    <th>Cantidad Pólvora</th>
                    <th>Detalles</th>
                </tr>
              
                <?php
                  include('query.php');
                  $x = 0;
                  while ($row_sqlQuery = $resultadoQuery->fetch_assoc()) {
                    $x++;
                    
              echo '<tr>
                      <td>' . $x . '</td>
                      <td>' . $row_sqlQuery['nombre'] . '</td>
                      <td>' . $row_sqlQuery['apellidos'] . '</td>
                      <td>' . $row_sqlQuery['fecha_entrega'] . '</td>
                      <td>' . $row_sqlQuery['curp'] . '</td>
                      <td>' . $row_sqlQuery['cantidad_polvora'] . '</td>
                      <td>' . $row_sqlQuery['detalles'] . '</td>
                    </tr>';
                }
                echo '</table>';
                ?>
          </body>
          </html>

         
                  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Datos</title>
</head>
<body>

    <center>
        <h1>Resgistro de Usuarios</h1>
        <br>
    <?php
    include ("conexion.php");
    //Consulta sql seleccionar todo el contenido
    $query = "SELECT * FROM usuarios";

    echo '<table border="0" cellspacing="2" cellpadding="2">
    <tr> 
        <td align="center"> <font face="Arial">id</font> </td> 
        <td align="center"> <font face="Arial">Usuario</font> </td> 
        <td align="center"> <font face="Arial">Nombre</font> </td> 
        <td align="center"> <font face="Arial">Apellido</font> </td> 
        <td align="center"> <font face="Arial">Correo</font> </td> 
        <td align="center"> <font face="Arial">Telefono</font> </td>
        <td align="center"> <font face="Arial">Password</font> </td>
    </tr>';


if ($result = $conexion->query($query)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["id"];
      $field2name = $row["usuario"];
      $field3name = $row["nombre"];
      $field4name = $row["ape"];
      $field5name = $row["correo"]; 
      $field6name = $row["telefono"];
      $field7name = $row["pass"];

      echo '<tr> 
                <td>'.$field1name.'</td> 
                <td>'.$field2name.'</td> 
                <td>'.$field3name.'</td> 
                <td>'.$field4name.'</td> 
                <td>'.$field5name.'</td> 
                <td>'.$field6name.'</td>
                <td>'.$field7name.'</td>
            </tr>';
  }
  $result->free();
} 

    ?>
    </center>
    <a href="index.html">Regresar</a>
</body>

<!--mysql_fetch_row() - Obtiene una fila de resultados como un array numérico
mysql_fetch_array() - Recupera una fila de resultados como un array asociativo, un array numérico o como ambos
mysql_data_seek() - Mueve el puntero de resultados interno
mysql_query() - Enviar una consulta MySQL
mysql_error() - Devuelve el texto del mensaje de error de la operación MySQL anterior-->
</html>
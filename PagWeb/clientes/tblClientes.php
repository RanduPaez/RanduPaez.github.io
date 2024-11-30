<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de clientes</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<a href="../index.html"><h1 class="titulo">Páez Medrano Kevin Randú     <span style="color: rgb(167, 146, 119)">         Computer Engineer</span></h1></a>
<header class="header">
    <h2 class="header-1">Página de clientes</h2> 
</header>
<div>
    <h3>Lista de clientes</h3>   
</div>   
<div class="container my-4">
<table class="table table-dark table-striped mi-table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Empresa</th>
            <th scope="col">Contacto</th>
            <th scope="col">País</th>
        </tr>
    </thead>
<tbody>
    <?php
    $conexion = mysqli_connect("localhost","root","","dbclientes");
    if(!$conexion) {
        die("La conexión no fue exitosa");
    }
    $sql = "SELECT * FROM tblclientes";
    $result = mysqli_query($conexion,$sql);
    while($row = mysqli_fetch_array($result)) {
        $idCliente = $row["idCliente"];  
        $Empresa = $row["Empresa"];  
        $Contacto = $row["Contacto"];  
        $Pais = $row["Pais"];  
        echo "<tr>
            <th scope='row'>$idCliente</th>
            <td>$Empresa</td>
            <td>$Contacto</td>
            <td>$Pais </td>
            </tr>";
        } 
        mysqli_close($conexion);
    ?>
  </tbody>
</table>
<a style="text-decoration: none;" href="./cliente.html" class="boton">Formulario</a>
</div>
</body>
</html>
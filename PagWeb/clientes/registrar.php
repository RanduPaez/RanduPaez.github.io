<?php 
include 'conexion.php';
// Recibir los datos del formulario y almacenarlos en las variables
$Empresa = $_POST["Empresa"];
$Contacto = $_POST["Contacto"];
$Pais = $_POST["Pais"];
function validarCamposVacios($campo) {
    return empty($campo);
}

if (validarCamposVacios($Empresa) || validarCamposVacios($Contacto) || validarCamposVacios($Pais) ) {
    echo '<script>
            alert("No puede poner campos vacíos");
            window.history.go(-1);
        </script>';
    exit;
}
// Insertar campos
$insertar = "INSERT INTO tblclientes(Empresa,Contacto,Pais) VALUES ('$Empresa','$Contacto','$Pais')";

$verificar_cliente = mysqli_query($conexion,"SELECT * FROM tblclientes WHERE Empresa = '$Empresa'");

if (mysqli_num_rows($verificar_cliente) > 0) {
    echo '<script>    
         alert("Este cliente ya fue registrado");
         window.history.go(-1);
        </script>';  
    exit;
}
// Ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado) {
    echo '<script> 
            alert("Error de registro");
            window.history.go(-1);
        </script>';
} else {
    echo '<script> 
            alert("Registro efectuado correctamente");
            window.history.go(-1);
        </script>';   
}
// Cerrar consultas
mysqli_close($conexion);
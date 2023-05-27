<?php
include ("conexion.php");

if (isset($_POST['enviar'])) {
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['correo'];
$telefono=$_POST['telefono'];
$password=$_POST['pass'];
$password=md5($password); //La contraseña se cifra en md5
$insertar = "INSERT INTO usuarios (usuario,nombre,ape,correo,telefono,pass) VALUES ('$usuario','$nombre','$apellido','$email','$telefono','$password')";

if (mysqli_query($conexion,$insertar)) {
    //echo "<script language='JavaScript'>alert('¡Registro exitoso!')</script>";
    echo "<script>
                alert('¡Registro exitoso!');
                window.location= 'index.html'
    </script>";
    }else{
        echo "error en el registro" . $insertar . mysqli_error($conexion);
    }
    
}
//header('location:index.html');
mysqli_close($conexion);

?>
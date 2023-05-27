<?php
include ("conexion.php");


if (isset($_POST['login'])) {
    if(empty($_POST['usuario']) ||empty($_POST['pass'])) {
        echo "<script>
                alert('¡Registro exitoso!');
                window.location= 'sesionregis.html'
    </script>";
    }else{
        $usuario=$_POST['usuario'];
        $password=md5($_POST['pass']);
        $sql="SELECT * FROM usuarios WHERE usuario = '".$usuario."' and pass='".$password."'";
        $resultado=mysqli_query($conexion,$sql);
        //$nr=mysqli_num_rows($resultado);
        //$row = mysqli_fetch_assoc($resultado);
        if($row = mysqli_fetch_assoc($resultado)){
            session_start(); //se inicia sesión
            $_SESSION['usuario']= $usuario; //Se utiliza la variable global de PHP para las sesiones
            //if (($nr == 1) && (password_verify($password, $row['pass']))) {
            echo "<script>
                alert('¡Información Correcta!');
                window.location= 'home.php'
                </script>";
        }else {
            echo "<script>
                alert('¡Información erronea!');
                window.location= 'index.html'
                </script>";
        }
    }
}
?>
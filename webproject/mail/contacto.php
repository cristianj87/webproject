<?php
session_start();
if(!isset($_SESSION['usuario'])) {
  header("Location:index.html");
  exit(0);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/formu.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="icon" type="image/png" href="/img/webfavi.png" sizes="32x32">
    <title>Formulario de contacto</title>
    <style>
        button {
  color: #1d1d1d;
  color: var(--form-text);
  background-color: #f0cccc;
  font-family: inherit;
  font-size: inherit;
  margin-right: 6px;
  margin-bottom: 6px;
  padding: 10px;
  border: none;
  border-radius: 6px;
  outline: none;
  cursor: pointer;
}

          textarea {

  display: block;
  width: 100%;
  margin-top: 8px;
  padding-right: 15px;
  padding-left: 15px;
  font-size: 16px;
  line-height: 40px;
  color: #3b4465;
  background: #eef9fe;
  border: 1px solid #cddbef;
  border-radius: 2px;
  
}

        </style>
</head>

<body>
    <div>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="/home.php">Inicio</a>
                    </li>
                    <li>
                        <a href="/mail/contacto.php">Contactanos</a>
                    </li>
                    <li>
                        <a href="/cerrarsesion.php">Salir</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <section class="forms-section">
        <h1 class="section-title">Contacto</h1>
        <h2 style="color:#FFFFFF;">Hola <strong><?php echo $_SESSION['usuario']; ?></strong></h2>
        <p style="color:#FFFFFF; font-size:95%;">Si tienes alguna duda, favor de contactarnos</p>
        <div class="forms">
            <form action="/mail/send-email.php" method="post">
                <fieldset>
                    <div class="input-block">
                        <label id="icon" for="signup-user"><i class="icon-user"></i> Nombre</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="input-block">
                        <label id="icon" for="signup-email"><i class="icon-envelope"></i> E-mail</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="input-block">
                        <label id="icon" for="signup-email"><i class="icon-envelope"></i> Asunto</label>
                        <input type="text" name="subject" required>
                    </div>
                    <div class="input-block">
                        <label id="icon" for="signup-email"><i class="icon-envelope"></i> Mensaje</label>
                      <p> <textarea name="message" required></textarea></p> 
                    </div>
                </fieldset>
                <br>
                <center><button>Enviar</button></center>
                <!--<button type="submit" name="enviar" class="btn-signup">Continuar</button>-->
                <!--<input type="submit" value="ENVIAR" class="btn-login" id="boton">-->
            </form>
    </section>
    </div>
</body>

</html>
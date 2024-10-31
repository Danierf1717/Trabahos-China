<?php
    if(isset($_POST["register"])){
        include "functions.php";
        include "funciones_Basicas.php";
        $usuario = user($_POST["email"]);
        $correo = CheckEmail($_POST['email']);
        if ($correo) {
            $error = "El correo ya está registrado.";
        }else{
            $correo = $_POST["email"];
            $correokey = $_POST["password"];
            $validacion = $_POST["passwordValidate"];
            $nombre = $_POST["name"];	
            if($correokey == $validacion){
                insertarUsuario($correo, $correokey, $nombre);
                header('Location: index.php');
                exit();
            }else{
                $error = "Las contraseñas no coinciden.";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Torneo de Artes Marciales</title>
    <link rel="stylesheet" href="css/Papeleria.css">
</head>
<body>
<button id="toggleMusic">🔊 Reproducir Música</button>

<audio id="backgroundAudio" loop>
    <source src="musica/𝘧𝘪𝘧𝘵𝘺-𝘧𝘪𝘧𝘵𝘺--slowed-to-perfection.mp3" type="audio/mp3">
    Tu navegador no soporta audio HTML5.
</audio>
    <div class="register-container">
        <h2>Registrarse</h2>
        <?php if (isset($error)):?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo Electronico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="text" id="password" name="password" required>

            <label for="password">Confirmar Contraseña:</label>
            <input type="password" id="password" name="passwordValidate" required>

            <button type="submit" name="register">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a></p>
    </div>
    <script src="script.js"></script>
</body>
</html>

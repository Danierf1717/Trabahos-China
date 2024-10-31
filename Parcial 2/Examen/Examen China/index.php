<?php
    include "functions.php";
    include "funciones_Basicas.php";
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $check = checkEmail($email);
        if($check){
            $password = $_POST['password'];
            $usuario = infoUser($email);
            if($usuario['correokey'] === $password){
                header('Location: papeleria.php');
                exit();
            }else{
                $error = "Contraseña o Correo Incorrecto.";
            }
        }else{
            $error = "El correo no existe.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Papeleria.css">
</head>
<body>
<button id="toggleMusic">🔊 Reproducir Música</button>
<audio id="backgroundAudio" loop>
    <source src="musica/𝘧𝘪𝘧𝘵𝘺-𝘧𝘪𝘧𝘵𝘺--slowed-to-perfection.mp3" type="audio/mp3">
    Tu navegador no soporta audio HTML5.
</audio>
<div class="login-container" id="loginContainer">
<?php if (isset($error)):?>
    <p class="error"><?php echo $error; ?></p>
<?php endif; ?>
        <h2>Iniciar Sesión</h2>
        <form method="POST">
            <label for="gmail">Correo Electronico:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Iniciar Sesion</button>
        </form>
        <p>¿No te has registrado? <a href="register.php">Registrar</a></p>
    </div>

    <div class="subtitle" id="subtitle">Presione "X" para iniciar Sesion</div>

    <script>
         const toggleMusicButton = document.getElementById('toggleMusic');
        const backgroundAudio = document.getElementById('backgroundAudio');

    toggleMusicButton.addEventListener('click', () => {
        if (backgroundAudio.paused) {
            backgroundAudio.play();
            toggleMusicButton.textContent = '🔊 Música en Reproducción';
        } else {
            backgroundAudio.pause();
            toggleMusicButton.textContent = '🔇 Reproducir Música';
        }
    });

        document.addEventListener('keydown', (event) => {
    if (event.key === 'x' || event.key === 'X') {
        console.log('Tecla X presionada, mostrando el contenedor'); // Verifica que se activa
        loginContainer.classList.add('show');
        subtitle.style.display = 'none'; // Oculta el subtítulo
    }
});
    </script>
    <script src="script.js"></script>
</body>
</html>
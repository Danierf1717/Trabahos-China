<?php
    include "functions.php";
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
    <source src="" type="audio/mp3">
    Tu navegador no soporta audio HTML5.
</audio>
<div class="login-container" id="loginContainer">
        <h2>Iniciar Sesión como Administrador</h2>
        <form method="POST">
            <label for="gmail">Numero de Identificacion:</label>
            <input type="gmail" id="gmail" name="gmail" required>

            <label for="password">Codigo de Acceso:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Ingresar al Sistema como Administrador</button>
        </form>
        <p>¿No tienes tu Codigo de Acceso? <a href="register.php">Volver a Solicitar el Codigo</a></p>
    </div>

    <div class="subtitle" id="subtitle">Presiona La Tecla X Para Enlazar Al Sistema</div>

    <script>
 const loginContainer = document.getElementById('loginContainer');
        const subtitle = document.getElementById('subtitle');
        const backgroundAudio = document.getElementById('backgroundAudio');

        
        document.getElementById('toggleMusic').addEventListener('click', () => {
        
            if (backgroundAudio.paused) {
                backgroundAudio.play(); 
                backgroundAudio.loop = true; 
                console.log('Música iniciada');
            } else {
                backgroundAudio.pause(); 
                console.log('Música pausada');
            }
        });

        
        document.addEventListener('keydown', (event) => {
            if (event.key === 'x' || event.key === 'X') {
                console.log('Mostrando contenedor con animación'); 
                loginContainer.style.display = 'block'; 
                requestAnimationFrame(() => {
                    loginContainer.classList.add('show');
                });
                
                subtitle.style.display = 'none';
            }
        });
    </script>
    <script src="script.js"></script>
</body>
</html>
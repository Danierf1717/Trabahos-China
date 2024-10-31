<?php
    function user($gmail){
        include "functions.php";
        $user = $pdo->prepare("SELECT * FROM usuarios WHERE correo = :correo");
        $user->execute(['correo' => $_POST["email"]]);
        return $user;
    }

    function infoUser($gmail){
        $user = user($gmail);
        return $user->fetch(PDO::FETCH_ASSOC);
    }

    function insertarUsuario($correo, $correokey, $nombre){
        include "functions.php";
        $query = $pdo->prepare("INSERT INTO usuarios (correo, correokey, nombre, isAdmin) VALUES (:correo, :correokey, :nombre, :isAdmin)");
        $query->execute(['correo' => $correo, 'correokey' => $correokey, 'nombre' => $nombre, 'isAdmin' => false]);
    }

    function CheckEmail($email){
        $usuario = user($email);
        if ($usuario->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }
?>
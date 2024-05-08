<?php
require_once 'entity/Usuario.php';
require_once 'dao/UsuarioDAO.php';

$type = filter_input(INPUT_POST, "type");

if ($type === "register") {
    
    // Lógica de registro do usuário
    $new_nome = filter_input(INPUT_POST, "new_nome");
    $new_email = filter_input(INPUT_POST, "new_email", FILTER_SANITIZE_EMAIL);
    $new_password = filter_input(INPUT_POST, "new_password");
    $confirm_password = filter_input(INPUT_POST, "confirm_password");

    // Objeto New Usuário         Propriedades abaixo
    $usuario = new Usuario(null, $new_nome, $new_password, $new_email, null, 1, null, null);
    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->create($usuario);
    
} elseif ($type === "login") {
    // To Do : Verificar se o usuário tem cadastro
    // Dar ao usuário um token de sessão para navegar no site
}

?>
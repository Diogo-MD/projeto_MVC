<?php
require_once("template/header.php");
require_once("dao/UsuarioDAO.php");

$usuarioDAO = new UsuarioDAO();
if($usuarioDAO->getById(1)) {
    echo "Usuário Existe!";
} else {
    echo "Usuário Não Existe!";
}

?>

    <h1>Olá Sistema Vendas Body</h1>

</body>

<?php
require_once("template/footer.php");
?>
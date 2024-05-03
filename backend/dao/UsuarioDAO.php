<?php
require_once '../config/Database.php';
require_once '../entity/Usuario.php';

class UsuarioDAO implements BaseDAO {

    private $db;
    public function __construct() 
    {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try{
            // Preparar a consulta SQL
            $sql = "SELECT * FROM Usuario WHERE id = :id";

            // Preparar a instrução
            $stmt = $this->db->prepare($sql);

            // Vincular parâmetros
            $stmt->bindParam(':id', $id);

            // Executa a instrução
            $stmt->execute();

            // Obtem o usuário encontrado
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Retorna o Usuário encontrado
            return $usuario ? new Usuario ($usuario['Id'],
                                        $usuario['NomeUsuario'],
                                        $usuario['Senha'],
                                        $usuario['GrupoUsuarioId'],
                                        $usuario['Ativo'],
                                        $usuario['DataCriacao'],
                                        $usuario['DataAtualizacao']) 
                            : null;
            } catch (PDOException $e) {
                return null;
            }
    }

    public function getAll() {

    }

    public function create($entity) {

    }

    public function update($entity) {

    }

    public function delete($id) {

    }
}

?>
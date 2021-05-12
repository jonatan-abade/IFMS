<?php
require_once "app/model/Model.php";

class User extends Model
{
    function login($dados)
    {
        $sql = "SELECT * FROM users WHERE email = ? AND senha = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $dados['email']);
        $stmt->bindParam(2, $dados['senha']);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            $_SESSION['userid'] = $user['id'];
            $_SESSION['usernome'] = $user['nome'];
        }else{
            echo "erro ao logar";
        }
    }

    function save($dados)
    {
        $sql = "INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $dados['nome']);
        $stmt->bindParam(2, $dados['email']);
        $stmt->bindParam(3, $dados['senha']);

        $stmt->execute();

        return true;
    }


    function update($dados)
    {
        $sql = 'UPDATE noticias SET titulo = ?, texto = ?, id_categoria = ? WHERE id= ? ';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $dados['titulo']);
        $stmt->bindParam(2, $dados['texto']);
        $stmt->bindParam(3, $dados['categoria'],);
        $stmt->bindParam(4, $dados['id']);

        $stmt->execute();
    }

    function destroy($id)
    {
        $sql = 'DELETE FROM noticias WHERE id = ?';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
}

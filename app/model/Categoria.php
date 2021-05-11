<?php
require_once "app/model/Model.php";

class Categoria extends Model
{
    function getAll()
    {
        $sql = "SELECT * FROM categorias";

        $categorias = $this->db->query($sql);

        return $categorias;
    }

    function find($id)
    {
        $sql = "SELECT * FROM categorias WHERE id = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        $categoria = $stmt->fetch(PDO::FETCH_ASSOC);

        return $categoria;
    }

    function save($titulo)
    {
        $sql = 'INSERT INTO categorias (titulo) VALUES (?)';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $titulo, PDO::PARAM_STR);

        $stmt->execute();
    }


    function update($dados)
    {
        $sql = 'UPDATE categorias SET titulo=? WHERE id=?';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $dados['titulo']);
        $stmt->bindParam(2, $dados['id']);

        $stmt->execute();
    }

    function destroy($id)
    {
        $sql = 'DELETE FROM categorias WHERE id = ?';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
}

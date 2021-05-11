<?php
require_once "app/model/Model.php";

class Noticia extends Model
{
    function getAll()
    {
        $sql = "SELECT * FROM noticias";

        $noticias = $this->db->query($sql);

        return $noticias;
    }

    function find($id)
    {
        $sql = "SELECT * FROM noticias WHERE id = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        $categoria = $stmt->fetch(PDO::FETCH_ASSOC);

        return $categoria;
    }

    function save($titulo)
    {
        $sql = 'INSERT INTO noticias (titulo) VALUES (?)';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $titulo, PDO::PARAM_STR);

        $stmt->execute();
    }


    function update($dados)
    {
        $sql = 'UPDATE noticias SET titulo=? WHERE id=?';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $dados['titulo']);
        $stmt->bindParam(2, $dados['id']);

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

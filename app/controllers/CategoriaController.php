<?php
include 'app/model/Categoria.php';

class CategoriaController
{
    public function index()
    {
        $categorias = new Categoria;

        $categorias = $categorias->getAll();

        include 'public/view/categoria/index.php';
        return $categorias;
    }

    public function create()
    {
        include 'public/view/categoria/form.php';
    }

    public function store()
    {
        $categoria = new Categoria;

        $titulo = $_POST['titulo'];

        $categoria->save($titulo);

        header("Location:" . URL . "categoria");
    }

    public function edit()
    {
        $id = $_GET['id'];
        $categoria = new Categoria;
        $categoria = $categoria->find($id);

        include 'public/view/categoria/form.php';
    }
    public function update()
    {
        $categoria = new Categoria;

        $categoria->update($_POST);

        header("Location:" . URL . "categoria");
    }

    public function delete()
    {
        $categoria = new Categoria;

        $id = $_GET['id'];
        $categoria->destroy($id);

        header("Location:" . URL . "categoria");
    }
}

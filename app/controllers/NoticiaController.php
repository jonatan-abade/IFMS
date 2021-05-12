<?php
include_once 'app/model/Noticia.php';
include_once 'app/model/Categoria.php';

class NoticiaController
{
    public function index()
    {
        $noticias = new Noticia;

        $noticias = $noticias->getAll();

        include 'public/view/noticia/index.php';
    }

    public function create()
    {
        $categorias = new Categoria;
        $categorias = $categorias->getAll();
       
        include 'public/view/noticia/form.php';
        
    }

    public function store()
    {
        $noticia = new Noticia;

        $noticia->save($_POST);
        header("Location:" . URL . "noticia");
    }

    public function edit()
    {
        $id = $_GET['id'];
        $noticia = new Noticia;
        $noticia = $noticia->find($id);
        $categorias = new Categoria;
        $categorias = $categorias->getAll();

        include 'public/view/noticia/form.php';
    }
    public function update()
    {
        $noticia = new Noticia;

        $noticia->update($_POST);

        header("Location:" . URL . "noticia");
    }

    public function delete()
    {
        $noticia = new Noticia;

        $id = $_GET['id'];
        $noticia->destroy($id);

        header("Location:" . URL . "noticia");
    }
}

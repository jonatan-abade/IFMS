<?php

$url = isset($_GET['url']) ? explode("/", $_GET['url']) : array(1);

$controller = $url[0] == 1 ? 'Noticia' : ucfirst($url[0]);
$metodo = isset($url[1]) ? $url[1] : 'index';
$param = isset($url[2]) ? $url[2] : null;

require "app/controllers/" . $controller . "Controller.php";

$objeto = $controller . "Controller";

$pagina = new $objeto;

$pagina->$metodo();

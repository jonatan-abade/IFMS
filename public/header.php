<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">ABADE NEWS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= URL ?>noticia">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>categoria">Categorias</a>
          </li>
        </ul>

        <?php if (isset($_SESSION['userid'])) { ?>
          <a href="user/deslogar" class="btn btn-primary text-end" style="margin-right: 5px;">Deslogar</a>
        <?php } else { ?>
          <a href="user" class="btn btn-primary text-end" style="margin-right: 5px;">Logar</a>
          <small class="text-white">Ainda não tem uma conta? <br> <a href="user/formRegister">resgistre-se</a></small>
        <?php } ?>
      </div>
    </div>
  </nav>

  <div class="container principal my-3">
<div class="card">
    <div class="card-body">
        <h1>Adicionar notícia</h1>
        <hr>
        <form method="POST" action="<?= URL ?>noticia/<?= isset($noticia) ? "update" : "store" ?>">

            <input type="hidden" name="id" value="<?= isset($noticia['id']) ? $noticia['id'] : "" ?>" readonly>

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?= isset($noticia['id']) ? $noticia['titulo'] : "" ?>">
            </div>

            <div class="form-floating mb-3">
                <textarea name="texto" class="form-control" placeholder="Escreva o texto aqui" id="texto" style="height: 100px"><?= isset($noticia['texto']) ? $noticia['texto'] : "" ?></textarea>
                <label for="texto">Digite o texto aqui</label>
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Categoria</label>
                <select class="form-select" name="categoria" aria-label="Default select example">
                    <?php foreach ($categorias as $categoria) { ?>
                        <option <?= isset($noticia) ? $noticia['id_categoria'] ==  $categoria['id'] ? "selected" : "" : "" ?> value="<?= $categoria['id'] ?>"><?= $categoria['titulo'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>
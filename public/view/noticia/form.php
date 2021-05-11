<form method="POST" action="<?= URL ?>noticia/<?= isset($noticia['id']) ? "update" : "store" ?>">


    <input type="hidden" name="id" value="<?= isset($noticia['id']) ? $noticia['id'] : "" ?>" readonly>

    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= isset($noticia['id']) ? $noticia['titulo'] : "" ?>">
    </div>

    <div class="mb-3">

        <select class="form-select" aria-label="Default select example">
            <?php foreach ($categorias as $categoria) { ?>
                <option value="<?= $categoria['id'] ?>"><?= $categoria['titulo'] ?></option>
            <?php } ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
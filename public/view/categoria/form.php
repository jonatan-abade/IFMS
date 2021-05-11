<form method="POST" action="<?= URL ?>categoria/<?= isset($categoria['id']) ? "update" : "store" ?>">


    <input type="hidden" name="id" value="<?= isset($categoria['id']) ? $categoria['id'] : "" ?>" readonly>

    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= isset($categoria['id']) ? $categoria['titulo'] : "" ?>">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
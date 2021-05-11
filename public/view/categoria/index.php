<h1>Categoria</h1>
<a href="categoria/create" class="btn btn-primary mb-3">Adicionar categoria</a>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Acões</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categorias as $key => $categoria) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $categoria['titulo'] ?></td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#mDeletCat<?= $categoria['id'] ?>">
                        <i class="fas fa-trash"></i></button>
                    <a href="categoria/edit?id=<?= $categoria['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                </td>
                <!-- Modal -->
                <div class="modal fade" id="mDeletCat<?= $categoria['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>Tem certeza que deseja deletar <?= $categoria['titulo'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <form action="categoria/delete" method="GET">
                                    <input type="hidden" name="id" value="<?= $categoria['id'] ?>">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        <?php } ?>
    </tbody>
</table>
<h1>Notícia</h1>
<?php if (isset($_SESSION['userid'])) { ?>
    <a href="noticia/create" class="btn btn-primary mb-3">Adicionar notícia</a>
<?php } ?>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Texto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Acões</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($noticias as $key => $noticia) {
            $categoria = new Categoria;
            $categoria = $categoria->find($noticia['id_categoria']); ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $noticia['titulo'] ?></td>
                <td><?= $noticia['texto'] ?></td>
                <td><?= $categoria['titulo'] ?></td>
                <td>
                    <?php if (isset($_SESSION['userid'])) { ?>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#mDeletCat<?= $noticia['id'] ?>">
                            <i class="fas fa-trash"></i></button>
                        <a href="noticia/edit?id=<?= $noticia['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <?php } else {
                        echo "Nada por agora";
                    } ?>

                </td>
                <!-- Modal -->
                <div class="modal fade" id="mDeletCat<?= $noticia['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>Tem certeza que deseja deletar <?= $noticia['titulo'] ?></p>
                            </div>
                            <div class="modal-footer">
                                <form action="noticia/delete" method="GET">
                                    <input type="hidden" name="id" value="<?= $noticia['id'] ?>">
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
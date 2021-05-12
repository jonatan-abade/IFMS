<div class="card col-6 mt-5 m-auto">
    <div class="card-body">
        <h1>Login</h1>
        <hr>
        <form method="POST" action="<?= URL ?>user/login" ?>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>
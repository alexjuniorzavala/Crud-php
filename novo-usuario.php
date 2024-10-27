<h1>Novo Usuario</h1>
<form method="post" action="?page=salvar">
    <div class="mb-3">
        <input type="hidden" name="acao" value="cadastrar">
        <label for="inome">nome</label>
        <input type="text" name="nome" id="inome" class="form-control ">
    </div>
    <div class="mb-3">
        <label for="iemail">Email</label>
        <input type="email" name="email" id="iemail" class="form-control ">
    </div>
    <div class="mb-3">
        <label for="isenha">Senha</label>
        <input type="password" name="senha" id="isenha" class="form-control ">
    </div>
    <div class="mb-3">
        <label for="idata">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="idata" class="form-control ">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
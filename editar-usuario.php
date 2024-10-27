<h1>Editar Usuario</h1>
<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    
    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>
<form method="post" action="?page=salvar">
    <div class="mb-3">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print"$row->id"?>">
        <label for="inome">nome</label>
        <input type="text" name="nome" id="inome" class="form-control " value="<?php print "$row->nome" ?>">
    </div>
    <div class="mb-3">
        <label for="iemail">Email</label>
        <input type="email" name="email" id="iemail" class="form-control " value="<?php print "$row->email" ?>">
    </div>
    <div class="mb-3">
        <label for="isenha">Senha</label>
        <input type="password" name="senha" id="isenha" class="form-control " required>
    </div>
    <div class="mb-3">
        <label for="idata">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="idata" class="form-control " value="<?php print "$row->data_nasc" ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
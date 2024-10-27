<h1>Listar Usuarios</h1>
<?php 
    $sql = "SELECT * FROM usuarios";                
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr><th>#</th><th>Nome</th><th>Email</th><th>Data de Nascimento</th></tr>";
            while($row = $res->fetch_object()){
                    print"<tr>";
                        print "<td>$row->id</td>";
                        print "<td>$row->nome</td>";
                        print "<td>$row->email</td>";
                        print "<td>$row->data_nasc</td>";
                        print "<td>
                        <button class='btn btn-success' onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>
                        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\">Excluir</button></td>";
                    print"</tr>";
                }
        print "</table>";

    }else{
        print "<p class'alert-danger'>Nao encontrou nenhum resultado</p>";
    }
?>
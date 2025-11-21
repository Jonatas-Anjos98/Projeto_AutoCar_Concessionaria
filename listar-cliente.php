<h1>Listar Clientes</h1>

<?php 
    $sql = "SELECT * FROM cliente";

    $res = $conn->query($sql);

    $Quant = $res->num_rows;

    if($Quant > 0){
        print "<p>Encontrou <b>$Quant</b> Número(s) de cliente(s)!</p>";
        print "<table class='table table-hover table-striped table-bordered Dark border border-3 border'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Telefone</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" . $row->id_cliente . "</td>";
            print "<td>" . $row->nome_cliente . "</td>";
            print "<td>" . $row->email_cliente . "</td>";
            print "<td>" . $row->telefone_cliente . "</td>";
            print "<td> <button class='btn btn-success' onclick=\"location.href='?page=editar-cliente&id_cliente={$row->id_cliente}';\">Editar</button>
            
            <button class='btn btn-danger' onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='?page=salvar-cliente&acao=excluir&excluir&id_cliente={$row->id_cliente}';}else{false;}\">Excluir</button></td>";
            print "</tr>";
        }
        print "</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }else{
        print "<p>Não encontrou resultado!</p>";
    }
?>
<h1>Listar Funcionários</h1>

<?php 
    $sql = "SELECT * FROM funcionario";

    $res = $conn->query($sql);

    $Quant = $res->num_rows;

    if($Quant > 0){
        print "<p>Encontrou <b>$Quant</b> Número(s) de funcionario(s)!</p>";
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
            print "<td>" . $row->id_funcionario . "</td>";
            print "<td>" . $row->nome_funcionario . "</td>";
            print "<td>" . $row->email_funcionario . "</td>";
            print "<td>" . $row->telefone_funcionario . "</td>";
            print "<td> <button class='btn btn-success' onclick=\"location.href='?page=editar-funcionario&id_funcionario={$row->id_funcionario}';\">Editar</button>
            
            <button class='btn btn-danger' onclick=\"if(confirm('tem certeza que deseja excluir?')){location.href='?page=salvar-funcionario&acao=excluir&excluir&id_funcionario={$row->id_funcionario}';}else{false;}\">Excluir</button></td>";
            print "</tr>";
        }
        print "</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }else{
        print "<p>Não encontrou resultado!</p>";
    }
?>
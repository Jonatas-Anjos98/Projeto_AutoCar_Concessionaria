<h1>Listar Marcas</h1>

<?php 
    $sql = "SELECT * FROM marca";
    
    $res = $conn->query($sql);

    $Amount_Rows = $res->num_rows;

    if ($Amount_Rows > 0){
        print "<p>Foi encontrado <strong>$Amount_Rows</strong> marcas de carros!</p>";
        print "<table class='table table-hover table-striped table-bordered Dark border border-3 border'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" . $row->id_marca . "</td>";
            print "<td>" . $row->nome_marca . "</td>";
            print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-marca&id_marca={$row->id_marca}';\">Editar</button>
                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir essa marca?')){location.href='?page=salvar-marca&acao=excluir&excluir&id_marca={$row->id_marca}';}else{false;}\">Excluir</button>    
            </td>";
            print "</tr>";
        }
        print "</table><br><br><br><br><br><br><br><br><br><br><br><br>";

    }else{
        print "<p>Não foi encontrado nenhuma marca!</p><br><br><br><br><br><br><br><br><br><br><br><br>";
    }
?>
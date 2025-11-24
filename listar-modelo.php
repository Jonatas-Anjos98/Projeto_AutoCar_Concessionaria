<h1>Listar Modelos</h1>

<?php 
    $sql = "SELECT * FROM modelo AS mo INNER JOIN marca AS ma ON mo.marca_id_marca = ma.id_marca";

    $res = $conn->query($sql);
    $Amount_Rows = $res->num_rows;

    if ($Amount_Rows > 0){
        print "<p>Encontrou <strong>$Amount_Rows</strong> modelos cadastrados!</p>";
        print "<table class='table table-hover table-striped table-bordered Dark border border-3 border'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Marca</th>";
        print "<th>Nome</th>";
        print "<th>Cor</th>";
        print "<th>Ano</th>";
        print "<th>Tipo</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>{$row->id_modelo}</td>";
            print "<td>{$row->nome_marca}</td>";
            print "<td>{$row->nome_modelo}</td>";
            print "<td>{$row->cor_modelo}</td>";
            print "<td>{$row->ano_modelo}</td>";
            print "<td>{$row->tipo_modelo}</td>";
            print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-modelo&id_modelo={$row->id_modelo}';\">Editar</button>
                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja Excluir esse modelo?')){location.href='?page=salvar-modelo&acao=excluir&id_modelo={$row->id_modelo}';}else{false}\">Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table> <br><br><br>";
        
    }else{
        print "Não foi possivel listar nenhum modelo!<br><br><br>";
    }
?>
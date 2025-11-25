<h1>Listar Vendas</h1>

<?php 
    $sql = "SELECT * FROM venda AS ve
     INNER JOIN modelo AS mo ON ve.modelo_id_modelo = mo.id_modelo
     INNER JOIN cliente AS cl ON ve.cliente_id_cliente = cl.id_cliente
     INNER JOIN funcionario AS fu ON ve.funcionario_id_funcionario = fu.id_funcionario";

    $res = $conn->query($sql);
    $Amount_Rows = $res->num_rows;

    if ($Amount_Rows > 0){
        print "<p>Encontrou <strong>$Amount_Rows</strong> vendas cadastradas!</p>";
        print "<table class='table table-hover table-striped table-bordered Dark border border-3 border'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Modelo do carro</th>";
        print "<th>Funcionário</th>";
        print "<th>Cliente</th>";
        print "<th>Data Venda</th>";
        print "<th>Valor Venda</th>";
        print "<th>ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>{$row->id_venda}</td>";
            print "<td>{$row->nome_modelo}</td>";
            print "<td>{$row->nome_funcionario}</td>";
            print "<td>{$row->nome_cliente}</td>";
            print "<td>{$row->data_venda}</td>";
            print "<td>{$row->valor_venda}</td>";
            print "<td>
                <button class='btn btn-success' onclick=\"location.href='?page=editar-venda&id_venda={$row->id_venda}';\">Editar</button>
                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja Excluir esse modelo?')){location.href='?page=salvar-venda&acao=excluir&id_venda={$row->id_venda}';}else{false}\">Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table> <br><br><br>";
        
    }else{
        print "Não foi possivel listar nenhum modelo!<br><br><br>";
    }
?>
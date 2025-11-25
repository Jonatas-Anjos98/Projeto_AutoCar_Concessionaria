<?php 
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $data = $_POST['data_venda'];
            $valor = $_POST['valor_venda'];
            $modelo = $_POST['modelo_id_modelo'];
            $funcionario = $_POST['funcionario_id_funcionario'];
            $cliente = $_POST['cliente_id_cliente'];

            $sql = "INSERT INTO venda (data_venda, valor_venda, modelo_id_modelo, funcionario_id_funcionario, cliente_id_cliente) VALUES ('{$data}', '{$valor}', '{$modelo}', '{$funcionario}', {$cliente})"; 

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Essa venda foi cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar essa venda!')</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }

            break;
        case 'editar':
            $data = $_POST['data_venda'];
            $valor = $_POST['valor_venda'];
            $modelo = $_POST['modelo_id_modelo'];
            $funcionario = $_POST['funcionario_id_funcionario'];
            $cliente = $_POST['cliente_id_cliente'];

            $sql = "UPDATE venda SET data_venda='{$data}', valor_venda='{$valor}', modelo_id_modelo='{$modelo}', funcionario_id_funcionario='{$funcionario}', cliente_id_cliente='{$cliente}' WHERE id_venda=" . $_REQUEST['id_venda'];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Essa venda foi atualizada com sucesso!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }else{
                print "<script>alert('Essa venda não foi atualizada!');</script>";
                print "<script>location.href='?page=listar-venda';</script>";
            }
            break;
        case 'excluir':
            break;
    }
?>
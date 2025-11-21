<?php 
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_cliente'];
            $telefone = $_POST['telefone_cliente'];
            $cpf = $_POST['cpf_cliente'];
            $email = $_POST['email_cliente'];
            $endereco = $_POST['endereco_cliente'];
            $data = $_POST['dt_nasc_cliente'];

            $sql = "INSERT INTO cliente (nome_cliente, telefone_cliente, cpf_cliente, email_cliente, endereco_cliente, dt_nasc_cliente) VALUES ( '{$nome}', '{$telefone}', '{$cpf}', '{$email}', '{$endereco}', '{$data}' )";

            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Cadastro realizado com sucesso!')</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }else {
                print "<script>alert('Não foi possível realizar o cadastro!')</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }

            break;
        case 'editar':
            $nome = $_POST['nome_cliente'];
            $telefone = $_POST['telefone_cliente'];
            $cpf = $_POST['cpf_cliente'];
            $email = $_POST['email_cliente'];
            $endereco = $_POST['endereco_cliente'];
            $data = $_POST['dt_nasc_cliente'];
            
            $sql = "UPDATE cliente SET nome_cliente='{$nome}', telefone_cliente='{$telefone}', cpf_cliente='{$cpf}', email_cliente='{$email}', endereco_cliente='{$endereco}', dt_nasc_cliente='{$data}' WHERE id_cliente=" . $_REQUEST['id_cliente'];

            $res = $conn->query($sql);

            if($res == true) {
                print "<script>alert('Informações salvas com sucesso!');</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }else {
                print "<script>alert('Não foi possivel editar as alterações!');</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }

            break;
        case 'excluir':
            $sql = "DELETE FROM cliente WHERE id_cliente=" . $_REQUEST['id_cliente'];

            $res = $conn->query($sql);
            if($res == true){
                print "<script>alert('Você excluiu esse cliente com sucesso!')</script>";
                print "<script>location.href='?page=listar-cliente';</script>";

            }else{
                print "<script>alert('Não foi possivel exluir esse cliente')</script>";
                print "<script>location.href='?page=listar-cliente';</script>";
            }
            break;
    }
?>
<?php 
    switch($_REQUEST['acao']){  
        case 'cadastrar':
            $nome = $_POST['nome_marca'];

            $sql = "INSERT INTO marca ( nome_marca ) VALUES ( '{$nome}')";

            $res = $conn->query($sql);

            if ($res == true){
                print "<script>alert('Marca foi salva com sucesso!');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }else {
                print "<script>alert('Não foi possível salvar a marca!');</script>";
                print "<script>location.href='?page=listar-marca';</script>";
            }
            break;

        case 'editar':

            break;

        case 'excluir': 
            break;
    }
?>
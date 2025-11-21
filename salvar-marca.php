<?php 
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_marca'];

            $sql = "INSERT INTO marca (nome_marca) VALUES ('{$nome})";

            $res = 

            break;

        case 'editar': 
            break;

        case 'excluir': 
            break;
    }
?>
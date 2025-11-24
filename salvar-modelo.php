<?php 
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST['nome_modelo'];
            $cor = $_POST['cor_modelo'];
            $ano = $_POST['ano_modelo'];
            $tipo = $_POST['tipo_modelo'];
            $marca = $_POST['marca_id_marca'];

            $sql = "INSERT INTO modelo (nome_modelo, cor_modelo, ano_modelo, tipo_modelo, marca_id_marca) VALUES ('{$nome}', '{$cor}', '{$ano}', '{$tipo}', {$marca})";

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Essa modelo foi cadastrado!')</script>";
                print "<script>location.href='?page=listar-modelo';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar esse modelo!')</script>";
                print "<script>location.href='?page=listar-modelo'</script>";
            }

            break;
        case 'editar':
            $nome = $_POST['nome_modelo'];
            $cor = $_POST['cor_modelo'];
            $ano = $_POST['ano_modelo'];
            $tipo = $_POST['tipo_modelo'];
            $marca = $_POST['marca_id_marca'];



            break;
        case 'excluir':
            break;
    }
?>
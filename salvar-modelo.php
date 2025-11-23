<?php 
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_modelo'];
            $cor = $_POST['cor_modelo'];
            $ano = $_POST['ano_modelo'];
            $tipo = $_POST['tipo_modelo'];
            $marca = $_POST['marca_id_marca'];

            $sql = "INSERT INTO modelo (nome_modelo, cor_modelo, ano_modelo, tipo_modelo, marca_id_modelo) VALUES ('{$nome}', '{$cor}', '{$ano}', '{$tipo}', {$Marca})";

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Essa modelo foi cadastrada!')</script>";
                print "<script>location.href</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar esse modelo!')</script>";
                print "<script></script>";
            }

            break;
        case 'editar':
            break;
        case 'excluir':
            break;
    }
?>
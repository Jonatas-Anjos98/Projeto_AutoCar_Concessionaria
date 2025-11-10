<h1>Editar Funcionário</h1>

<?php 
    $sql = "SELECT * FROM funcionario WHERE id_funcionario=" . $_REQUEST['id_funcionario'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
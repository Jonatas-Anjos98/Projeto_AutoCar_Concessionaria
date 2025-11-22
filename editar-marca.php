<h1>Editar Marca</h1>

<?php 
    $sql = "SELECT * FROM marca WHERE id_marca=" . $_REQUEST['id_marca'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action='?page=salvar-marca' method="POST">
    <input type="hidden" name='acao' value="editar">
    <input type="hidden" name="id_marca" value="<?php print $row->id_marca; ?>">

    <div class="mb-3">
        <label for="exampleFormControlInput1"></label>
        <input type="text" name="nome_marca" class='form-control border-success' id="exampleFormControlInput1" value='<?php print $row->nome_marca; ?>' required>
    </div>
    <div>
        <button type='submit' class='btn btn-primary'>Enviar</button>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
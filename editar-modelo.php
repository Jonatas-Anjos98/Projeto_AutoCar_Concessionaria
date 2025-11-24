<h1>Editar Modelo</h1>
<?php 
    $sql = "SELECT * FROM modelo WHERE id_modelo = " . $_REQUEST['id_modelo'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php print $row->id_modelo; ?>">
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Marca:</label>
        <select name="marca_id_marca" class="form-control border-success" required>
            <option>-+Escolha+-</option>
            <?php 
                $sql_01 = "SELECT * FROM marca";
                $res_01 = $conn->query($sql_01);
                $Quant_01 = $res_01->num_rows;

                if($Quant_01 > 0){
                    while ($row_01 = $res_01->fetch_object()){
                        if($row->marca_id_marca == $row_01->id_marca){
                            print "<option value='{$row_01->id_marca}' selected>{$row_01->nome_marca}</option>";
                        }else{
                            print "<option value='{$row_01->id_marca}'>{$row_01->nome_marca}</option>";
                        }  
                    }
                }else{
                    print "<opition>Não a marcas cadastradas!</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input class="form-control border-success" type="text" name="nome_modelo" id="exampleFormControlInput1" value="<?php print $row->nome_modelo; ?>" >
    </div>

    <div class="mb-3">
        <label for="cor_modelo" class="form-label">Cor do modelo:</label>
        <input class="form-control border-success" type="text" name="cor_modelo" value="<?php print $row->cor_modelo; ?>">
    </div>

    <div class="mb-3">
        <label for="ano_modelo" class="form-label">Ano do modelo:</label>
        <input class="form-control border-success" type="number" name="ano_modelo" value="<?php print $row->ano_modelo; ?>">
    </div>

    <div class="mb-3">
        <label for="tipo_modelo" class="form-label">Tipo do modelo:</label>
        <input class="form-control border-success" type="text" name="tipo_modelo" value="<?php print $row->tipo_modelo; ?>">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div><br><br><br>

</form>
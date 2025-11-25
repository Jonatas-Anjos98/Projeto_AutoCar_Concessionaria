<h1>Editar Venda</h1>

<?php 
    $sql = "SELECT * FROM `venda` WHERE id_venda =" . $_REQUEST['id_venda'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action='?page=salvar-venda' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda; ?>">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Modelo do carro:</label>
        <select name="modelo_id_modelo" class="form-control border-success" required>
            <option>Escolha o modelo</option>
            <?php 
                $sql_01 = "SELECT * FROM modelo";
                $res_01 = $conn->query($sql_01);
                $Quant_01 = $res_01->num_rows;

                if($Quant_01 > 0){
                    while ($row_01 = $res_01->fetch_object()){
                        if($row->modelo_id_modelo == $row_01->id_modelo){
                            print "<option value='{$row_01->id_modelo}' selected>{$row_01->nome_modelo}</option>";
                        }else{
                            print "<option value='{$row_01->id_modelo}'>{$row_01->nome_modelo}</option>";
                        }  
                    }
                }else{
                    print "<opition>Não a modelos cadastradas!</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">funcionário:</label>
        <select name="funcionario_id_funcionario" class="form-control border-success" required>
            <option>Escolha o funcionário</option>
            <?php 
                $sql_02 = "SELECT * FROM funcionario";
                $res_02 = $conn->query($sql_02);
                $Quant_02 = $res_02->num_rows;

                if($Quant_02 > 0){
                    while ($row_02 = $res_02->fetch_object()){
                        if($row->funcionario_id_funcionario == $row_02->id_funcionario){
                            print "<option value='{$row_02->id_funcionario}' selected>{$row_02->nome_funcionario}</option>";
                        }else{
                            print "<option value='{$row_02->id_funcionario}'>{$row_02->nome_funcionario}</option>";
                        }  
                    }
                }else{
                    print "<opition>Não a funcionarios cadastradas!</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cliente:</label>
        <select name="cliente_id_cliente" class="form-control border-success" required>
            <option>Escolha o cliente</option>
            <?php 
                $sql_03 = "SELECT * FROM cliente";
                $res_03 = $conn->query($sql_03);
                $Quant_03 = $res_03->num_rows;

                if($Quant_03 > 0){
                    while ($row_03 = $res_03->fetch_object()){
                        if($row->cliente_id_cliente == $row_03->id_cliente){
                            print "<option value='{$row_03->id_cliente}' selected>{$row_03->nome_cliente}</option>";
                        }else{
                            print "<option value='{$row_03->id_cliente}'>{$row_03->nome_cliente}</option>";
                        }  
                    }
                }else{
                    print "<opition>Não a clientes cadastradas!</option>";
                }
            ?>
        </select>
    </div>

    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Data da venda:</label>
        <input type='date' name='data_venda'  class='form-control border-success' value="<?php print $row->data_venda; ?>" id="exampleFormControlInput1">
    </div>

    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Valor da venda:</label>
        <input type='number' name='valor_venda' class='form-control border-success' value="<?php print $row->valor_venda; ?>">
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Enviar</button>
    </div><br><br><br>
</form>
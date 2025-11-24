<h1>Cadastrar Venda</h1>

<form action='?page=salvar-venda' method='POST'>
    <input type="hidden" name='acao' value='cadastrar'>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Modelo do carro:</label>
        <select name="marca_id_marca" class="form-control border-success" required>
            <option>Escolha o modelo</option>
            <?php 
                $sql = "SELECT * FROM modelo";
                $res = $conn->query($sql);
                $Quant = $res->num_rows;

                if($Quant > 0){
                    while ($row = $res->fetch_object()){
                        print "<option value='{$row->id_modelo}'>{$row->nome_modelo}</option>";
                    }
                }else{
                    print "<opition>Não a marcas cadastradas!</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">funcionário:</label>
        <select name="marca_id_marca" class="form-control border-success" required>
            <option>Escolha o funcionário</option>
            <?php 
                $sql = "SELECT * FROM funcionario";
                $res = $conn->query($sql);
                $Quant = $res->num_rows;

                if($Quant > 0){
                    while ($row = $res->fetch_object()){
                        print "<option value='{$row->id_funcionario}'>{$row->nome_funcionario}</option>";
                    }
                }else{
                    print "<opition>Não a marcas cadastradas!</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cliente:</label>
        <select name="marca_id_marca" class="form-control border-success" required>
            <option>Escolha o cliente</option>
            <?php 
                $sql = "SELECT * FROM cliente";
                $res = $conn->query($sql);
                $Quant = $res->num_rows;

                if($Quant > 0){
                    while ($row = $res->fetch_object()){
                        print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>";
                    }
                }else{
                    print "<opition>Não a marcas cadastradas!</option>";
                }
            ?>
        </select>
    </div>

    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Data da venda:</label>
        <input type='date' name='date_venda'  class='form-control border-success' id="exampleFormControlInput1">
    </div>

    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
        <input type='email' name='email_venda' class='form-control border-success' placeholder='Digite seu email'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Enviar</button>
    </div><br><br><br>
</form>
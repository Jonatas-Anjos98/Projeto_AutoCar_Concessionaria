<h1>Cadastrar Modelo</h1>

<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Marca:</label>
        <select name="marca_id_marca" class="form-control border-success" required>
            <option>-+Escolha+-</option>
            <?php 
                $sql = "SELECT * FROM marca";
                $res = $conn->query($sql);
                $Quant = $res->num_rows;

                if($Quant > 0){
                    while ($row = $res->fetch_object()){
                        print "<option value='{$row->id_marca}'>{$row->nome_marca}</option>";
                    }
                }else{
                    print "<opition>Não a marcas cadastradas!</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input class="form-control border-success" type="text" name="nome_modelo" id="exampleFormControlInput1" placeholder="Digite o nome do seu modelo" >
    </div>

    <div class="mb-3">
        <label for="cor_modelo" class="form-label">Cor do modelo:</label>
        <input class="form-control border-success" type="text" name="cor_modelo"placeholder="Digite a cor do modelo">
    </div>

    <div class="mb-3">
        <label for="ano_modelo" class="form-label">Ano do modelo:</label>
        <input class="form-control border-success" type="number" name="ano_modelo" placeholder="Digite o ano do modelo">
    </div>

    <div class="mb-3">
        <label for="tipo_modelo" class="form-label">Tipo do modelo:</label>
        <input class="form-control border-success" type="text" name="tipo_modelo" placeholder="Digite o tipo do modelo">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div><br><br><br>

</form>
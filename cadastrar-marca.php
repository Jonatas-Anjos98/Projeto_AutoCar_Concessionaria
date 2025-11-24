<h1>Cadastrar Marca</h1>

<form action='?page=salvar-marca' method="POST">
    <input type="hidden" name='acao' value="cadastrar">

    <div class="mb-3">
        <label for="exampleFormControlInput1">Nome:</label>
        <input type="text" name="nome_marca" class='form-control border-success' id="exampleFormControlInput1" placeholder="Digite o nome da marca" required>
    </div>
    <div>
        <button type='submit' class='btn btn-primary'>Enviar</button>
    </div><br><br><br><br><br><br><br><br><br>
</form>
<h1>Cadastrar Funcionário</h1>

<form action='?page=salvar-funcionario' method='POST'>
    <input type="hidden" name='acao' value='cadastrar'>

    
    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
        <input type='text' name='nome_funcionario'  class='form-control border-success' id="exampleFormControlInput1" placeholder='Digite seu nome'>
    </div>

    <div class='mb-3'>
        <label>E-mail:</label>
        <input type='email' name='email_funcionario' class='form-control border-success' placeholder='Digite seu email'>
    </div>

    <div class='mb-3'>
        <label>Telefone:</label>
        <input type='text' name='telefone_funcionario' class='form-control border-success' placeholder='Digite sua senha'>
    </div>

    <div>
        <button type='submit' class='btn btn-primary'>Enviar</button>
    </div>
</form>
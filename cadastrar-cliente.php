<h1>Cadastrar Cliente</h1>

<form action='?page=salvar-cliente' method='POST'>
    <input type="hidden" name='acao' value='cadastrar'>

    
    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
        <input type='text' name='nome_cliente'  class='form-control border-success' id="exampleFormControlInput1" placeholder='Digite seu nome' required>
    </div>
    
    <div class='mb-3'>
        <label>Telefone:</label>
        <input type='text' name='telefone_cliente' class='form-control border-success' placeholder='Digite sua telefone' required>
    </div>
    
    <div class='mb-3'>
        <label>CPF:</label>
        <input type='text' name='cpf_cliente' class='form-control border-success' placeholder='Digite seu cpf' required>
    </div>

    <div class='mb-3'>
        <label>E-mail:</label>
        <input type='email' name='email_cliente' class='form-control border-success' placeholder='Digite seu email'>
    </div>
    
    <div class='mb-3'>
        <label>Endereço:</label>
        <input type='text' name='endereco_cliente' class='form-control border-success' placeholder='Digite seu endereço'>
    </div>
    
    <div class='mb-3'>
        <label>Data Nascimento:</label>
        <input type='date' name='dt_nasc_cliente' class='form-control border-success' placeholder='Digite sua data de nascimento'>
    </div>


    <div>
        <button type='submit' class='btn btn-primary'>Enviar</button>
    </div>
</form>
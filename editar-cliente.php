<h1>Editar Cliente</h1>

<?php 
    $sql = "SELECT * FROM cliente WHERE id_cliente=" . $_REQUEST['id_cliente'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action='?page=salvar-cliente' method='POST'>
    <input type="hidden" name='acao' value='editar'>
    <input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">

    <div class='mb-3'>
        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
        <input type='text' name='nome_cliente'  class='form-control border-success' id="exampleFormControlInput1" value='<?php print $row->nome_cliente; ?>' required>
    </div>
    
    <div class='mb-3'>
        <label>Telefone:</label>
        <input type='text' name='telefone_cliente' class='form-control border-success' value='<?php print $row->telefone_cliente; ?>' required>
    </div>
    
    <div class='mb-3'>
        <label>CPF:</label>
        <input type='text' name='cpf_cliente' class='form-control border-success' value='<?php print $row->cpf_cliente; ?>' required>
    </div>

    <div class='mb-3'>
        <label>E-mail:</label>
        <input type='email' name='email_cliente' class='form-control border-success' value='<?php print $row->email_cliente; ?>' >
    </div>
    
    <div class='mb-3'>
        <label>Endereço:</label>
        <input type='text' name='endereco_cliente' class='form-control border-success' value='<?php print $row->endereco_cliente; ?>'>
    </div>
    
    <div class='mb-3'>
        <label>Data Nascimento:</label>
        <input type='date' name='dt_nasc_cliente' class='form-control border-success' value='<?php print $row->dt_nasc_cliente; ?>'>
    </div>


    <div>
        <button type='submit' class='btn btn-primary'>Enviar</button>
    </div>
</form>
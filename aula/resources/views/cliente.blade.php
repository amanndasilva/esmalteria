<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>

<section>
<div class="Content">
    <div class="box">
        <form action="/cliente" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txnomeCliente" id="nome" class="inputUser" >
                    <label class="labelInput">Nome Cliente</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txEmail" id="nome" class="inputUser" >
                    <label class="labelInput">E-mail</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txTelefone" id="nome" class="inputUser" >
                    <label class="labelInput">Telefone</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txEndereco" id="nome" class="inputUser" >
                    <label class="labelInput">Endereço</label>
                </div>
                <br>
                <br>

                <button onclick id="submit">Salvar</button>

            </fieldset>
        </form>
    </div>
</div>
</section>


    @foreach ($cliente as $l)
        <p> {{$l->id_cliente}}; </p>
        <p> {{$l->nomeCliente}}; </p>
        <p> {{$l->emailCliente}}; </p>
        <p> {{$l->telefoneCliente}}; </p>
        <p> {{$l->endereco}}; </p>
    @endforeach
    
</body>
</html>
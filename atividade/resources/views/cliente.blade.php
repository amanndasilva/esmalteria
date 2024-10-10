<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="css/cliente.css">
</head>
<body>

<div class="navbar">
        <a href="#produto">Produto</a>
        <a href="#cliente">Cliente</a>
        <a href="#categoria">Categoria</a>
        <a href="#fornecedor">Fornecedor</a>
    </div>
    
<section>
<div class="Content">
    <div class="box">
        <form action="/cliente" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txnomeCliente" id="nome" class="inputUser" required>
                    <label class="labelInput">Nome Cliente</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txEmail" id="email" class="inputUser" required >
                    <label class="labelInput">E-mail</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txTelefone" id="telefone" class="inputUser" required>
                    <label class="labelInput">Telefone</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txEndereco" id="endereco" class="inputUser" required>
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

    <div class="foreach" >
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $l)
            <tr>
                <td>{{ $l->id_cliente }}</td>
                <td>{{ $l->nomeCliente }}</td>
                <td>{{ $l->emailCliente }}</td>
                <td>{{ $l->telefoneCliente }}</td>
                <td>{{ $l->endereco }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>  
    
</body>
</html>
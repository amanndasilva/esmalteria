<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedor</title>
    <link rel="stylesheet" href="css/fornecedor.css">
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
        <form action="/fornecedor" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Fornecedor</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txFornecedor" id="nome" class="inputUser" required >
                    <label class="labelInput">Nome Fornecedor</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txCnpj" id="cnpj" class="inputUser" required> 
                    <label class="labelInput">CNPJ</label>
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
            <th>Nome Fornecedor</th>
            <th> CNPJ </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fornecedor as $f)
            <tr>
                <td>{{ $f->id_fornecedor }}</td>
                <td>{{ $f->nomeFornecedor }}</td>
                <td>{{ $f->cnpj }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
    
</html>


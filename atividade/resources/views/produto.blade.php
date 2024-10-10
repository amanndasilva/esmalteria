<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link rel="stylesheet" href="css/produto.css">
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
        <form action="/produto" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Produto</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txIdCategoria" id="nome" class="inputUser" required>
                    <label class="labelInput">Número da Categoria (1, 2, 3, 4)</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txIdFornecedor" id="nome" class="inputUser" required>
                    <label class="labelInput"> Número do Fornecedor (1, 2, 3, 4)</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txProduto" id="nome" class="inputUser" required>
                    <label class="labelInput">Nome Esmalte</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txQuantidade" id="nome" class="inputUser" required>
                    <label class="labelInput">Quantidade</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txPreco" id="nome" class="inputUser" required>
                    <label class="labelInput">Preço</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txData" id="nome" class="inputUser" required>
                    <label class="labelInput">Data de Cadastro</label>
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
            <th>ID Produto</th>
            <th>ID Categoria</th>
            <th>ID Fornecedor</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Data Cadastro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produto as $p)
            <tr>
                <td>{{ $p->id_produto }}</td>
                <td>{{ $p->id_categoria ?? 'N/A'}}</td>
                <td>{{ $p->id_fornecedor ?? 'N/A' }}</td>
                <td>{{ $p->produto }}</td>
                <td>{{ $p->quantidade }}</td>
                <td>{{ $p->preco }}</td>
                <td>{{ $p->dataCadastro }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>  
    
</body>
</html>





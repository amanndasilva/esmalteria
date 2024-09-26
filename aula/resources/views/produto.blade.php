<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
</head>
<body>
    
<section>
<div class="Content">
    <div class="box">
        <form action="/produto" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Produto</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txIdCategoria" id="nome" class="inputUser" >
                    <label class="labelInput">Número da Categoria (1, 2, 3, 4)</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txIdFornecedor" id="nome" class="inputUser" >
                    <label class="labelInput"> Número do Fornecedor (1, 2, 3, 4)</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txProduto" id="nome" class="inputUser" >
                    <label class="labelInput">Nome Esmalte</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txQuantidade" id="nome" class="inputUser" >
                    <label class="labelInput">Quantidade</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txPreco" id="nome" class="inputUser" >
                    <label class="labelInput">Preço</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txData" id="nome" class="inputUser" >
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

    @foreach ($produto as $p)
        <p> {{$p->id_produto}}; </p>
        <p> {{$p->id_categoria ?? 'N/A'}}; </p>
        <p> {{$p->id_fornecedor ?? 'N/A'}}; </p>
        <p> {{$p->produto}}; </p>
        <p> {{$p->quantidade}}; </p>
        <p> {{$p->preco}}; </p>
        <p> {{$p->dataCadastro}}; </p>
    @endforeach
    
</body>
</html>





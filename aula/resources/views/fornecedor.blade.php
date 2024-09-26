<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedor</title>
</head>
<body>

<section>
<div class="Content">
    <div class="box">
        <form action="/fornecedor" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Fornecedor</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txFornecedor" id="nome" class="inputUser" >
                    <label class="labelInput">Nome Fornecedor</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txCnpj" id="nome" class="inputUser" >
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
    
    @foreach ($fornecedor as $f)
        <p> {{$f->id_fornecedor}}; </p>
        <p> {{$f->nomeFornecedor}}; </p>
        <p> {{$f->cnpj}}; </p>
    @endforeach
    
</html>


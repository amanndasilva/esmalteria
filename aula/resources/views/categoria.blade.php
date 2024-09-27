<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section>
<div class="Content">
    <div class="box">
        <form action="/categoria" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Categoria</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txCategoria" id="nome" class="inputUser" >
                    <label class="labelInput">Nome Categoria</label>
                </div>
                <br>
                <br>

                <button onclick id="submit">Salvar</button>

                <img src="img/trem.jpg" alt="trem">

            </fieldset>
        </form>
    </div>
</div>
</section>

    @foreach ($categoria as $c)
        <p> {{$c->id_categoria}}; </p>
        <p> {{$c->categoria ?? 'N/A'}}; </p>
    @endforeach
    
</body>
</html>



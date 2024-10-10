<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Esmalteria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fornecedor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categoria</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    
<section>
<div class="Content">
    <div class="box">
        <form action="/categoria" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Categoria</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txCategoria" id="nome" class="inputUser" required>
                    <label class="labelInput">Nome Categoria</label>
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
    <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categoria as $c)
            <tr>
                <td>{{ $c->id_categoria }}</td>
                <td>{{ $c->categoria ?? 'N/A' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>  
 
</body>
</html>



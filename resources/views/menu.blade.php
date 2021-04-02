<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h4>Cabeçalho</h4>
        </div>

        <h1>Menu</h1>

        <a class="btn btn-primary" href="{{ route('carregarCadastro') }}" role="button">Cadastrar usuário</a><br><br>

        <a class="btn btn-primary" href="{{ route('carregarLista') }}" role="button">Lista de cadastros</a><br><br>

        <a class="btn btn-primary" href="{{ route('cadastrarEndereco') }}" role="button">Cadastrar endereço</a><br><br>

        <a class="btn btn-primary" href="{{ route('carregarEnd') }}" role="button">Lista de endereços</a>
    

        <div class="row mt-2">
            <hr>
            <p class="text-center">
                Todos os direitos reservados - Igor Leonardo Soares Bezerra - 2021
            </p>
        </div>
</body>
</html>
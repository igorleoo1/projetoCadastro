<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <h3>Cabeçalho</h3>
        </div>
        
        <h1>Cadastro</h1>

        <form method="POST" action="{{ route('form') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeImput" name="nome">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="dataImput" name="data_nascimento">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senhaImput" name="senha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Matrícula</label>
                <input type="Number" class="form-control" id="matriculaImput" name="matricula">
            </div>
            <div class="mb-3 form-check">

                <label class="form-check-label" for="exampleCheck1"></label>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>


        <div class="row mt-2">
            <hr>
            <p class="text-center">
                Todos os direitos reservados - Igor Leonardo Soares Bezerra - 2021
            </p>
        </div>
</body>

</html>

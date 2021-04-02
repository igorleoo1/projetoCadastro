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
        <center><h2>Endereço cadastrado com sucesso!</h2><br>
        <h4>CEP: {{$endereco->cep}} <br><br>
        Logradouro: {{$endereco->logradouro}} <br><br>
        Número: {{$endereco->numero}} <br><br>
        Complemento: {{$endereco->complemento}} <br><br>
        Bairro: {{$endereco->bairro}} <br><br>
        Cidade: {{$endereco->cidade}} <br><br>
        Estado: {{$endereco->estado}}
        </h4>
        </center>
    </div>
</body>
</html>
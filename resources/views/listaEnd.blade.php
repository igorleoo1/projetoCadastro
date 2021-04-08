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
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th> 
                <th scope="col">Usuário</th>
                <th scope="col">CEP</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Número</th>
                <th scope="col">Complemento</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($enderecos as $endereco)
                <tr>
                    <th scope="row">{{$endereco->id}}</th>
                    <th scope="row">{{$endereco->usuario->nome}}</th>
                    <td>{{$endereco->cep}}</td>
                    <td>{{$endereco->logradouro}}</td>
                    <td>{{$endereco->numero}}</td>
                    <td>{{$endereco->complemento}}</td>
                    <td>{{$endereco->bairro}}</td>
                    <td>{{$endereco->cidade}}</td>
                    <td>{{$endereco->estado}}</td>
                    <td> <a href="{{ route('editarEnd', $endereco->id) }}">Editar</a>
                      <td> <a href="{{ route('excluirEnd', $endereco->id) }}">Excluir</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>
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
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Senha</th>
                <th scope="col">Matricula</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td>{{$usuario->nome}}</td>
                    <td>{{$usuario->data_nascimento}}</td>
                    <td>{{$usuario->senha}}</td>
                    <td>{{$usuario->matricula}}</td>
                    <td> <a href="{{ route('editarUser', $usuario->id) }}">Editar</a>
                      <td> <a href="{{ route('excluirUser', $usuario->id) }}">Excluir</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>
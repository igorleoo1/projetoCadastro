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
        
        <h1>Editar endereço</h1>

        <form method="POST" action="{{ route('salvarEnd') }}">
            @csrf
            <input type="hidden" name=id value="{{$endereco->id}}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CEP</label>
                <input type="string" class="form-control" id="nomeImput" name="cep" value='{{$endereco->cep}}'>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                <input type="string" class="form-control" id="dataImput" name="logradouro" value='{{$endereco->logradouro}}'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Número</label>
                <input type="number" class="form-control" id="senhaImput" name="numero" value='{{$endereco->numero}}'>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Complemento</label>
                <input type="string" class="form-control" id="matriculaImput" name="complemento" value='{{$endereco->complemento}}'>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bairro</label>
                <input type="string" class="form-control" id="matriculaImput" name="bairro" value='{{$endereco->bairro}}'>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cidade</label>
                <input type="string" class="form-control" id="matriculaImput" name="cidade" value='{{$endereco->cidade}}'>
            </div>
            <label for="uf">Estado</label>
                <select id="estado" name="estado">
                    {{-- <option value="">-- Selecione --</option> --}}
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Rorâima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
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
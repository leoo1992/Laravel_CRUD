<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
       <h1>Produtos</h1>
       <a href="/produto/create" class="btn btn-primary">Cadastrar Produto</a>

       <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Vl. do Produto</th>
                <th>Ação</th>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->quantidade}}</td>
                    <td>{{$produto->vl_produto}}</td>
                    <td>
                        <a href="produto/{{$produto->id}}/edit" class="btn btn-warning">Editar</a>
                        <form method="POST" action="produto/{{$produto->id}}">
                            <input type="hidden" name="_method" value="delete" />
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
       </table>
        
    </body>
</html>
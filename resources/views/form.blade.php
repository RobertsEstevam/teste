<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('debug')}}" method="post">
    @csrf
    <label>Titulo:</label>
    <input type="text" name="title">
    <br>
<br>
    <label>Sub-titulo:</label>
    <input type="text" name="subtitle">
<br>
    <br>
    <label>Conteudo do Artigo:</label>
    <br>

    <textarea name="content" cols="30" rows="10"></textarea>
    <input type="submit" value="Cadastrar Artigo">
</form>
</body>
</html>

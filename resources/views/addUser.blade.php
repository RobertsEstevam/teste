<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>

    body{

    }
</style>
<body>



<h1>FAÇA SEU CADASTRO</h1>

<form action="{{route('user.store')}}"method="post">
  <label for="fname">Nome:</label>
<br>
    <input type="text" id="" name="name" value=""><br>
    @csrf


    <label for="lname">E-mail:</label><br>
    <input type="text" id="" name="email" value=""><br>


    <label for="lname">Senha :</label><br>
    <input type="password" id="" name="password" value=""><br><br>



    <button type="submit" value="Cadastrar-se" class="btn btn-success">Cadastrar-se</button>

</form>

<p></p>

</body>
</html>

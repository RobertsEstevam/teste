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
        background-color: #3490dc;

    }
</style>
<body>




    <form action="{{route('admin.login.do')}}"method="post">

        <br>

        @csrf


        <label for="lname">E-mail:</label><br>
        <input type="text" id="" name="email" value="robert.alves@gmai.com"><br>


        <label for="lname">Senha :</label><br>
        <input type="password" id="" name="password" value="teste123"><br><br>



        <button type="submit" value="Cadastrar-se" class="btn btn-success">Cadastrar-se</button>

    </form>

<p></p>

</body>
</html>

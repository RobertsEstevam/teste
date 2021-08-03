<<html>
<body>

<h2> Edicão de usuarios </h2>

<form action="{{route('user.update',['user'=>$user->id])}}"method="">
    @csrf
    @method('put')

    <label for="fname">Nome:</label><br>
    <input type="text" id="" name="name" value="{{$user->name}}"><br>


    <label for="lname">E-mail:</label><br>
    <input type="text" id="" name="email" value="{{$user->email}}"><br>


    <label for="lname">Senha :</label><br>
    <input type="password" id="" name="password" value=""><br><br>


    <input type="submit" value="Cadastrar-se">


</form>

<p></p>

</body>
</html>

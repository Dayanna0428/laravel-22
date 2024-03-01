<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>¿es primo?</h1>

    <form action="{{route('for.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        Ingrese Numero
        <br>
        <input type="number" name="numero">
    </label>
    <br><br>
    <h1>¿son amigos?</h1>
    <label>
        Ingrese Numero 1
        <br>
        <input type="number" name="numero1">
        <br><br>
        Ingrese Numero 2
        <br>
        <input type="number" name="numero2">
    </label>
    <h1>Ecuacion Cuadratica</h1>
    <label>
        Ingrese Numero 1
        <br>
        <input type="number" name="x">
        <br><br>
        Ingrese Numero 2
        <br>
        <input type="number" name="y">
        <br><br>
        Ingrese Numero 3
        <br>
        <input type="number" name="z">
    </label>

    <br><br><br> 
    <button type="submit">Enviar</button>
    </form>
    
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Formulario</h1>

<form action="{{route('storemall.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nombre  de la tienda:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    description
    <br>
    <input type="text" name="description">
</label>
<label>
    city
    <br>
    <input type="text" name="city">
</label>

<br><br>

<button type="submit">Enviar Formulario:</button>
</form>

</body>
</html>
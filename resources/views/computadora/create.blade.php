<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
 <form action="{{route('computadoras.store')}}" method="post">
  @csrf
  <label for='marca'>marca</label>
  <input type='text' name='marca' id='marca'><br>
  <input type="submit" value="ENVIAR">

 </form>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$subject}}</title>
</head>
<body style="background-color: rgba(0, 149, 168, 0.425);">
  <br>
  <br>
  <h1 style="text-align:center;">{{config("app.name","")}}</h1>
  <div style="max-width: 450px; margin:25px auto 50px auto; background-color:#fff; padding: 15px 20px; border-radius:10px;box-sizing:border-box;">
    <p><strong>Nombres: </strong>{{$name}}</p>
    <p><strong>Correo electronico: </strong>{{$email}}</p>
    <p><strong>Asunto: </strong>{{$subjectclient}}</p>
    <p><strong>Mensaje: </strong></p>
    <p>{{$messageclient}}</p>
  </div>
  <br>
  <br>
</body>
</html>
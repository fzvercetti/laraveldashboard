<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: ;
            padding: 10px;
        }
    </style>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" href="/ganaderos/crear" aria-current="page">Crear registros <span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/ganaderos">Ver registros</a>
              </li>
             
              
          </ul>
          
      </div>
  </nav>
  <!-- navigation bar ends here -->
</head>

<body>
    <a href="/ganaderos">Ver los ganaderos</a>
    <br>

    <h2>Editar ganaderos</h2>
    <div>
        <form action="/ganaderos/editar/{{ $ganadero->id}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre" value="{{ $ganadero->nombre}}">

            <label>Apellido:</label>
            <input type="text" name="apellido" placeholder="Apellido" value="{{ $ganadero->apellido}}">

            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ $ganadero->edad}}">

            <label>Matricula:</label>
            <input type="text" name="matricula" placeholder="Matricula" value="{{ $ganadero->matricula}}">

            <label>Ubicacion:</label>
            <input type="text" name="ubicacion" placeholder="ubicacion" value="{{ $ganadero->ubicacion}}">

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>
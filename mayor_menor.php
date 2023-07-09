<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos1.css">
    <title>Mayor o menor de edad</title>
</head>
<body>
<a href="index.html#section-respuestas">
        <img class="home" src="img/home.jpeg" alt="icono de una casa">
    </a>
    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
    </form>

    <?php

    $edad = 0;
    #const constante_0 = 18;
    const constante = "18";

    
    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >= constante) {
            echo "<h2>Es mayor de edad</h2>";
        }
        # else if (18 > $edad && 0 < $edad)
        else if ($edad < constante && $edad > 0) {
            echo "<h2>Es menor de edad</h2>";
        }else{
            echo "<h2>No valido</h2>";
        }

    }

    ?>

    </div>
</body>
</html>
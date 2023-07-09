<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos1.css">
    <!-- Set title -->
    <title>Edad Exacta</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/home.jpeg" alt="icono de una casa">
    </a>
    
    <div class="main-frame-cal">
        <!-- Form action and method post -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Seleccione su fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1">
            </div>
            <!-- Submit button -->
            <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
        </form>

        <?php

        // no se usaron constantes, se toma en cuenta si la edad actual es menor a 18 y mayor a 0 &&
        
        if (isset($_POST['verificar'])) {
            $fecha = new DateTime($_POST['fecha_nacimiento']);
            $date2 = new DateTime(date("Y-m-d"));
            $fecha_actual = $fecha->diff($date2);
            $edad_actual = $fecha_actual->y;
            $edad_meses = $fecha_actual->m;
            $edad_dias = $fecha_actual->d;

            if ($edad_actual >= 18) {
                echo "<h2>Es mayor de edad, dado que tiene $edad_actual años</h2>";
            } else if ($edad_actual < 18 && $edad_actual > 0) {
                echo "<h2>Es menor de edad, dado que tiene $edad_actual años</h2>";
            } else {
                echo "<h2>No válido</h2>";
            }
            
            echo "Usted tiene $edad_actual años<br> Usted tiene $edad_meses meses <br> Usted tiene $edad_dias dias";
        }
        ?>

    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Orienta a Objectos</title>
</head>
<body>
    <header>

    </header>

    <nav>

    </nav>

    <main> 
        <pre class="resultado">

            <?php
                require_once('model/persona.php');
                $alumno = new Persona('Jose Manuel', 17);

                echo $alumno -> getNombre() ." ";
                echo $alumno -> getEdad();
            ?>

        </pre>
    </main>
</body>
</html>
<?php
// Optengo las credenciales que estan guardadas en variables de entorno en el servidor alojado.
$mysql_user = getenv("mysql_user");
$mysql_pass = getenv("mysql_pass");

// Establezco datos de la base de datos necesarios.
$dbName = "id21963112_art_swing";

// Se crea una conexion con la base de datos
$conn = mysqli_connect("localhost", $mysql_user, $mysql_pass, $dbName);

/*
Se crea la consulta, me se importante.

Los nombres de las columnas para 
saber con exacitud de los datos a renderizar.
*/
$sql = "SELECT `summary`, `location`, `dtstart`, `countryImage` FROM `events`;";

/* 
Revision de la conexion
si hay error mostrar directamente a el cliente
no es lo ideal pero es una solucion temporal
*/
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

// Ejecucion de la consulta
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <title>Aquart Synchro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <?php require 'components/navegation.php' ?>
    <div class="translate-y-20 flex w-full">
        <div class="w-2/3 m-auto">
            <div class="flex w-4/5 flex-wrap p-2.5">
                <?php
                  // Revision y hubo error al hacer la consulta con la misma solucion
                  if (!$result) {
                    echo "Error: " . mysqli_error($conn);
                  } else {
                  // Iterar por el resultado y consutir tarjetas que van a renderizar
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<div class="grid h-full grid-cols-2 rounded-3xl bg-blue-200 my-3">';
                      {
                        echo '<div class="item flex h-full flex-col place-content-center text-end">';
                        {
                          echo '<h1 class="text-xl">' . $row["summary"] . '</h1>';
                          echo '<h1>' . $row["location"] . '</h1>';
                          echo '<p class="">' . $row["dtstart"] . '</p>';
                        }
                        echo '</div>';

                        echo '<div class="flex justify-center items-center">';
                          echo '<img class="w-3/4 object-contain" src="' . $row["countryImage"] . '" />';
                        echo '</div>';
                    }
                      echo "</div>";
                    }
                  }

                  // Cerrando la conexión
                  mysqli_close($conn);
                ?>

            </div>
        </div>
    </div>
    <?php require 'components/footer.php' ?>
</body>

</html>
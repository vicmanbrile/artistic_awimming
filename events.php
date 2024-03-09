<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aquart Synchro</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

  <?php require 'navegation.php' ?>
  <div class="translate-y-20 flex w-full">
    <div class="w-2/3 m-auto">
<?php

$mysql_user = getenv("mysql_user");
$mysql_pass = getenv("mysql_pass");

$dbName = "id21963112_art_swing";
$conn = mysqli_connect("localhost", $mysql_user, $mysql_pass, $dbName);

$sql = "SELECT `summary`, `location`, `dtstart`, `countryImage` FROM `events`;";

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Execute the query
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
  echo "Error: " . mysqli_error($conn);
} else {

  echo "<div>";

  // Fetch data as associative array
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="grid h-full grid-cols-2 rounded-3xl bg-blue-200 my-3">';
    
    {
      echo '<div class="item flex h-full flex-col place-content-center text-end">';
      {
          echo '<h1 class="text-xl">'. $row["summary"] . '</h1>';
          echo '<h1>' . $row["location"] . '</h1>';
          echo '<p class="">' . $row["dtstart"] . '</p>';
      }
      echo '</div>';

      echo '<div class="grid-row-2 grid text-center">';
        echo '<img class="w-full p-8" src="' . $row["countryImage"] . '" />';
      echo '</div>';
    }
    
    echo "</div>";
  }

  echo "</div>";
}

// Close connection
mysqli_close($conn);

?>
</div>
</div>
</body>
</html>
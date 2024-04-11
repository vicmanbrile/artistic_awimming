<?php
// Obtener productos
$productos = [
    [
    "id" => 1,
    "nombre" => "Camiseta",
    "imagen" => "camiseta.jpg",
    "precio" => 20.00,
    ],
    [
        "id" => 2,
        "nombre" => "Zapatos",
        "imagen" => "zapatos.jpg",
        "precio" => 50.00,
    ],
    [
        "id" => 3,
        "nombre" => "Libro",
        "imagen" => "libro.jpg",
        "precio" => 15.00,
    ],
];

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
    <?php session_start() ?>
    <?php require 'components/navegation.php' ?>
    <div class="translate-y-20 min-h-100vh">
        <h1 class="text-2xl font-bold">Tienda</h1>
        <div class="grid grid-cols-3 gap-4">
            <?php foreach ($productos as $producto): ?>
            <div class="card p-4">
                <img src="<?php echo "imaagen"; ?>" alt="<?php echo $producto['nombre']; ?>" class="w-full">
                <h2 class="text-lg font-bold"><?php echo $producto['nombre']; ?></h2>
                <p class="text-gray-500"><?php echo $producto['precio']; ?></p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    onclick="addToCart(<?php echo $producto['id']; ?>)">Agregar al carrito</button>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="sidebar" class="fixed right-0 top-0 w-64 bg-white p-4"></div>
    </div>
    <?php require 'components/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    function addToCart(id) {
        $.ajax({
            url: "add-to-cart.php",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $("#sidebar").html(data);
            }
        });
    }
    </script>
</body>

</html>
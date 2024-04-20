<?php
session_start();

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
$sql = "SELECT  `producto_id`, `nombre_producto`, `descripcion`, `precio`, `image` FROM `productos`;";

/* 
Revision de la conexion
si hay error mostrar directamente a el cliente
no es lo ideal pero es una solucion temporal
*/
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

// Ejecucion de la consulta
$productos = mysqli_query($conn, $sql);


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
    <div class="translate-y-20 min-h-100vh">
        <div class="grid grid-cols-5">
            <div class="col-start-1 col-end-5 grid grid-cols-3 gap-4">
                
            <?php
                    // Revision y hubo error al hacer la consulta con la misma solucion
                    if (!$productos) {
                        echo "Error: " . mysqli_error($conn);
                    } else {
                        foreach ($productos as $producto):
                            echo '
                                <div id="item-'. $producto['producto_id'] .'" class="card max-w-sm overflow-hidden rounded-md p-4 shadow-md flex flex-col items-center">
                                    <img src="'. $producto['image'] .'" class="max-h-60">
                                    <h2 class="text-lg font-bold">' . $producto['nombre_producto'] . '</h2>
                                    <p class="text-gray-500">' . $producto['precio'] . '</p>
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                        onclick="addToCart('. $producto['producto_id'] . ' )">Agregar al carrito</button>
                                </div>';
                        endforeach;
                    }

                    // Cerrando la conexión
                    mysqli_close($conn);
                    ?>
            </div>

            <div id="sidebar" class="col-start-5 w-full bg-white p-9 ">
                <?php
                    // Verify if the cart exists in the session
                    if (!isset($_SESSION['cart'])) {
                        $_SESSION['cart'] = [];
                    } else {
                        foreach ($_SESSION['cart'] as $item):
                            echo '
                                <li class="flex flex-col border border-gray-300 p-2 rounded-md mb-2">
                                    <span class="text-black font-bold mb-1">'. $item['name'] .'</span>
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-500">x'. $item['cantidad'] .'</span>
                                        <span class="text-black font-semibold">$'. $item['cost'] .'</span>
                                    </div>
                                    <span class="text-black font-semibold mt-1">Subtotal: $'. ($item['cost'] * $item['cantidad']) .'</span>
                                </li>';
                        endforeach;

                        $total_cost = 0;
                        foreach ($_SESSION['cart'] as $item) {
                          $total_cost += $item['cost'] * $item['cantidad'];
                        }

                        echo '<div class="text-right mt-4">Total: $' . $total_cost .'</div>';
                    }

                ?>
            </div>
        </div>
    </div>
    <?php require 'components/footer.php' ?>
    <script>
    function addToCart(id) {
        const item = document.getElementById("item-"+id)
        const name = item.querySelectorAll('h2')[0].textContent; // Seleccionar todos los elementos h2 dentro del div
        const cost = item.querySelectorAll('p')[0].textContent;


        var formData = new FormData()
        formData.append('id', id)
        formData.append('name', name)
        formData.append('cost', cost)

        const enviar = {
            method: "POST",
            body: formData,
        }

        console.log(enviar)

        fetch("./add-to-cart.php", enviar)
        .then(response => response.text())
        .then(data => {
            data_object = JSON.parse(data)
            
            renderCarrito(data_object)
        });
    }

    function renderCarrito(productos) {
        const sidebar = document.getElementById("sidebar");
        sidebar.innerHTML = "";

        var total = 0;

        const tarjeta = document.createElement("ul");
        tarjeta.classList.add("mt-4");

        productos.cart_data.forEach((producto) => {
            
            
            const contenedor = document.createElement("li");
            contenedor.classList.add("flex", "flex-col", "border", "border-gray-300", "p-2", "rounded-md", "mb-2");
            
            const nombre = document.createElement("span");
            nombre.classList.add("text-black", "font-bold", "mb-1");
            nombre.textContent = producto.name;
            
            // Cantidad, subtutal
            const cantidad_precio = document.createElement("div")
            cantidad_precio.classList.add("flex", "justify-between", "items-center");
            {
                const cantidad = document.createElement("span");
                cantidad.classList.add("text-gray-500");
                cantidad.textContent = `x${producto.cantidad}`;
                
                const precio = document.createElement("span")
                precio.classList.add("text-gray-500", "font-semibold");
                precio.textContent = `x${producto.cost}`;
                
                cantidad_precio.appendChild(cantidad)
                cantidad_precio.appendChild(precio)
                
            }
            
            const subtotal = producto.cost * producto.cantidad;

            const precioSubtotal = document.createElement("span");
            precioSubtotal.classList.add("text-black", "font-semibold", "mt-1");
            precioSubtotal.textContent = `$${subtotal.toFixed(2)}`; 
            

            contenedor.appendChild(nombre);
            contenedor.appendChild(cantidad_precio);
            contenedor.appendChild(precioSubtotal);

            tarjeta.appendChild(contenedor);

            total += subtotal;

        });

        sidebar.appendChild(tarjeta);

        const tarjeta_total = document.createElement("div");
        tarjeta_total.classList.add("text-right", "mt-4")
        tarjeta_total.textContent = `$${total.toFixed(2)}` 

        tarjeta.appendChild(tarjeta_total)
    
        }

    </script>
</body>

</html>
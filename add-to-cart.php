<?php
session_start();

// Obtener el ID del producto
$id = $_POST['id'];

// Verificar si el carrito existe en la sesión
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }
  
  // Buscar si el producto ya está en el carrito
  $existe = false;
  foreach ($_SESSION['cart'] as &$item) {
    if ($item['id'] === $id) {
      $existe = true;
      $item['cantidad']++; // Incrementar la cantidad
      break;
    }
  }
  
  // Si no existe, agregarlo al carrito
  if (!$existe) {
    $_SESSION['cart'][] = [
      'id' => $id,
      'cantidad' => 1,
    ];
  }
  
  // Codificar el contenido del carrito en JSON
  $cart_data = json_encode($_SESSION['cart']);
  
  // Enviar la información del carrito actualizado
  echo $cart_data;
?>
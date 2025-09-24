<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle del Producto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      margin: 0;
      padding: 20px;
    }

    .product-container {
      display: flex;
      gap: 30px;
      max-width: 1100px;
      margin: auto;
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .product-image {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .product-image img {
      max-width: 100%;
      border-radius: 10px;
    }

    .product-details {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .product-details h1 {
      font-size: 26px;
      margin-bottom: 10px;
      color: #2d3436;
    }

    .product-details p {
      font-size: 16px;
      margin-bottom: 15px;
      color: #555;
    }

    .price {
      font-size: 24px;
      font-weight: bold;
      color: #0984e3;
      margin-bottom: 20px;
    }

    .btn {
      padding: 12px;
      background: #ff9f43;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      width: 200px;
    }

    .btn:hover {
      background: #e17055;
    }
  </style>
</head>
<body>

  <div class="product-container">
    <!-- Imagen del producto -->
    <div class="product-image">
      <img src="https://m.media-amazon.com/images/I/71YmJS4SV2L._AC_SL1500_.jpg" alt="Monitor">
    </div>

    <!-- Detalles del producto -->
    <div class="product-details">
      <h1>Monitor Philips 24" Full HD 100Hz</h1>
      <p>
        Disfruta de una experiencia visual nítida y fluida con este monitor Philips.  
        Pantalla de 24 pulgadas con resolución Full HD y tasa de refresco de 100Hz para una experiencia inmersiva en juegos, trabajo y entretenimiento.
      </p>
      <div class="price">USD $89.99</div>
      <button class="btn">Agregar al carrito</button>
    </div>
  </div>

</body>
</html>

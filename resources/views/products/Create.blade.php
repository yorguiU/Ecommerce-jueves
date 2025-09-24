<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 30px 0;
            color: #2d3436;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
            transition: border 0.2s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="file"]:focus,
        textarea:focus {
            border-color: #0984e3;
            outline: none;
        }

        textarea {
            resize: none;
        }

        .btn-submit {
            display: block;
            width: 100%;
            background: #0984e3;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #74b9ff;
        }
    </style>
</head>
<body>

    <h1>FORMULARIO DE PRODUCTOS</h1>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="description">Description:</label>
        <textarea name="description" cols="30" rows="10"></textarea>

        <label for="price">Price:</label>
        <input type="number" name="price">

        <label for="image">Image:</label>
        <input type="file" name="image">

        <label for="brand">Brand:</label>
        <input type="text" name="brand">

        <button type="submit" class="btn-submit">Guardar Producto</button>
    </form>
    
</body>
</html>

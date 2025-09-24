<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Computadores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            color: #333;
        }

        header {
            background: #2d3436;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .seccion {
            margin: 30px;
        }

        .seccion h2 {
            margin-bottom: 15px;
            font-size: 22px;
        }

        .productos {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card .info {
            padding: 15px;
        }

        .card .info h3 {
            font-size: 16px;
            margin: 0 0 10px;
        }

        .precio {
            font-weight: bold;
            color: #27ae60;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background: #0984e3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background: #74b9ff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tienda de Computadores</h1>
    </header>

    <div class="seccion">
        <h2>Más Populares</h2>
        <div class="productos">
            <div class="card">
                <img src="https://i.dell.com/sites/csimages/App-Merchandizing_Images/all/xps-13-9310-laptop.jpg" alt="Laptop Dell">
                <div class="info">
                    <h3>Laptop Dell XPS 13</h3>
                    <p class="precio">$1200</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>

            <div class="card">
                <img src="https://www.lenovo.com/medias/lenovo-laptops-thinkpad-x1-carbon-gen9-gallery-1.png" alt="Lenovo ThinkPad">
                <div class="info">
                    <h3>Lenovo ThinkPad X1</h3>
                    <p class="precio">$1500</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>

            <div class="card">
                <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp16-spacegray-select-202110?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1632788574000" alt="MacBook Pro">
                <div class="info">
                    <h3>MacBook Pro 16"</h3>
                    <p class="precio">$2400</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>

            <div class="card">
                <img src="https://cdn.mos.cms.futurecdn.net/Fe2yvDqrfjsIDZaLmsuE4Q.jpg" alt="Asus ROG">
                <div class="info">
                    <h3>Asus ROG Gaming</h3>
                    <p class="precio">$1800</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion">
        <h2>Lo más vendido</h2>
        <div class="productos">
            <div class="card">
                <img src="https://i5.walmartimages.com/asr/fd78923c-49d1-46a6-8c92-7d1c8201fe9f.65b33e58b16f7d03bc94eaff1a0c62c4.jpeg" alt="HP Pavilion">
                <div class="info">
                    <h3>HP Pavilion 15</h3>
                    <p class="precio">$950</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71RD3vsjIYL._AC_SL1500_.jpg" alt="Acer Aspire 5">
                <div class="info">
                    <h3>Acer Aspire 5</h3>
                    <p class="precio">$700</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71iEVK8kVgL._AC_SL1500_.jpg" alt="MSI Gaming Laptop">
                <div class="info">
                    <h3>MSI GF65 Gaming</h3>
                    <p class="precio">$1300</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>

            <div class="card">
                <img src="https://cdn.vox-cdn.com/thumbor/Nj7eY4w8IhE7bFvA1TdbTOVyY_I=/0x0:2040x1360/1200x800/filters:focal(857x517:1183x843)/cdn.vox-cdn.com/uploads/chorus_image/image/69392910/akrales_210429_4563_0002.0.jpg" alt="Surface Laptop">
                <div class="info">
                    <h3>Surface Laptop 4</h3>
                    <p class="precio">$1400</p>
                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

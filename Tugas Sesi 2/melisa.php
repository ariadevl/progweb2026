<?php
    $makanan=[
        [
            "nama"=> "Rendang",
            "asal"=> "Sumatra Barat",
            "harga"=> "25.000",
            "deskripsi"=> "Rendang adalah makanan khas Sumatera Barat yang dimasak dengan santan dan rempah-rempah.",
            "gambar"=> "https://www.sandrarecipe.com/wp-content/uploads/2025/03/9.1-27.jpg"
        ],
        [
            "nama" => "Gudeg",
            "asal" => "Yogyakarta",
            "harga" => "Rp 20.000",
            "deskripsi" => "Gudeg merupakan makanan khas Yogyakarta yang terbuat dari nangka muda dan memiliki rasa manis.",
            "gambar" => "https://th.bing.com/th/id/OIP.YrhBzWQBBIqySjb9m6UhkQHaE8?w=267&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
        ],

        [
            "nama" => "Pempek",
            "asal" => "Palembang",
            "harga" => "Rp 15.000",
            "deskripsi" => "Pempek adalah makanan khas Palembang yang terbuat dari ikan dan tepung.",
            "gambar" => "https://th.bing.com/th/id/OIP.w2NsidGlpmzbQE9iBNaMKwHaFS?w=260&h=186&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
        ],

        [
            "nama" => "Sate Ayam",
            "asal" => "Madura",
            "harga" => "Rp 20.000",
            "deskripsi" => "Sate ayam dibuat dari potongan ayam yang dibakar dan disajikan dengan bumbu kacang.",
            "gambar" => "https://th.bing.com/th/id/OIP.WDTeCiTtxCJVO7mpAVpfOQHaE8?w=268&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
        ]

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan Tradisional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #fff5f0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #b86f52;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        header p {
            font-size: 17px;
        }

        .judul {
            text-align: center;
            padding: 40px 20px 30px;
        }

        .judul h2 {
            color: #8f4b35;
            font-size: 30px;
            font-weight: bold;
        }

        .judul p {
            color: #666;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            color: #a9573d;
            font-weight: bold;
        }

        .card-text {
            line-height: 1.6;
        }

        .harga {
            color: #d2691e;
            font-size: 18px;
            font-weight: bold;
        }

        footer {
            background-color: #6d4032;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #b86f52 !important;
            border-color: #b86f52 !important;
            color: white !important;
        }

        .btn-primary:hover {
            background-color: #8f4b35 !important;
            border-color: #8f4b35 !important;
            color: white !important;
        }

    </style>

</head>

<body>
    <div class="container">
        <h1 class="text-center"> Makanan Tradisional</h1>
        <p class="text-center">Makanan Khas Indonesia</p>
        <div class="row">
            <?php
            foreach($makanan as $data){
                echo '<div class="col-4">
                        <div class="card">
                            <img src="'.$data["gambar"].'" class="card-img-top" alt="'.$data["nama"].'">
                            <div class="card-body">
                                <h5 class="card-title">'.$data["nama"].'</h5>
                                <p class="card-text">'.$data["deskripsi"].'</p>
                                <p class="card-text"><strong>Harga: Rp'.$data["harga"].'</strong></p>
                                <a href="#" class="btn btn-primary">Beli Sekarang😉</a>
                            </div>
                        </div>
                </div>';
            }
            ?>

        </div>

    </div>

</body>
</html>
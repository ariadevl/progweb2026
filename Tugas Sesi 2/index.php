<?php
$daftarMinuman = [
    [
        "Nama" => "Es Teh Manis",
        "Harga" => "5000",
        "Deskripsi" => "Teh segar dengan gula, disajikan dingin.",
        "Gambar" => "https://awsimages.detik.net.id/community/media/visual/2024/04/08/es-teh-manis-gerobakan-9.jpeg?w=1200"
    ],
    [
        "Nama" => "Boba",
        "Harga" => "12000",
        "Deskripsi" => "Es Cendol adalah minuman tradisional Indonesia yang memadukan cendol hijau, santan, gula merah, dan es batu, menghasilkan rasa manis gurih yang segar..",
        "Gambar" => "https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2020/08/shutterstock_1276546729.0_1200x900.jpg"
    ],
    [
        "Nama" => "Jus Jeruk",
        "Harga" => "5000",
        "Deskripsi" => "Perasan jeruk segar, kaya vitamin C.",
        "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-G8QyvB96yXmm6A5oCW6gA3LCk8e0m_f9QoEtbkZU4A&s=10"
    ],
    [
        "Nama" => "Kopi Hitam",
        "Harga" => "8000",
        "Deskripsi" => "Kopi robusta tanpa gula, cocok untuk pecinta pahit.",
        "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuruuGgjwGfpgQacy9-eKxnunmg65WI8pTcfbG22wufhIbaCvVUHNUe0E&s=10"
    ],
    [
        "Nama" => "Ice Matcha Latte",
        "Harga" => "10000",
        "Deskripsi" => "Perpaduan teh hijau matcha dengan susu segar dan es batu, menghasilkan rasa creamy yang lembut sekaligus menyegarkan.",
        "Gambar" => "https://instacuppastore.com/cdn/shop/articles/matcha-iced-latte-cover_ed9e7b2c-325b-4d99-bd39-6a53ae346d37.jpg?v=1779711655"
    ],
    [
        "Nama" => "Thai Tea",
        "Harga" => "5000",
        "Deskripsi" => "Teh hitam khas Thailand dengan susu dan es, menghadirkan rasa manis creamy yang segar.",
        "Gambar" => "https://static.promediateknologi.id/crop/0x0:0x0/1200x0/webp/photo/p1/36/2026/09/06/1788689897216-3127350940.png"
    ]

];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #ffc0cb, #800000);
            color: #fff;
        }
        .card {
            border: 2px solid #800000;
            background-color: #ffe4ec;
            color: #800000;
            transition: transform 0.3s;
            margin-top: 30px;
        }
        .card-img-top {
            margin-top: 15px; 
            border-radius: 10px;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(128,0,0,0.6);
        }
        .btn-beli {
            background-color: #800000;
            color: #ffc0cb;
            font-weight: bold;
        }
        .btn-beli:hover {
            background-color: #ffc0cb;
            color: #800000;
        }
        h1 {
            font-size: 3rem; 
            color: #fff;
            text-shadow: 2px 2px #800000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">🍹 Daftar Minuman</h1>
        <p class="text-center">Segarkan harimu dengan pilihan minuman manis, segar, dan penuh rasa!</p>
        <div class="row">
            <?php
            foreach($daftarMinuman as $minuman){
                echo '<div class="col-4">
                        <div class="card">
                            <img src="'.$minuman["Gambar"].'" class="card-img-top" alt="'.$minuman["Nama"].'">
                            <div class="card-body">
                                <h5 class="card-title">'.$minuman["Nama"].'</h5>
                                <p class="card-text">'.$minuman["Deskripsi"].'</p>
                                <p class="card-text"><strong>Harga: Rp'.$minuman["Harga"].'</strong></p>
                                <a href="#" class="btn btn-beli">✨Beli Sekarang✨</a>
                            </div>
                        </div>
                 </div>';
            }
            ?>   
        </div>
    </div>
</body>
</html>

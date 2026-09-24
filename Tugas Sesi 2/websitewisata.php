
<?php

$dataWisata = [
    [
        "Judul" => "Danau Kelimutu",
        "Deskripsi" => "Danau Kelimutu dikenal dengan tiga danau kawah yang memiliki warna berbeda. Keindahan alam dan suasana sejuk membuat tempat ini menjadi salah satu pesona Flores.",
        "Gambar" => "https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/17/15/5f/54.jpg",
        "Link" => "https://www.google.com/search?q=Danau+Kelimutu"
    ],
    [
        "Judul" => "17 Pulau Riung",
        "Deskripsi" => "17 Pulau Riung menawarkan keindahan laut, pulau-pulau kecil, pasir putih, dan suasana tropis yang masih terasa alami.",
        "Gambar" => "https://museumofwander.com/wp-content/uploads/2023/12/DSC07974.jpg",
        "Link" => "https://www.google.com/search?q=17+Pulau+Riung"
    ],
    [
        "Judul" => "Villa Manu Lalu",
        "Deskripsi" => "Villa Manu Lalu menawarkan suasana alam yang tenang dengan pemandangan hijau dan udara yang sejuk, cocok untuk menikmati keindahan alam Flores.",
        "Gambar" => "https://img.cnt.traveloka.com/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10024686-8d86fffdd023bcc854b35fb64d5399e9.jpeg?tr=q-80,c-at_max,w-1280,h-720&_src=imagekit",
        "Link" => "https://www.google.com/search?q=Fila+Manu+Lalu"
    ],
    [
        "Judul" => "Bukit Watunariwowo",
        "Deskripsi" => "Bukit Nariwowo atau Watu Nariwowo merupakan destinasi alam di Bajawa yang menawarkan panorama perbukitan hijau dan pemandangan Gunung Inerie. Keindahan lanskapnya membuat tempat ini dikenal juga sebagai Bukit Avatar.",
        "Gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkSdvzdL_hfPUWOVJs1ImszSRZbxVM6EA6mcDtgYGrElbIFUe7dprDT-T7&s=10",
        "Link" => "https://flores.tribunnews.com/2024/01/24/wisata-flores-bukit-watunariwowo-bukit-avatar-di-bajawa-ngada."
    ],
    [
        "Judul" => "Ogi Waterfall",
        "Deskripsi" => "Air Terjun Ogi terletak di Kelurahan Fobata, Kecamatan Bajawa, Kabupaten Ngada, Flores. Air terjun ini memiliki ketinggian sekitar 30 meter dengan pemandangan yang memanjakan mata dan suasana yang asri. Keindahannya semakin lengkap dengan pepohonan rindang, hamparan sawah hijau milik warga, dan udara segar yang terbebas dari polusi.",
        "Gambar" => "https://scontent.fdps10-1.fna.fbcdn.net/v/t39.30808-6/485593274_984084103908957_8939737294048378224_n.jpg?stp=dst-jpg_tt6&cstp=mx640x800&ctp=s640x640&_nc_cat=105&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=127cfc&_nc_ohc=fHUNhqtt3BoQ7kNvwHLr59R&_nc_oc=AdotkGKVoLVUAW8DHo4dKzC_y2EHRtSD2w4tP9AtqB56l444VsDO9xT62QJjPmjAjcY&_nc_zt=23&_nc_ht=scontent.fdps10-1.fna&_nc_gid=mfLkbzzk4_tnSDaUw2e8Tw&_nc_ss=7a289&oh=00_AQJwGD1g_45rAWwzvPnEtt70POp_j0peX25b_LdLRWArQQ&oe=6AB9B908",
        "Link" => "https://www.tripadvisor.co.id/Attraction_Review-g297730-d13993265-Reviews-Ogi_Waterfall-Bajawa_Flores_East_Nusa_Tenggara.html"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pesona Ngada, Alam yang Bercerita</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<style>
body {
    background: #f4efe6;
    color: #3f382f;
}
h1 {
    color: #2f4a3a;
    font-weight: bold;
}
.intro {
    color: #766b5d;
}
.card {
    border: none;
    border-radius: 18px;
    overflow: hidden;
    background: #fffdf9;
    box-shadow: 0 8px 20px rgba(60,50,40,.12);
    transition: .3s;
}
.card:hover {
    transform: translateY(-7px);
}
.card-img-top {
    height: 220px;
    object-fit: cover;
}
.card-title {
    color: #35543f;
    font-weight: bold;
}
.card-text {
    color: #6f665c;
    line-height: 1.6;
}
.btn-success {
    background: #a66f45;
    border: none;
    border-radius: 20px;
}
.btn-success:hover {
    background: #7d5032;
}
</style>
</head>
<body>

<div class="container mt-5">
    <div class="text-center mb-5">
        <h1>Pesona Ngada, Alam yang Bercerita</h1>
        <p class="intro">
            Jelajahi keindahan alam dan budaya Ngada yang menyimpan
            cerita di setiap sudutnya.
        </p>
    </div>
    <div class="row">
        <?php
        foreach($dataWisata as $wisata){
            echo '<div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                      <img
                        src="'.$wisata["Gambar"].'"
                        class="card-img-top"
                        alt="'.$wisata["Judul"].'"
                    >
                    <div class="card-body">
                        <h5 class="card-title">
                            '.$wisata["Judul"].'
                        </h5>
                        <p class="card-text">
                            '.$wisata["Deskripsi"].'
                        </p>
                        <a
                            href="'.$wisata["Link"].'"
                            target="_blank"
                            class="btn btn-success"
                        >
                            Jelajahi →
                        </a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

</body>
</html>
```

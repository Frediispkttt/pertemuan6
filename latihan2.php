<?php
/* 
    Fredi Supangkat
    203040076
    https://github.com/Frediispkttt/pw2021_203040076
    Pertemuan 6( 20 may 2021 )
    Materi Minggu ini mempelajari mengenai Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Fredi Supangkat", "203040076", "TIF", "fredisupangkat@gmai.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Fredi Supangkat", 
        "nrp" => "203040076",
        "email" => "fredisupangkat@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fredi.jpg.jpeg",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>  
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
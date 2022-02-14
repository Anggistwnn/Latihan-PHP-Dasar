<?php
// pengkondisian // percabangan 
// if else 
// if else if else 
// ternary
// switch

// $i = 20;
// if ($i < 20) {
//     echo "true";
// } else if ($i == 20) {
//     echo "bingo!";
// } else {
//     echo "salah";
// }

// date untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// unix TImestamp // EPOCH time
// detik yang sedang berlalu sejak 1 januri 1970
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0);
// jam, menit, detik, tanggal, bulan, tahun
// echo date("l", mktime(0, 0, 0, 27, 07, 1998));

// strtotime()
// echo date("l", strtotime("27 July 1998"));   
// membuat userdifine function
function salam($waktu, $nama)
{
    return "Selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>

<body>
    <h1> <?php echo salam("Pagi", "Anggi"); ?></h1>
</body>

</html>
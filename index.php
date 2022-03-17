<?php

// Ihsan || XI - RPL || PHP 7 || PWPB || 17-03-2022

// Struktur Perulangan FOR
function pangkat($a, $b)
{
  $bil = $a;
  for($i = 0; $i < ($b-1); $i++)
  {
  // setiap kali $bil di panggil maka akan selalu mengalikan 2
  $bil = $bil * $a;
  }
  // Mengembalikan nilai dari bilangan (baru) untuk di cetak
  return $bil;
}

// Fungsi Pangkat Di panggil
echo "Hasil Pemangkatan = ".pangkat(2,1);
echo "<br>";
echo "Hasil Pemangkatan = ".pangkat(2,2);
echo "<br>";
echo "Hasil Pemangkatan = ".pangkat(2,3);


// Struktur Perulangan WHILE
$x = 2;
// bil sama dengan x yaitu 2
$bil = $x;
// ketika bil kurang atau sama dengan 10
while($bil <= 10) {
// maka cetak ini
  echo "Hasil Pemangkatan = $bil <br>";
  //lalu setelah di cetak, di update terlebih dahulu
  // fungsi untuk selalu dikalikan 2
  $bil*=02;
}

// Struktur Perulangan DO-WHILE
$x = 2;
$bil = $x;
do {
  // memerintahkan ke sistem untuk terlebih dahulu cetak ini
  echo "Hasil Pemangkatan = $bil <br>";
  // setelahnya tolong kalikan dengan 2
  $bil*=2;
  // ketika sudah dikalikan dengan 2 tolong ulangi sampe kurang dari 10
} while ($bil <= 10);
?>

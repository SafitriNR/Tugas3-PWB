<?php
// ini adalah komentar dalam satu baris
/* kalau yang ini, komentar dalam banyak baris,
yang baru akan selesai setelah diakhiri dengan
*/
?>

<html>

<head>
  <title>Test Penyisipan PHP Pada HTML</title>
</head>

<body>
  Kepala asing, silahkan identifikasikan diri anda ! <br>
  <?php
  // Berikut ini adalah inisiasi beberapa variabel
  $namad = "Jeno";
  $namat = "Nana";
  $namab = "Tio";
  $nilai1 = 30;
  $nilai2 = 60;
  $hasil = $nilai1 * $nilai2;
  $a = 2;
  $b = 3;
  $hsl = pow($a, $b);
  ?>
  <b>Ini adalah kapal Federasi Planet USS Enterprise <br>
    <?php
    echo "Saya $namab, $namad $namat $namab, kapten kapal </br><br>";
    echo "$nilai1 x $nilai2 = $hasil<br>";
    echo "$a ^ $b = $hsl";
    ?>
</body>

</html>
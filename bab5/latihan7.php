<?php
// inisiasi variable yang digunakan
// nama peralatan
$brg1 = "Novel";
$brg2 = "Pulpen";
$brg3 = "Mouse";
$brg4 = "Earphone";
// harga perunit peralatan
$harga1 = 50000;
$harga2 = 12500;
$harga3 = 70000;
$harga4 = 90000;
// jumlah peralatan yang ada
$jml1 = 3;
$jml2 = 4;
$jml3 = 2;
$jml4 = 1;
// total harga perjenis peralatan
$th1 = $jml1 * $harga1;
$th2 = $jml2 * $harga2;
$th3 = $jml3 * $harga3;
$th4 = $jml4 * $harga4;
// hitung grand total nilai peralatan
$tharga = $th1 + $th2 + $th3 + $th4;
// besar diskon
$diskon = 5;
// jumlah total diskon yang diberikan
$tdiskon = ($diskon * $tharga) / 100;
// jumlah yang harus dibayar
$tdibayar = $tharga - $tdiskon;
?>


<html>

<head>
  <title>Daftar peralatan yang dibeli</title>
</head>
<style type="text/css">
  body {
    font-size: 14pt;
  }

  table {
    font-size: 25pt;
  }
</style>

<body>
  <center>
    <font face="comic sans serif" size=5 color="black">
      Contoh Perhitungan dengan PHP</font>
    <table border="1" cellspacing="0" cellpadding="3">
      <tr>
        <td colspan="4" align="center" valign="middle">
          <b>Daftar Pemesanan Peralatan Kantor</b>
        </td>
      </tr>
      <tr>
        <td><b>Nama Peralatan</b></td>
        <td><b>Jumlah</b></td>
        <td><b>Harga Satuan</b></td>
        <td><b>Jumlah Harga</b></td>
      </tr>

      <?php
      // Mulai untuk mengisi tabel daftar dengan data yang ada
      ?>

      <tr>
        <td align="left"><?php echo $brg1; ?></td>
        <td align="right"><?php echo $jml1; ?></td>
        <td align="right"><?php echo $harga1; ?></td>
        <td align="right"><?php echo $th1; ?></td>
      </tr>
      <tr>
        <td align="left"><?php echo $brg2; ?></td>
        <td align="right"><?php echo $jml2; ?></td>
        <td align="right"><?php echo $harga2; ?></td>
        <td align="right"><?php echo $th2; ?></td>
      </tr>
      <tr>
        <td align="left"><?php echo $brg3; ?></td>
        <td align="right"><?php echo $jml3; ?></td>
        <td align="right"><?php echo $harga3; ?></td>
        <td align="right"><?php echo $th3; ?></td>
      </tr>
      <tr>
        <td align="left"><?php echo $brg4; ?></td>
        <td align="right"><?php echo $jml4; ?></td>
        <td align="right"><?php echo $harga4; ?></td>
        <td align="right"><?php echo $th4; ?></td>
      </tr>
      <tr>
        <td colspan="3" align="right">Total Harga</td>
        <td align="right"><?php echo $tharga; ?></td>
      </tr>
      <tr>
        <td colspan="3" align="right">
          Diskon <?php echo "( $diskon % )"; ?></td>
        <td align="right"><?php echo $tdiskon; ?></td>
      </tr>
      <tr>
        <td colspan="3" align="right">Jumlah harus dibayar</td>
        <td align="right"><?php echo $tdibayar; ?></td>
      </tr>

    </table>
  </center>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
  <title>Data Pemantaun Covid19</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
  if (isset($_POST['simpan'])) {
    $wilayah = $_POST['wilayah'];
    $jml_positif = $_POST['jml_positif'];
    $jml_dirawat = $_POST['jml_dirawat'];
    $jml_sembuh = $_POST['jml_sembuh'];
    $jml_meninggal = $_POST['jml_meninggal'];
    $nama_opt = $_POST['nama_opt'];
    $nim_mhs = $_POST['nim_mhs'];
    switch ($wilayah) {
      case 'dki_jakarta':
        $wilayah_pilih = "DKI Jakarta";
        break;
      case 'jabar':
        $wilayah_pilih = "Jawa Barat";
        break;
      case 'banten':
        $wilayah_pilih = "Banten";
        break;
      case 'jateng':
        $wilayah_pilih = "Jawa Tengah";
        break;
    }
  }
  ?>
  <div align="center">
    <form method="post" action="index.php">
      <span>Input Data Pemantaun Covid19</span>
      <br />
      <br />
      <select name="wilayah" required>
        <option value="dki_jakarta">DKI Jakarta</option>
        <option value="jabar">Jawa Barat</option>
        <option value="banten">Banten</option>
        <option value="jateng">Jawa Tengah</option>
        <option selected="<?php echo $selected; ?>">Nama Wilayah</option>
      </select>
      <br />
      <input type="text" value="<?php echo $jml_positif; ?>" name="jml_positif" autocomplete="off" placeholder="Jumlah Positif" required>
      <br />
      <input type="text" value="<?php echo $jml_dirawat; ?>" name="jml_dirawat" autocomplete="off" placeholder="Jumlah Dirawat" required>
      <br />
      <input type="text" value="<?php echo $jml_sembuh; ?>" name="jml_sembuh" autocomplete="off" placeholder="Jumlah Sembuh" required>
      <br />
      <input type="text" value="<?php echo $jml_meninggal; ?>" name="jml_meninggal" autocomplete="off" placeholder="Jumlah Meninggal" required>
      <br />
      <input type="text" value="<?php echo $nim_mhs; ?>" name="nim_mhs" autocomplete="off" placeholder="Nim Mahasiswa" required>
      <input type="text" value="<?php echo $nama_opt; ?>" name="nama_opt" autocomplete="off" placeholder="Nama Operator" required>
      <br />
      <input type="submit" name="simpan" value="Simpan">
    </form>
    <br />
    <?php if (isset($_POST['simpan'])) { ?>
      <span>Data Pemantaun Covid19 wilayah <?php echo $wilayah_pilih; ?></span>
      <br />
      <span>Per <?php
                $tanggal = mktime(date("m"), date("d"), date("Y"));
                echo date("d-M-Y", $tanggal) . "</b> ";
                date_default_timezone_set('Asia/Jakarta');
                $jam = date("H:i:s");
                echo $jam . " " . "</b>";
                ?>
      </span>
      <br />
      <span><?php echo $nim_mhs; ?> / <?php echo $nama_opt; ?></span>
      <br />
      <table border="1" cellpadding="8">
        <tr>
          <td>Positif</td>
          <td>Dirawat</td>
          <td>Sembuh</td>
          <td>Meninggal</td>
        </tr>
        <tr>
          <td><?php echo $jml_positif; ?></td>
          <td><?php echo $jml_dirawat; ?></td>
          <td><?php echo $jml_sembuh; ?></td>
          <td><?php echo $jml_meninggal; ?></td>
        </tr>
      </table>
    <?php } ?>
  </div>
</body>

</html>
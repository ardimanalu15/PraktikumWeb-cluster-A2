<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1.php Praktikum 2</title>
  
</head>

<body>
  <article>
    <?php
    if (isset($_POST['hitung'])) {
      $bil1 = $_POST['bil1'];
      $bil2 = $_POST['bil2'];
          $tambah = $bil1 + $bil2;         
          $kurang = $bil1 - $bil2;            
          $kali = $bil1 * $bil2;           
          $bagi = $bil1 / $bil2;           
          $mod = $bil1 % $bil2;       
    }
    ?>
    <div class="kalkulator">
      <h1 class="judul">KALKULATOR</h1>      
      <form method="post" action="kalkulatorsederhana.php">
        <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
        <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
        <input type="submit" name="hitung" value="Hitung" class="tombol">
      </form>
       <?php if (isset($_POST['hitung'])) {
          echo "<br><br>Berikut Merupakan Hasil dari setiap Operasi" ;
          echo "<br><br> PENJUMLAHAN <br> Operator : + <br> Hasli :", $tambah;
          echo "<br><br> PENGURANGAN <br> Operator : - <br> Hasli :", $kurang;
          echo "<br><br> PERKALIAN <br> Operator : X <br> Hasli :", $kali;
          echo "<br><br> PEMBAGIAN <br> Operator : / <br> Hasli :", $bagi;
          echo "<br><br> MODULUS <br> Operator : % <br> Hasli :", $mod;
        }?>
    </div>
  </article>
</body>
</html>
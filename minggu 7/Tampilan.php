<?php
        require 'functions.php';
        $mahasiswa = query("SELECT * FROM mahasiswa");

    if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["key"]);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0" >
        
            <tr>
                <th>No.</th>
                
                <th>NRP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>ID_Jur</th>
            </tr>
                <?php $i =1; ?>
                <?php foreach($mahasiswa as $row) : //loping ?>
            <tr>
                
                <td><?php echo $i;  ?></td>
                <td> <?php echo $row["NRP"];  ?> </td>
                <td> <?php echo $row["Nama"];  ?> </td>
                <td> <?php echo $row["Alamat"];  ?> </td>
                <td> <?php echo $row["ID_Jur"];  ?> </td>
            </tr>
                 <?php $i++; ?>
                <?php endforeach;  ?>
        </table>
        <br>
        <br>
        ===============================================
        <br>
        <br>
             Tambah Data Mahasiswa :
             <a href="tambah.php"><button type="submit" name="submit"> Tambah Data</button></a>
                    <br>
                    <br>
        ===============================================
                    <br><br>
                    SEARCH DATA <br><br>
                   <form action="" method="POST">
                        NAMA : <input type="text" name="key" autofocus placeholder="Mau cari siapa?" autocomplete="off">
                        <button type="submit" name="cari">Cari Data</button>
                    </form>                 
                    <br>                        
        ===============================================
        <form action="hapus.php">
        NRP : <input type="text" name="keyhapus">
        <input type="submit" name="hapus" value="Hapus">
    </form>
    </body>
</html>
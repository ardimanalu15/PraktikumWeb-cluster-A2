<?php 
    require 'functions.php';  
    if (isset($_POST["submit"])){
            if ( tambah($_POST) > 0 ){
                echo "
                    <script>
                        alert('data berhasil ditambahkan');
                        document.location.href = 'Tampilan.php';
                    </script>
                ";
            }else {
                echo "
                    <script>
                        alert('data gagal ditambahkan');
                        document.location.href = 'Tampilan.php';
                    </script>
                ";
            }
    }
?>
<!DOCTYPE html>
 <html>
     <head>
         <title> Tambah data Mahasiswa</title>
     </head>

<body>
    <h1> Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="NRP" > NRP : </label>
                <input type="text" name="NRP" id="NRP" required>
            </li>
            <br> 
            <li>            
                <label for="Nama" > Nama: </label>
                <input type="Nama" name="Nama" id="Nama" required>

            </li>
            <br>
            <li>            
                <label for="Alamat" > Alamat    : </label>
                <textarea name="Alamat" id="Alamat" cols="20" rows="2"></textarea>
            </li>
            <br>
            <li>                
                <label for="ID_Jur" > ID_Jur : </label>
                Jurusan : <select name="ID_Jur">
        <?php
            $koneksi = mysqli_connect("localhost","root","","praktikum");
            $hasil = mysqli_query($koneksi, "select * from jurusan");
            while ($nama_jur = mysqli_fetch_array($hasil)){
                echo "<option value=".$nama_jur['ID_Jur'].">".$nama_jur['Nama']."</option>";
            }
        ?>

        </select>
            <br>
            <li>
                <button type="submit" name="submit"> Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
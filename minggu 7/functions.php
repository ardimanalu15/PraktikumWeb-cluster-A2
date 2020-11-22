<?php
//koneksi ke database
    $koneksi = mysqli_connect("localhost","root","","praktikum");
    function query($query){
       global $koneksi;
        $result = mysqli_query($koneksi, $query); 
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row; 
        }
        return $rows;
    }
    function tambah($data){
        global $koneksi;
        $NRP = htmlspecialchars( $data["NRP"]);                
        $Nama = htmlspecialchars( $data["Nama"]);
        $Alamat = htmlspecialchars( $data["Alamat"]);
        $ID_Jur = htmlspecialchars( $data["ID_Jur"]); 
        $query= "INSERT INTO mahasiswa VALUES
        ('$NRP','$Nama', '$Alamat', '$ID_Jur')";
        mysqli_query($koneksi, $query);      
        return mysqli_affected_rows($koneksi);
    }

    function cari($key){
        $query = "SELECT * FROM mahasiswa WHERE Nama LIKE '%$key%'";
              return query($query);
    }

?>
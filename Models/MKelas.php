<?php
    require('../Config/Database.php');

    Class MKelas{


        function Simpan($nama){
            global $Koneksi;
            $sql="insert into kelas values('".$nama."')";
            $res = mysqli_query($Koneksi,$sql);
            if($res == 1) {
                return "Berhasil";
            }
        }

        function Update($nama, $newNama) {
            global $Koneksi;
            
            $sql = "UPDATE kelas SET nama = '$newNama' WHERE nama = '$nama'";
            try {
                $res = mysqli_query($Koneksi, $sql);
                return "Berhasil";
            } 
            catch (mysqli_sql_exception $e) {
                var_dump($e->getMessage());
                return "Gagal: " . $e->getMessage();
            }
            
        }
        

        function Delete($nama) {
            global $Koneksi;
            
            $sql = "DELETE FROM kelas WHERE nama = '$nama'";
            $res = mysqli_query($Koneksi, $sql);
            if ($res == 1) {
                return "Berhasil";
            } else {
                return "Gagal";
            }
        }
        
        
    }
?>
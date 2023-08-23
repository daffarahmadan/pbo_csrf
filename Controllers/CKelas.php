<?php
require('../Models/MKelas.php');

Class CKelas{

    function Simpandata($nama){
            
        $db=new MKelas();
        echo $db->Simpan($nama);

    }

    function UpdateData($nama,$newNama){
        $db=new MKelas();
        return $db->Update($nama, $newNama);
    }

    function DeleteData($nama){
        $db=new MKelas();
        return $db->Delete($nama);
    }
}
?>
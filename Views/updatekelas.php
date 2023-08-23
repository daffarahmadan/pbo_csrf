<?php
require('../Controllers/CKelas.php');
require('../Libraries/csrf.php');
session_start();
$kelas = new CKelas();


if(isset($_POST['update'])){
    if (CSRF::check($_POST['csrf_token'], 'form_csrf')){
     echo $nama = $_POST['nama'];
     echo $newNama = $_POST['newNama'];
     echo $kelas->UpdateData($nama,$newNama);
    }
    else{
        echo "Invalid or missing CSRF token.";
    }
}
?>

<br>
<br>
<form action="" method="post">
<input type="hidden" name="csrf_token" value="<?php echo CSRF::generate('form_csrf'); ?>">
    <table>
        <tr>
            <td>old nama</td><td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>new nama</td><td>:</td>
            <td>
                <input type="text" name="newNama">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="update" value="Update">
            </td>
        </tr>
    </table>
</form>


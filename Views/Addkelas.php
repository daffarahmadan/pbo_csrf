<?php
require('../Controllers/CKelas.php');
require('../Libraries/csrf.php');
session_start();
$kelas = new CKelas();

if(isset($_POST['simpan'])){
    if (CSRF::check($_POST['csrf_token'], 'form_csrf'))
    {
    echo $kelas->Simpandata($_POST['nama']);
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
            <td>Nama kelas</td><td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="simpan" value="Simpan">
            </td>
        </tr>
    </table>
</form>







<?php
$dbname = 'dbtoko1';
$dsn = 'mysql:dbname='.$dbname.';host:localhost';
$user = 'root';
$pass = '';
try{
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

    // echo"koneksi sukses";

} catch (PDOException $e){
    echo 'Terjadi Kesalahan Koneksi DB dengan sebab'.$e->getMessage();
}
?>
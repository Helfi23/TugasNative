<?php
class produk{
    private $conection;
    public function __construct()
    {
        global $dbh;
        $this->conection =$dbh;

    }
    public function dataProduk(){
        $select = "SELECT produk.*, jenis_produk.nama as kategori FROM produk INNER JOIN 
        jenis_produk ON jenis_produk.id = produk.jenis_produk_id";

        $ps = $this->conection->prepare($select);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>
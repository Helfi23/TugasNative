<?php
class jenis_produk{
    private $connection;
    public function __construct()
    {
        global $dbh;
        $this->connection = $dbh;

    }
    public function JenisProduk(){
        $sql = "SELECT * FROM jenis_produk";
        $ps = $this->connection->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>
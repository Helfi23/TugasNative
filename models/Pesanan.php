<?php
class Pesanan{
    private $connection;
    public function __construct()
    {
        global $dbh;
        $this->connection = $dbh;
    }
    public function dataPesanan(){
        $sql = "SELECT * FROM pesanan";
        $ps = $this->connection->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>
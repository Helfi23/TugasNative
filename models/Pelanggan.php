<?php
class Pelanggan{
    private $connection;
    public function __construct()
    {
        global $dbh;
        $this->connection = $dbh;
    }
    public function dataPelanggan(){
        $sql = "SELECT * FROM pelanggan";
        $ps = $this->connection->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>
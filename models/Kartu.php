<?php
class Kartu{
    private $connection;
    public function __construct()
    {
        global $dbh;
        $this->connection = $dbh;
    }
    public function dataKartu(){
        $sql = "SELECT * FROM kartu";
        $ps = $this->connection->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>
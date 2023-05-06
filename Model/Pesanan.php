<?php 



class Pesanan{
    public function pesanan()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM pesanan ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}




?>
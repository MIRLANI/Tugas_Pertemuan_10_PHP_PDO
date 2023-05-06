<?php 


class Pelanggan{
    public function pelanggan()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM pelanggan ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}




?>
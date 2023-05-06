<?php 



class Kartu{
    public function kartu()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM kartu ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}




?>
<?php 


class JenisProduk{
    public function jenisProduk()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM jenis_produk ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}



?>
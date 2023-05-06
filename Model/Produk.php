<?php

require_once __DIR__ . "/../koneksi.php" ;

class Produk
{
    

    public function dataProduk()
    {
        $koneksi = getConection();
        $sql = "SELECT produk.*, jenis_produk.nama as kategori FROM produk INNER JOIN
    jenis_produk ON jenis_produk.id = produk.jenis_produk_id";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

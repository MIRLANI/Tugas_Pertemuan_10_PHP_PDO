<?php

require_once __DIR__ . "/Model/Jenis_Produk.php";

$produk = new JenisProduk();
$jenisProduk = $produk->jenisProduk();


// foreach ($dataProduk as $row){
//    echo $row["kode"];
// }



?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; foreach ($jenisProduk as $row){ ?>
                    <tr>
                        <th><?= $no ?> </th>
                        <td><?= $row["nama"] ?> </td>
                        <td><?= $row["ket"] ?> </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
    // include_once 'top.php';
    // include_once 'menu.php';
 

    $model = new jenis_produk();
    $data_produk = $model->JenisProduk();

    // foreach($data_produk as $produk) {
    //     echo $produk['kode'] . ' - ' . $produk['nama'] . ' - ' . $produk['harga_jual'] . '<br>';
    // }
?>

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
                                            <th>Nomor</th>
                                            <th>Kode</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no =1;
                                            foreach($data_produk as $jenis)
                                            {
                                                ?><tr>
                                                <th><?= $no ?></th>
                                                <th><?= $jenis['nama']?></th>
                                                <th><?= $jenis['ket']?></th>

                                            <?php
                                            $no++;  
                                            }
                                            ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php
    include_once 'buttom.php';
?>
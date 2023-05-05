<?php
    // include_once 'top.php';
    // include_once 'menu.php';
 

    $model = new Kartu();
    $data_kartu = $model->dataKartu();

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
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran Bulanan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran Bulanan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no =1;
                                            foreach($data_kartu as $kartu)
                                            {
                                                ?><tr>
                                                <th><?= $no ?></th>
                                                <th><?= $kartu['kode']?></th>
                                                <th><?= $kartu['nama']?></th>
                                                <th><?= $kartu['diskon']?></th>
                                                <th><?= $kartu['iuran']?></th>

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
<?php
    include_once 'top.php';
    include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <!-- <h1>SELAMAT DATANG DI HALAMAN ADMIN</h1> -->
        <?php
        error_reporting(0);
        $url = $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        } else if(!empty($url)){
            include_once ''. $url. '.php';
        } else {
            'dashboard.php';
        }
        ?>
    </div>
</div>
<?php
    include_once 'buttom.php';
?>
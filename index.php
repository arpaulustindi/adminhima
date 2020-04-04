<?php
//Include
include('config/global.php');
//.Include

//Session
$nama_pengguna = "Arifin Tindi";
//.Session

?>
<!DOCTYPE html>
<html>
<head>    
    <title><?php echo $aplikasi;?></title>
    <?php include('part/head.php');?>
    <?php include('part/body.jquery.php');?>
    <!-- ***MULAI : Tambahan CSS -->

    <!-- ***Selesai : Tambahan CSS -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- ***MULAI : JANGAN DIHAPUS*** Main Sidebar Container -->
    <?php include('part/body.nav.php');?>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php include('part/body.sidebar.akun.php');?>
    <?php include('part/body.sidebar.menu.php');?>
    </aside>
    <!-- ***SELESAI : JANGAN DIHAPUS***/.content-header -->

    <section class="content">  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">  
    <!-- Main content ISI DI SINI-->
    <?php
    $page = "beranda";
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } 
    $content = file_get_contents('halaman/' . $page . '.php');
    echo $content;
    ?>
    <!-- Main content SELESAI DI SINI-->        
    </section>
    </div>
    <!-- ***MULAI : JANGAN DIHAPUS*** Main Footer -->
    <?php include('part/body.foot.php');?>
     <!-- ***SELESAI : JANGAN DIHAPUS*** Main Footer -->
</div>

<!-- ***MULAI : JANGAN DIHAPUS*** JQuery -->
<?php include('part/body.script.php');?>
<!-- ***SELESAI : JANGAN DIHAPUS*** JQuery -->
</body>
</html>

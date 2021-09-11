<?php 
$menu = "index"
?>
<title>หน้าแรก</title>
<!-- Main content -->
<section class="content">
    <div class="container">
        <?php
        include("navbarlogin.php");
        include("slide.php");
        include("header.php"); 
    ?>
        <br>
        <br>
        <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=="login"){
                include('login.php');
            }elseif($act=="loginadmin"){
                include('loginadmin.php');    
            }elseif($act=="regis"){
                include('register.php');
            }else{
            include('showbook.php');
            }
        ?>
        <br>
        <br>
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>
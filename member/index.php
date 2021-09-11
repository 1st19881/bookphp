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
            
            include('showbook.php');
        ?>
        <br>
        <br>
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>
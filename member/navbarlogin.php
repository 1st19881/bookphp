<?php session_start();?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=login"><?php echo $_SESSION['name'];  ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">ออกจากระบบ</a>
            </li>
        </ul>
</nav>
<?php include('condb.php'); 

$sql_t="SELECT * FROM booktype";
$rs_t = mysqli_query($conn,$sql_t);


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <a class="nav-link" href="#">หนังสือทั้งหมด</a>
  </li>
    <?php foreach($rs_t as $row_t){ ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?act=show_type&booktype_id=<?php echo $row_t['booktype_id'];?>"><?php echo $row_t['booktype_name'];?></a>
      </li>
      <?php  }?>
      <li class="nav-item">
    <a class="nav-link" href="#">เกี่ยวกับเรา</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">ติดต่อเรา</a>
  </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="" style="border-radius:0;">
      <button class="btn btn-outline-success btn-flat my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
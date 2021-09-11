<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT b.*,bt.* FROM book as b
INNER JOIN booktype  as bt ON b.booktype_id=bt.booktype_id 
ORDER BY b.book_id DESC";
$result = mysqli_query($conn, $query)or die ("Error in query: $query
query " . mysqli_error());

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">ชื่อหนังสือ</th>
            <th class="text-nowrap"scope="col">ประเภทหนังสือ</th>
            <th class="text-nowrap"scope="col">คนแต่ง</th>
            <th scope="col">ราคา</th>
            <th class="text-nowrap"scope="col">ปีที่พิมพ์</th>
            <th scope="col">สมาชิก</th>
            <th scope="col">ภาพ</th>
            <th scope="col">สถานะ</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['book_name']; ?></td>
        <td><?php echo $row_p['booktype_name']; ?></td>
        <td style="font-size:14px"><?php echo $row_p['author']; ?></td>
        <td><?php echo $row_p['price']; ?></td>
        <td><?php echo $row_p['year_of_publication']; ?></td>
        <td><?php echo $row_p['member_id']; ?></td>
        <td><?php echo $row_p['img']; ?></td>
        <td><?php echo $row_p['status']; ?></td>
        <td>
            <div class="d-flex">
                <a href="book.php?act=edit&book_id_id=<?php echo $row_p['book_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="book.php?act=delete&book_id_id=<?php echo $row_p['book_id']; ?>"
                    class="btn btn-danger btn-flat">ลบ</a>
            </div>
        </td>
    </tr>


    <?php }  ?>


</table>
<?php
include 'conn.php';
$sql = "select * from sheet1 where std_name like '%{$_POST['searchkey']}%'";
$query = mysql_query($sql);
?>
<div class="col-md-12">
 <table class="table table-bordered">
 <thead>
 <tr>
 <th>รหัสนิสิต</th>
 <th>ชื่อนิสิต</th>
 <th>สาขา</th>
 <th>คณะ</th>
 <th>จบการศึกษา</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td><?php echo $result['std_id'];?></td>
 <td><?php echo $result['std_name'];?></td>
 <td><?php echo $result['std_major'];?></td>
 <td><?php echo $result['std_faculty'];?></td>
 <td><?php echo $result['graduation'];?></td>
 </tr>
 </tbody>
 </table>
</div>
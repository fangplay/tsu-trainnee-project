<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prototype Searching</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<from name="search" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
    <table width="599" boarder="1">
    <tr>
        <th>Search <input type="text" name="keyword" id="keyword" value="<?php echo $_GET["keyword"];?>">
        <input type="submit" value="Search"></th>
    </tr>
    </table>
</from>
<!--Search Processing-->
<?php
include("conn.php");
//mysqli_set_charset($con,"utf8");
if($_GET["keyword"]!=""){
//include("conn.php");
mysqli_set_charset($conn,"utf8");
//Search by keyword from textbox
$strsql = "SELECT * FROM sheet1 WHERE (std_id LIKE '%".$_GET["keyword"]."%' or std_name LIKE '%".$_GET["keyword"]."%' or std_major LIKE '%".$_GET["keyword"]."%' or std_faculty LIKE '%".$_GET["keyword"]."%' or graduation LIKE '%".$_GET["keyword"]."%')";
$objquery = mysql_query($strsql) or die("Error Query [".$strsql."]");
?>
<table>
<tr>
    <th width="90"><div align="center">Student ID</div></th>
    <th width="90"><div align="center">Student NAME</div></th>
    <th width="90"><div align="center">MAJOR</div></th>
    <th width="90"><div align="center">FACULTY</div></th>
    <th width="90"><div align="center">GRADUATION</div></th>
</tr>
<?php
while($objresult = musql_fetch_array($objquery)){
?>
<tr>
    <td><?php echo $objresult["std_id"];?></td>
    <td><?php echo $objresult["std_name"];?></td>
    <td><?php echo $objresult["std_major"];?></td>
    <td><?php echo $objresult["std_faculty"];?></td>
    <td><?php echo $objresult["graduation"];?></td>
</tr>
<?php
}
?>
</table>
<?php
mysql_close($conn);
}
?>
</body>
</html>

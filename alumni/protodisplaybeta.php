<html>
<head>
<title>Prototype Searching 2</title>
</head>
<body>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="773" border="1">
    <tr>
      <th width="763">Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php
if($_GET["txtKeyword"] != "")
	{
    include("conn.php");
	//$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
    //$objDB = mysql_select_db("alumni");
    mysqli_set_charset($conn,"utf8");
	//Search by keyword from textbox
	$strSQL = "SELECT * FROM sheet1 WHERE ( std_id '%".$_GET["txtKeyword"]."%' or std_name LIKE '%".$_GET["txtKeyword"]."%' or std_major '%".$_GET["txtKeyword"]."%' or std_faculty LIKE '%".$_GET["txtKeyword"]."%')";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="773" border="1">
	  <tr>
		<th width="84"> <div align="center">StudentID </div></th>
		<th width="177"> <div align="center">Student Name</div></th>
		<th width="213"> <div align="center">Major</div></th>
		<th width="125"> <div align="center">Faculty</div></th>
		<th width="140"> <div align="center">Graduated</div></th>
	  </tr>
	<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><?php echo $objResult["std_id"];?></td>
		<td><?php echo $objResult["std_name"];?></td>
		<td><?php echo $objResult["std_major"];?></td>
		<td><?php echo $objResult["std_faculty"];?></td>
		<td><?php echo $objResult["graduation"];?></td>
	  </tr>
	<?php
	}
	?>
	</table>
	<?php
	mysql_close($objConnect);
}
?>
</body>
</html>
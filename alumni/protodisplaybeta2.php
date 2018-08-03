<!DOCTYPE html>
<?php
include'conn.php';
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prototype Searching</title>
    <link href="bootstrap2\css\bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap2\css\bootstrap.css" rel="stylesheet">
    <link href="css\searchbeta2.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <from id="searching" method="post">
    <tr>
        <td width="195"><label class="ico">Search Data</label></td>
        <td width="195"><input type="text" name="searchkey" id="keysearch" class="from-search" width="200px"></td>
        <td width="250"><button type="submit" name="setsearch" id="search" class="search" onClick="Result">search</button></td>
    </tr>
<script type="text/javascript" src="javascript\jquery-1.8.2.min.js"></script>
<script type="text/javascript">
 $(function () {
 $("#search").click(function () {
 $.ajax({
 url: "search2.php",
 type: "post",
 data: {searchkey: $("#searchkey").val()},
 beforeSend: function () {
 $(".loading").show();
 },
 complete: function () {
 $(".loading").hide();
 },
 success: function (data) {
 $("#list-data").html(data);
 }
 });
 });
 $("#searchform").on("keyup keypress",function(e){
 var code = e.keycode || e.which;
 if(code==13){
 $("#search").click();
 return false;
 }
 });
 });
 </script>
</body>
</html>
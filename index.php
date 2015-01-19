#!/usr/local/bin/php

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UF Club Tennis</title>
<style type="text/css">
.content {
	width: 98%;
	background-color: rgba(0,34,164,.5);
	margin-left: 1%;
	border-radius: 5px;
	padding: 10px 0;
}
.calendar {
	width: 47%;
	float: right;
	margin-right: 1%;
}
</style>
<link href="_CSS/styleSheet.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<meta name="description" content="UF Club Tennis Home Page, includes announcements and upcoming events." />
<meta name="keywords" content="UF Club Tennis, home, announcements, upcoming events, calendar, University of Florida, RecSports, tennis" />
</head>

<body>

<div class="container">
  <div class="header"><img src="_images/Logo.png" alt="Logo" width="900" height="160" />
  <?php include("_includes/header.php"); ?>
  <!-- end .header --></div>
  <h1>Home Page</h1>
  <div class="content">
  <div class="calendar"><iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=m5lsfo7a0p5gpu3hd9iruceab0%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border:solid 1px #00F " width="100%" height="400" frameborder="0" scrolling="no"></iframe>
  </div>
    <p>Welcome to the University of Florida Club Tennis Home Page!</p>
    <p>&nbsp;</p>
    <p>You can find information regarding our next club activities on the calendar to the right. If you have any questions please refer to the &quot;About Us&quot; portion of the website.</p>
    <p>&nbsp;</p>
    <p>Thank you!</p>
    <p>&nbsp;</p>
    <p>Go Gators!!</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="body"><!-- body div for footer --></div>
  <div class="footer">UFClubTennis.com
  <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
<?php include("_includes/menuBar1.php"); ?>
</script>
</body>
</html>

#!/usr/local/bin/php

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UF Club Tennis</title>
<style type="text/css">
.content {
	padding: 10px 0;
	width: 78%;
	float: right;
	margin-right: 1%;
	background-color: rgba(0,34,164,.5);
	border-radius: 5px;
}
</style>
<link href="_CSS/aboutStyleSheet.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<meta name="keywords" content="UF Club Tennis, about, University of Florida, tournaments, serving the community, fundraising, events, becoming a member, officers">
<meta name="description" content="Information about the University of Florida Club Tennis team.  Including community service, fundraising, practices, etc.">
</head>

<body>

<div class="container">
  <div class="header"><img src="_images/Logo.png" width="900" height="160" alt="Logo">
  <?php include("_includes/header.php"); ?>
  <!-- end .header --></div>
  <div class="sidebar1">
    
    <ul id="MenuBar2" class="MenuBarVertical">
    <li><a href="practices.php">Club Practices</a>    </li>
    <li><a href="tournaments.php">Tournaments</a></li>
<li><a href="community.php">Serving The Community</a>    </li>
    <li><a href="fundraising.php">Fundraising</a></li>
    <li><a href="other.php">Other Events</a></li>
    <li><a href="becomingAMember.php">Becoming A Member</a></li>
    <li><a href="officers.php">Club Officers</a></li>
  </ul>
  <p> Be sure to join our Facebook page for up to date information on all of the club activities.</p>
  <!-- end .sidebar --></div>
    <h1>Club Tennis Officers</h1>
  <div class="content">
    <p>President: Adam Decker<br>
Email: <a href="mailto:aadecker91@gmail.com">aadecker91@gmail.com</a><br>
Phone: (850) 819-9130</p>
    <p><br>
    </p>
    <p>Vice President: Stephanie Cruz<br>
      Email: <a href="mailto:scruz2294@ufl.edu">scruz2294@ufl.edu</a><br>
      Phone: (727) 642-6471<br>
  <br>
      Treasurer: Stephen Ireland<br>
      Email :<a href="mailto:irelandsteve@ufl.edu">irelandsteve@ufl.edu</a><br>
    Phone: (904) 654-3504</p>
    <p>&nbsp;</p>
    <p>Secretary: Natalie Boruk<br>
      Email: <a href="mailto:natalieboruk@yahoo.com">natalieboruk@yahoo.com</a><br>
    Phone: (727) 644-9260</p>
    <p>&nbsp;</p>
    <p>Fundraising Chair: Michael Farrell<br>
      Email: <a href="mailto: rdsxfn2012@yahoo.com">rdsxfn2012@yahoo.com</a><br>
    Phone: (813) 245-4566</p>
    <p>&nbsp;</p>
    <p>Community Service Chair: Carol Marie Fraley<br>
      Email: <a href="mailto: cmf4494@bellsouth.net">cmf4494@bellsouth.net</a><br>
    Phone: (813) 601-2552 </p>
    <!-- end .content --></div>
    <div id="body"><!-- body div for footer --></div>
  <div class="footer">
    <p>UFClubTennis.com</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
<?php include("_includes/menuBar1.php"); ?>
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>

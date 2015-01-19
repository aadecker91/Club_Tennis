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
    <h1>Becoming A Member</h1>
  <div class="content">
    <p>If you're interested in becoming a member of Club Tennis you can sign up by following these steps:</p>
    <p>&nbsp;</p>
    <ol>
      <li>Go to the GatorConnect website at <a href="https://ufl.collegiatelink.net/">https://ufl.collegiatelink.net/</a></li>
      <li>Sign in using your gatorlink username and password.</li>
      <li>Click on &quot;Organizations&quot;.</li>
      <li>Find and select &quot;Club Tennis&quot;.</li>
      <li><!-- end .content -->Select &quot;Read More...&quot; and click the link for the club waiver.</li>
      <li>Read through all of the terms and conditions and supply an emergency contact.</li>
      <li>Select &quot;Submit for Approval&quot;.</li>
      <li>You are now a part of UF Club Tennis!</li>
    </ol>
    <p>Once you're registered for the club you can come  out to practices/travel to tournaments. I recommend joining our listserv to stay up to date on all the   club activities. Any upcoming tournaments or events will be sent out   through the listserv. All you need to do is send an email to <a href="mailto:%20listserv@lists.ufl.edu">listserv@lists.ufl.edu</a> containing the line "subscribe UFCLUBTENNIS-L firstname lastname" somewhere in the message. <br>
      <br>
    Lastly,         I also recommend that you become a member of our facebook page which can be found <a href="https://www.facebook.com/groups/2200438079/" target="_blank">here</a>. </p>
  </div>
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

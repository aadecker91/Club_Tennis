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
table {
	margin-left: 15px;
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
    <h1>Tournaments</h1>
  <div class="content">
  <img src="_images/nationalsPhoto.jpg" alt="Nationals Photo" width="309" height="272" style="float: right">
    <p>Throughout the Fall and Spring, we have USTA sponsored club tournaments. Most of these tournaments are hosted by Florida schools throughout the state. Each tournament is worth a certain amount of points. These points go towards our sectional ranking. We try to attend every tournament hosted in Florida, and one or two out-of-state tournaments. Here's a little info about how the tournaments work:</p>
    <p>&nbsp;</p>
    <ul>
      <li>We usually take 20-30 players to each tournament in Florida, depending on how many people are interested in going.</li>
      <li>This year, the tournament formats will vary. Prior to each tournament, I will let everyone know what the format will be.</li>
      <li>Many of the tournaments that we play are World Team Tennis (WTT) format, sectionals and nationals will be WTT format. WTT home page is <a href="http://www.wtt.com/" target="_blank">here</a>.</li>
      <li>Each match consists of 5 sets: Women's singles, women's doubles, men's singles, men's doubles, and mixed doubles.</li>
      <li>Each set is first to 6 no-ad, with a tiebreaker at 5-5.</li>
      <li>The tiebreak is first to 5 with a sudden death point at 4-4.</li>
      <li>The winner of each match is determined by the total number of games won by each team (If there is a tie, a super-tiebreaker to 7 will decide the winner).</li>
    </ul>
    <h2>Tournament Schedule</h2>
    <p>&nbsp;</p>
    <table width="600" border="0" >
      <tr>
        <th align="center" scope="col"><u>Tournament</u></th>
        <th scope="col"><u>Location</u></th>
        <th scope="col"><u>Date</u></th>
      </tr>
      <tr>
        <td>FSU</td>
        <td>Tallahassee, FL</td>
        <td>September 7-8</td>
      </tr>
      <tr>
        <td>UM</td>
        <td>Miami, FL</td>
        <td>September 28-29</td>
      </tr>
      <tr>
        <td>Fall Invitational</td>
        <td>Hilton Head, SC</td>
        <td>October 11-13</td>
      </tr>
      <tr>
        <td>Gator Bowl</td>
        <td>Gainesville, FL</td>
        <td> October 26-27</td>
      </tr>
      <tr>
        <td>UCF</td>
        <td>Orlando, FL</td>
        <td>November 16-17</td>
      </tr>
      <tr>
        <td>FGCU</td>
        <td>Fort Meyers, FL</td>
        <td>January 18-19</td>
      </tr>
      <tr>
        <td>USF</td>
        <td>Tampa, FL</td>
        <td>February 1-2</td>
      </tr>
      <tr>
        <td>Sectionals</td>
        <td>Orlando, FL</td>
        <td>February 22-23</td>
      </tr>
      <tr>
        <td>National Championships</td>
        <td>Surprise, AZ</td>
        <td>April 10-13</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <h2>Line-ups/Try-outs</h2>
    <p>&nbsp;</p>
    <p>We do not have actual &quot;tryouts&quot; for club tennis. The team lineups will be made prior to each individual tournament and posted on the website. They will be based on performance at practice, past tournaments, and dedication to club outside of practice.</p>
    <p>&nbsp;</p>
    <p>Players are free to challenge anyone two teams above them. However, winning a challenge match will not guarantee moving up in the lineups.</p>
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

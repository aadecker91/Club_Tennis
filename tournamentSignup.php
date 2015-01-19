<?php require_once('Connections/tournamentroster.php'); ?>
<?php
/*if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO gatorClassic (firstName, lastName, phoneNumber, email, gender, singles, doubles, mixed, tShirtSize, university, member, doublesPartner, mixedPartner) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['phonenumber'], "text"),
					   GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['gender'], "text"),
                       GetSQLValueString($_POST['singles'], "text"),
                       GetSQLValueString($_POST['doubles'], "text"),
					   GetSQLValueString($_POST['mixed'], "text"),
					   GetSQLValueString($_POST['tShirtSize'], "text"),
					   GetSQLValueString($_POST['university'], "text"),
					   GetSQLValueString($_POST['member'], "text"),
					   GetSQLValueString($_POST['doublesPartner'], "text"),
                       GetSQLValueString($_POST['mixedPartner'], "text"));

  mysql_select_db($database_tournamentroster, $tournamentroster);
  $Result1 = mysql_query($insertSQL, $tournamentroster) or die(mysql_error());

  $insertGoTo = "tournamentSignup.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_tournamentroster, $tournamentroster);
$query_rsRoster = "SELECT firstName, lastName FROM gatorClassic ORDER BY firstName ASC";
$rsRoster = mysql_query($query_rsRoster, $tournamentroster) or die(mysql_error());
$row_rsRoster = mysql_fetch_assoc($rsRoster);
$totalRows_rsRoster = mysql_num_rows($rsRoster);
*/?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UF Club Tennis</title>
<style type="text/css">
.content {
	background-color: rgba(0,34,164,.5);
	margin-left: 1%;
	border-radius: 5px;
	margin-right: 3%;
	padding: 10px 0;
}
table {
	margin-left: auto;
	margin-right: auto;
	text-align: center;
}
.content2 {
	width: 100%;
	text-align: center;
}
form {
	margin-right: auto;
	margin-left: auto;
}
</style>
<link href="_CSS/styleSheet.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<meta name="description" content="Information and registration for the UF Club Tennis Gator Classic" />
<meta name="keywords" content="UF Club Tennis, contact, University of Florida, RecSports, tennis, sign up" />
</head>

<body>
<div class="container">
  <div class="header"><img src="_images/Logo.png" alt="Logo" width="900" height="160" />
  <?php include("_includes/header.php"); ?>
  <!-- end .header --></div>
  <h1>Gator Classic Registration</h1>
  <div class="content">
  <p>Welcome to the official Gator Classic Registration Page!</p>
  <p>&nbsp;</p>
  <p>The Gator Classic Tennis Tournament will take place the 15th  and 16th of March. This  tournament is an opportunity for Gainesville top juniors, adults,  former/current varsity players, and top club teams around the state to compete  against each other. All the information regarding this event (entry fees,  format, etc.) can be found  below:</p>
  <p>&nbsp;</p>
  <p><strong>What</strong>: Singles,  doubles, and mixed open tournament.   Double elimination. Guaranteed at least two matches.</p>
  <p><strong>When</strong>: March 15-16,  2013.  Matches start at 8am both  days.  Check-in is at 7:30 at Flavet.  </p>
  <p><strong>Where</strong>:  Flavet Tennis Courts (Directly across from  the Hume Residence Hall) a map is available <a href="practices.php">here</a>.</p>
  <p><strong>Format</strong>:  2 out of 3 sets, full 3rd set for  each division.</p>
  <p><strong>Entry Fee</strong>:  Determined by the number of events signed up for:  </p>
  <p>1 event: $30 (20 for current &ldquo;Tennis on Campus&rdquo; club  members)<br>
    2 events: $40 (30)<br>
    3 events: $50 (40)</p>
  <p>&nbsp;</p>
  <p>Cash or check will be accepted Saturday morning.  Make all checks payable to the &ldquo;Tennis Club  at the University of Florida&rdquo;.  </p>
  <p><strong>Other</strong> <strong>Info</strong>:   T-shirts will be provided for all participants, trophies for 1st  &amp; 2nd.  If you need any  additional information regarding the tournament or if you have signed up, but can no longer attend you can email me at <a href="mailto:aadecker91@gmail.com">aadecker91@gmail.com</a> or call (850)  819-9130.  Draws/match times will be  available on this page Thursday before the tournament. All entry fees go to the University of Florida Club Tennis Team.  </p>
  <p>&nbsp;</p>
  <div class="content2"></div>
    <h2>Draws:</h2>
    <p>The spreadsheet below includes all of the men's, women's, and mixed draws. Please be at the courts at least 30 minutes prior to your scheduled match time. The entry fee for the womens singles and doubles will be reduced by 10 dollars per event because of the small draw size (this does not include mixed doubles). If there are any mistakes or problems with the draws please contact me as soon as possible so I can fix it!    </p>
    <p>&nbsp;</p>
    <p><a href="Draws.xlsx">Gator Classic Draws</a><!-- end .content --></p>
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
<?php
//mysql_free_result($rsRoster);
?>

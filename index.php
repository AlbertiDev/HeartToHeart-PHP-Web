<?php include ('inc/db_con.php'); 

//Kalkulimi i vizites se fundit deri ne 60 dit
//sekondat * minutat * oret * ditet + koha e tanishme
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Heart to Heart</title>
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body>
<div id="main">

<?php include "inc/header.php"?>
<div id="katrori">
<?php
					switch (@$_GET['faqe'])
					{
					case "home":
						include('home.php');
						break;
					case "contact":
						include('contacts.php');
						break;
					case "login":
						include('login.php');
						break;
					case "gallery":
						include('Gallery.php');
						break;
					case "services":
						include('Services.php');
						break;
					case "logout":
						include('logout.php');
						break;
					case "shfaqkontaktet":
						include('shfaqkontaktet.php');
						break;
					case "about":
						include('about.php');
						break;
					case "shtolajm":
						include('shtolajm.php');
						break;
					case "lajme":
					include('lajme.php');
					break;
					default:
						include('home.php');
						break;
					}
					?>
</div>

<?php include "inc/footer.php"?>

</div>
</body>
</html>

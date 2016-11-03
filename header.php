<?php
function active($currect_page){
 $url_array =  explode('/',$_SERVER['PHP_SELF']) ;
 $url = end($url_array);  
 if($currect_page == $url){
     echo "li--currentPage"; //class name in css 
 }	else {
 	echo "navigation";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>

	<div class="header">
		<img src="Images/logo.png" class="header-logo">
			<ul class="navigation">
				<li class="navigation__link"><a href="homepage.php">Home</a></li>
				<li class="navigation__link"><a href="pricing.php">Pricing</a></li>
				<li class="navigation__link"><a href="staff.php">Masseurs</a></li>
				<li class="navigation__link"><a href="services.php">Services</a></li>
				<li class="navigation__link"><a href="contacts.php">Contacts</a></li>
				<li class="navigation__link"><a href="booking.php">Book an appointment</a></li>
			</ul>
	</div>
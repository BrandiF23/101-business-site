<?php
function active($currect_page){
 $url_array =  explode('/',$_SERVER['PHP_SELF']) ;
 $url = end($url_array);  
 if($currect_page == $url){
     echo "navigation__link--currentPage"; //class name in css 
 }	else {
 	echo "navigation__link";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Habibi|Lustria|Merriweather:300,400,400i|Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
</head>
<body>

	<div class="header">
		<img src="Images/logo.png" class="header-logo">
			<ul class="navigation">
				<li class="navigation__item">
					<a class="<?php active('homepage.php');?>" href="homepage.php">Home</a></li>
				<li class="navigation__item">
					<a class="<?php active('pricing.php');?>" href="pricing.php">Pricing</a></li>
				<li class="navigation__item">
					<a class="<?php active('staff.php');?>" href="staff.php">Masseurs</a></li>
				<li class="navigation__item">
					<a class="<?php active('services.php');?>" href="services.php">Services</a></li>
				<li class="navigation__item">
					<a class="<?php active('contact.php');?>" href="contact.php">Contacts</a></li>
				<li><a href="booking.php" class="button">Book an appointment</a></li>
			</ul>
	</div>
<?php include ('header.php'); ?>
<div class="container">

<div class="contact-wrapper">

	<div class="find-us">
		
		<div class="find-us__text">Find Us
		</div>

		<div class="contacts-main">

			<div class="contact-info">
				<i class="contact-info__image | fa fa-map-o"></i>
				<div class="contact-info__title">
					Address:
				</div>
				<div class="contact-info__detail">
					1163 N State St.<br>
					Chicago, IL 69610
				</div>
			</div>

			<div class="contact-info">
				<i class="contact-info__image | fa fa-phone"></i>
				<div class="contact-info__title">
					Call Today:
				</div>
				<div class="contact-info__detail">
					555-123-5353<br>
					555-123-2323
				</div>
			</div>

			<div class="contact-info">
				<i class="contact-info__image | fa fa-envelope-o"></i>
				<div class="contact-info__title">
					E-mail:
				</div>
				<div class="contact-info__detail">
					<a href="info@demolink.org">info@demolink.org</a>
				</div>
			</div>
					
			<div class="contact-info">
				<i class="contact-info__image | fa fa-clock-o"></i>
				<div class="contact-info__title">
					Opening Hours:
				</div>
				<div class="contact-info__detail">
					Mon-Fri: 9am-6pm;<br>
					Sun: 10am-1pm
				</div>
			</div>
		</div>
		<a href="booking.php" class="booking-button">Book an appointment</a>
	</div>
	
	
	<div class="contact-us-page">

		<div class="contact-us-page__text">Get is touch with us
		</div>

		<form class="contact-us-page__form">
				
			<div class="contact-us-page__top">
				<div class="column">
					<label>Your Name *</label><br>
					<input class="contact-us-page__top-left" type="text" name="">
				</div>

				<div class="column">
					<label>Subject</label><br>
					<input class="contact-us-page__top-right" type="text" name="">
				</div>
			</div>

					<label>Email address *</label>
					<input class="contact-us-page__email" type="text" name=""><br>

					<label>Your message *</label>
					<p><textarea rows="15" class="contact-us-page__message"></textarea></p>
					<input class="contact-us-page__submit" type="submit" name="Submit">

			</form>
	</div>


</div>

<div class="google-map">
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:1600px;'><div id='gmap_canvas' style='height:440px;width:1600px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="http://diensten-vakmensen.marktplaats.nl/a/diensten-en-vakmensen/reparatie-en-onderhoud-sloten/1577921-slotenmaker-middelburg.html">Middelburg Slotenmaker</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(41.2461102,-95.93364780000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.2461102,-95.93364780000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Fiona Salon</strong><br>1258 S 13th St, Omaha, NE 68108<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
</div>
<?php include ('footer.php'); ?>

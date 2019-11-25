<!DOCTYPE html>
<html lang="he">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    	<meta name="viewport" content="width=device-width"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/Grid.css">
		<link rel="stylesheet" type="text/css" href="css/effects.js">
		<link rel="stylesheet" type="text/css" href="css/screenSizes.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap" rel="stylesheet">
		<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    </head>
	<?php
		if (isset($_GET['success']) && $_GET['success'] == 1){
			echo '<body onload="sweetAlertEmailSent()">';
		}
		if (isset($_GET['success']) && $_GET['success'] == -1){
			echo '<body onload="sweetAlertEmailNotSent()">';
		}
	?>
    <body>
        <header>
			<img src="css/images/logo.jpg" alt="ali-baer logo" class="logoimg">
			<div class="row">
				<div class="headline">
					<h1>ברוכים הבאים לעלי&#45;באר</h1>
            		<h4>אגודת המים השיתופית ביבנאל</h4>
					<nav>
						<div class="row">
							<ul class="main-nav">
								<li><a href="#contact">צור קשר<br><i class="icon ion-ios-call icons"></i></a></li>
								<li><a href="#send-note">פתיחת פנייה<br><i class="icon ion-ios-mail icons"></i></a></li>
								<li><a href="#rates">תעריפים<br><i class="icon ion-ios-trending-up icons"></i></a></li>
								<li><a href="#water-quality">איכות המים<br><i class="icon ion-ios-flask icons"></i></a></li>
								<li><a href="#payment">תשלום חשבונות<br><i class="icon ion-ios-card icons"></i></a></li>
							</ul> 
						</div>
					</nav>
				</div>
			</div>
		</header>
		
		
		<section class="map-and-address" id="contact">
            <div class="row">
                <h3>צור קשר</h3>        
            </div>
            <div class="row">
				<div class="col span-1-of-2">
					<div id="map"></div>
					 <script>
						// Initialize and add the map
						function initMap() {
						  // The location of Aly-baer
						  var Alybaer = {lat: 32.706848, lng: 35.503366};
						  // The map, centered at Aly-baer
						  var map = new google.maps.Map(
							  document.getElementById('map'), {zoom: 17, center: Alybaer});
						  // The marker, positioned at Aly-baer
						  var marker = new google.maps.Marker({position: Alybaer, map: map});
						}
							</script>
							<script async defer
							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcyvbuvcmFKG6U4lfT_I6EAFeI7LVd2OM&callback=initMap">
							</script>
				</div>
				<div class="col span-1-of-2">
					 <div class="address">
						 <p>דרך המושבות ליד המועצה<br>יבנאל<br>תא דואר 340<br>טלפון 04-6708333</p>
					</div>	
				</div>
			</div>
        </section>

		
		<section class="send-note" id="send-note">
			<div class="row">
				<h3>פתיחת פנייה</h3>
			</div>
			<div class="row">
					
				
				
				
					<form method="post" action="mailer.php" class="open-note">
						<div class="row">
							<div class="col span-1-of-2">
								<input type="text" name="first_name" required>
							</div>
							<div class="col span-1-of-2 note-text">
								<label for="first_name"><h2>שם פרטי</h2></label>
							</div>
							
						</div> 
						
						<div class="row">
							<div class="col span-1-of-2">
								<input type="text" name="last_name" required>
							</div>
							<div class="col span-1-of-2 note-text">
								<label for="last_name"><h2>שם משפחה</h2></label>
							</div>
							
						</div>
						
						<div class="row">
							<div class="col span-1-of-2">
								<input type="text" name="phone" required>
							</div>
							<div class="col span-1-of-2 note-text">
								<label for="phone"><h2>טלפון</h2></label>
							</div>
							
						</div>
						
						<div class="row">
							<div class="col span-1-of-2">
								<textarea name="comments" maxlength="500"></textarea>
							</div>
							<div class="col span-1-of-2 note-text">
								<label for="comments"><h2>תוכן הפנייה</h2></label>
							</div>
						</div>
			
						<button>שלח</button>
					</form>
				</div>
		</section>
	
		<section class="rates" id="rates">
			<div class="row">
				<h3>תעריפים</h3>
				<div class="row">
					<p>תושבים יקרים! <br>כל יחידת דיור זכאית לכמות של 7 מ"ק לחודשיים, בתעריף נמוך של 6.5462 ש"ח, עבור כל נפש המתגוררת דרך קבע ביחידת הדיור ואשר לגביה נמסר דיווח לתאגיד.<br>יחידת דיור בה מגוררת נפש אחת זכאית ל14 מ"ק לחודשיים בתעריף נמוך.<br>כל כמות מים נוספת שנצרכה מעבר לכמות המוכרת, בתחוייב בתעריף של 12.327 ש"ח למ"ק.</p>
				</div>
				<div class="row">
					<table border="1">
					  <tr>
						  <th><h2>תעריף גבוה (למ"ק בשקלים כולל מע"מ)</h2></th>
						<th><h2>תעריף נמוך (למ"ק בשקלים כולל מע"מ)</h2></th> 
						<th><h2>מתאריך</h2></th>
					  </tr>
					  <tr>
						<td><h2>12.327</h2></td>
						<td><h2>6.5462</h2></td>
						<td><h2>01.06.17</h2></td>
					  </tr>
					  <tr>
						<td><h2>12.327</h2></td>
						<td><h2>7.659</h2></td>
						<td><h2>01.01.17</h2></td>
					  </tr>
					  <tr>
						<td><h2>12.327</h2></td>
						<td><h2>7.659</h2></td>
						<td><h2>01.07.16</h2></td>
					  </tr>
						 <tr>
						<td><h2>12.355</h2></td>
						<td><h2>7.676</h2></td>
						<td><h2>01.01.16</h2></td>
					  </tr>
					</table>
				
				</div>
			</div>
		</section>
		
		<section class="water-quality" id="water-quality">
			<div class="row">
				<h3>איכות המים</h3>
			</div>
			<div class="row">
				<p>תושבים יקרים!<br>לרשותכם, משרד הבריאות פיתח מערכת מקוונת חדשה "המים שלי", להצגת איכות המים ברשת אספקת המים הארצית וביציאה ממתקני ההתפלה והסינון הארציים.<br>למעבר למערכת "המים שלי":<br><a href="https://my.health.gov.il/MyPortal/QdWater/Pages/WaterNetwork.aspx?CityID=46" target="_blank">המים שלי</a></p>
			</div>
		</section>
		
		<section class="payment" id="payment">
			<div class="row">
				<h3>תשלום חשבון המים</h3>
			</div>
			<form method="post" class="get-user-id">
				<div class="row">
					<div class="col span-1-of-2">
						<input type="text" name="id-or-company" required>
					</div>
					<div class="col span-1-of-2 note-text">
						<label for="first_name"><h2>תעודת זהות \ ח"פ</h2></label>
					</div>		
				</div> 
			</form>
			<div class="row">
				<button onclick="sweetAlertClicknotAvalible()">לתשלום</button>
			</div>		
		</section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="css/js/effects.js"></script>
		<script src="css/js/sweetalert.min.js"></script>
<!--		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->

	</body> 
</html>
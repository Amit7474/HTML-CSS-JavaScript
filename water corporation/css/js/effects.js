/*--- Smooth scroll ---*/
$(document).ready(function(){
// Add smooth scrolling to all links
	$("a").on('click', function(event) {
// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		 // Prevent default anchor click behavior
			event.preventDefault();

		// Store hash
			var hash = this.hash;
		  // Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){

		// Add hash (#) to URL when done scrolling (default click behavior)
		window.location.hash = hash;
		 });
		} // End if
	 });
});

//Payment function is not avalible

function sweetAlertClicknotAvalible(){
	swal({
	  title: "מצטערים, השירות לא זמין כעת",
	  text: "",
	  icon: "info",
	  button: "Ok",
	});
}

//Email sent alert

function sweetAlertEmailSent(){
	swal({
	  title: "תודה רבה!",
	  text: "פנייתך נשלחה ותטופל בהקדם",
	  icon: "success",
	  button: "Ok",
	});
}

//Email didnt sent alert


function sweetAlertEmailNotSent(){
	swal({
	  title: "אופסס.. משהו קרה",
	  text: "פנייתך לא נשלחה, נסה שוב מאוחר יותר",
	  icon: "error",
	  button: "Ok",
	});
}
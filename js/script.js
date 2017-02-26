$(document).ready(function(){
	$('#contact-us').submit(function(xx){
	    xx.preventDefault(); 
	    sendContactRequest();
	    return false;
	});
});

function sendContactRequest() {
    // console.log($('form').serialize());
    $.ajax({
        url: 'contact-us.php',
                type: 'POST',
                data: $('#contact-us').serialize(),
                success: function(response) {
                    alert("Your email has been sent. Thank you!");
                }
    });
}
$(document).ready(function() {
	$("#send-contact").click(function() {
		var services = [];
		$('.services:ckecked').each(function(index) {
			services [index] = $(this).val();
		});
		var contact = {customername: $("#customername").val() ,
		 customeremail: $("#customeremail").val() , services: services
		};
		
		// console.log(contact);
		$.ajax({
			type:"POST",
			url: 'send-contact.php',
			data:contact
		}).done(function() {
			alert("Your contact information has been sent")
		});
	});
});
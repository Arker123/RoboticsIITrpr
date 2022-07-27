$('#submit-it').click(function(){
	var first = $('#first-name').val();
	var last = $('#last-name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
	var more = $('#more').val();
	
	var count = 0;
	
	if(first=='')
	{
		window.scrollTo(0, 0);
		$('#first-name').css("border-bottom","solid 2px #cc3b3b");
		$('#first-err').html("Enter First Name");
		$('#first-err').css("color","#cc3b3b");
		count+=1;
	}
	if (last == '')
	{
		window.scrollTo(0, 0);
		$('#last-name').css("border-bottom","solid 2px #cc3b3b");
		$('#last-err').html("Enter Last Name");
		$('#last-err').css("color","#cc3b3b");
		count+=1;
	}
	if (email == '')
	{
		window.scrollTo(0, 0);
		$('#email').css("border-bottom","solid 2px #cc3b3b");
		$('#email-err').html("Enter Email");
		$('#email-err').css("color","#cc3b3b");
		count+=1;
	} 
	else
	{
		function ValidateEmail(inputText)
		{
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(inputText.match(mailformat))
			{
				//valid
				return true;
			}
			else
			{
				//invalid
				return false;
			}
		}
		
		if(ValidateEmail(email) == false)
		{
			window.scrollTo(0, 0);
			$('#email').css("border-bottom","solid 2px #cc3b3b");
			$('#email-err').html("Enter Valid Email");
			$('#email-err').css("color","#cc3b3b");
			count+=1;
		}
	}
	
	if (phone == '')
	{
		window.scrollTo(0, 0);
		$('#phone').css("border-bottom","solid 2px #cc3b3b");
		$('#phone-err').html("Enter Phone Number");
		$('#phone-err').css("color","#cc3b3b");
		count+=1;
	}

	if (more == '')
	{
		window.scrollTo(0, 0);
		$('#more').css("border-bottom","solid 2px #cc3b3b");
		$('#more-err').html("Fill out this field");
		$('#more-err').css("color","#cc3b3b");
		count+=1;
	}
	
	
	if(count == 0)
	{
		var action = 'contact';
		
		$.ajax({
		type: "POST",
		url: "support/s_contact.php",
		data: { action:action, first:first, last:last, email:email, phone:phone, more:more},
		
		success:function(data){
			window.scrollTo(0, 0);
			console.log(data);
			if(data=="success")
			{
				$('#error').html("<div class='alert alert-success'>I will contact you soon 🙂</div>");
				$('#first-name').val('');
				$('#last-name').val('');
				$('#email').val('');
				$('#phone').val('');
				$('#more').val('');
				$('#more-err').val('');
				$('#phone-err').val('');
				$('#email-err').val('');
				$('#first-err').val('First Name');
				$('#last-err').val('Last Name');
			}
			else if(data == "error")
			{
				$('#error').html("<div class='alert alert-danger'>Some Error Occured</div>'");
			}
			else
			{
				$('#error').html("<div class='alert alert-danger'>Serious Error Occured</div>");
				//$('#error').html(data);
			}
		}
	  });
	}
});
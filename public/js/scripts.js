 $(function() {
 
 //function to check valid  file extension during profille pic upload in registration
    $('#profilePic').change(
        function()
 
         {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1)
			{
                alert("Only '.jpeg','.jpg', '.png', '.gif' and '.bmp' formats are allowed.");
				//reset input field
				var input = document.getElementById("profilePic");
				input.value = "";
			}
 

        })
		
		
		
    })
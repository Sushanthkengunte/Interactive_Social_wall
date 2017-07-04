$('input#name-submit').on('click', function(){
	var nameTyped = $('input#name').val();
	//alert(nameTyped);
	if($.trim(nameTyped) != ''){
		$.post('Ajax/name.php',{name:nameTyped},function(data){
			$('div.name_data').text(data);
			//alert("Data: " + data);

		});
	}
	
});

$(function(){
    $('#upl_Clckd').click(function() {
        alert(1);
    });


   /* var loadimage = function(event){
    	var output = document.getElementById('img_output');
    	output.src = URL.createObjectURL(event.target.files[0]);

    }*/
});

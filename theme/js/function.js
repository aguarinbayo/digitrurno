
	
	$(document).ready(function(){
	$('#submit').click(function(){
		var data=$("#form").serialize();

           $.ajax({
            type:'get',
             url:'./theme/data/session.php',
             data: data,
             success: function(data) {

             			if(data){
             				$("#text").html(data);
             			}else{
             				window.location.href="theme/panel.php";
             			}
             		
               }
        });

	});

	$('.table_teclado tr td').click(function(){
		var number = $(this).text();
		
		if (number == '')
		{
			$('#cedula').val($('#cedula').val().substr(0, $('#cedula').val().length - 1)).focus();
		}
		else
		{
			$('#cedula').val($('#cedula').val() + number).focus();
		}

	});

		});


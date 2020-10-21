$(document).ready(function(){
	$('#procesar').submit(guardar);
})

function guardar(e)
{
	e.preventDefault();
	$.ajax({
		url: 'scripts/atender.php',
		type: 'POST',
		data: $(this).serializeArray()
	}).done(function(resp){
        location. reload();
    })
}
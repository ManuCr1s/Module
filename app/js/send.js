$(document).ready(function(){
	$('#tramite').submit(guardar);
})

function guardar(e)
{
	e.preventDefault();
	$.ajax({
		url: 'scripts/procesar.php',
		type: 'POST',
		data: $(this).serializeArray()
	}).done(function(resp){
        location. reload();
    })
}
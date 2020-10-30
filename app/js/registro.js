$(document).ready(function(){
    $("#dates_user").submit(enviar);
    let dato = $("#pass_confirme").val();
    console.log(dato);
})
let enviar = function(e){
    e.preventDefault();
	$.ajax({
		url: 'scripts/registro_persona.php',
		type: 'POST',
		data: $(this).serializeArray()
	}).done(function(resp){
        alert(resp);
        location.reload();
    })
}
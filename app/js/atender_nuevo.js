$(document).ready(function() {
    listar();
    $("#tramitar").submit(guardar);
    $("#descarga").submit(descarga);
});
let listar = function(){
    let table = $('#tablas').DataTable({
        "ajax":{
            "method":"POST",
            "url":'scripts/nuevo.php'
        },
        "columns":[
            {"data":"id_reclamo"},
            {"data":"fecha"},
            {"data":"nombre_usuario"},
            {"defaultContent":'<div class="bg-danger caja"></div>'},
            {"defaultContent":'<button type="button" class="editar btn btn-warning" data-toggle="modal" data-target="#edit">ATENDER</button>'},
            {"defaultContent":'<button type="button" class="pdf btn btn-primary" data-toggle="modal" data-target="#pdf">EN PDF</button>'}
        ], 
    });
    obtener_data("#tablas tbody",table);
    pdf('#tablas tbody',table);
}
let obtener_data =function(tbody,table){
    $(tbody).on("click","button.editar",function(){
        var data = table.row($(this).parents("tr")).data();
        var id_reclamo = $("#id_reclamo").val(data.id_reclamo);
        var fecha = $("#fecha").val(data.fecha);
        var nombre = $("#nombre").val(data.nombre_usuario);
        var numero_documento = $("#numero_documento").val(data.numero_documento);
        var unidad = $("#unidad").val(data.nombre);
        var area = $('#area').val(data.nombre_area);
        var detalle = $('#detalle').val(data.detalles);
        var registro = $("#registro").val(data.id_reclamo);
    });   
}
let pdf = function(tbody,table){
    $(tbody).on( 'click', 'button.pdf', function () {
        var data = table.row($(this).parents("tr")).data();
        var id= $('#row_valor').val(data.id_reclamo);
    } );
}
function guardar(e)
{
	e.preventDefault();
	$.ajax({
		url: 'scripts/atender_nuevo.php',
		type: 'POST',
		data: $(this).serializeArray()
	}).done(function(resp){
        location.reload();
    })
}
function descarga(e)
{
	e.preventDefault();
    $.ajax({
        method:"POST",
        data:$(this).serializeArray(),
        dataType: 'native',
        url: "scripts/imprimir.php",
        xhrFields: {
          responseType: 'blob'
        }
    }).done(function(blob){
        console.log(blob.size);
          var link=document.createElement('a');
          link.href=window.URL.createObjectURL(blob);
          link.download="Reclamo_" + new Date() + ".pdf";
          link.click();

    });
}
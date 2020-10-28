$(document).ready(function() {
    listar();
    $('#tramite').submit(guardar);
    $("#descarga").submit(descarga);
});
let listar = function(){
    let table = $('#tablas').DataTable({
        "ajax":{
            "method":"POST",
            "url":'scripts/procesado.php'
        },
        "columns":[
            {"data":"id_reclamo"},
            {"data":"fecha"},
            {"data":"nombre_usuario"},
            {"defaultContent":'<div class="bg-warning caja"></div>'},
            {"defaultContent":'<button type="button" id="editar" class="btn btn-success" data-toggle="modal" data-target="#edit">ATENDER</button>'},
            {"defaultContent":'<button type="button" class="pdf btn btn-primary" data-toggle="modal" data-target="#pdf">EN PDF</button>'}
        ],
    });
    obtener_data("#tablas tbody",table);
    pdf('#tablas tbody',table);
}
let obtener_data =function(tbody,table){
    $(tbody).on("click","button#editar",function(){
        var data = table.row($(this).parents("tr")).data();
        var fecha = $('#reclamo').val(data.id_reclamo);
        var fecha = $('#usuario').val(data.nombre_usuario);
        var fecha = $('#fecha').val(data.fecha);
        var fecha = $('#numero').val(data.numero_documento);
        var unidad = $('#unidad').val(data.nombre);
        var area = $('#area').val(data.nombre_area);
        var fecha = $('#detalle').val(data.detalles);
        var estado = $('#estado').val(data.estado);
        var estado = $('#rec').val(data.id_reclamo);
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
		url: 'scripts/atender_enproceso.php',
		type: 'POST',
		data: $(this).serializeArray()
	}).done(function(resp){
        location. reload();
    })
}
function descarga(e)
{
	e.preventDefault();
    $.ajax({
        method:"POST",
        data:$(this).serializeArray(),
        dataType: 'native',
        url: "scripts/imprimir_enproceso.php",
        xhrFields: {
          responseType: 'blob'
        }
    }).done(function(blob){
        console.log(blob.size);
          var link=document.createElement('a');
          link.href=window.URL.createObjectURL(blob);
          link.download="Informe_" + new Date() + ".pdf";
          link.click();

    });
}
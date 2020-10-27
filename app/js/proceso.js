$(document).ready(function() {
    listar();
});
let listar = function(){
    let table = $('#tablas').DataTable({
        "ajax":{
            "method":"POST",
            "url":'scripts/proceso.php'
        },
        "columns":[
            {"data":"id_reclamo"},
            {"data":"fecha"},
            {"data":"nombre_usuario"},
            {"defaultContent":'<div class="bg-warning caja"></div>'},
            {"defaultContent":'<button id="editar" class="btn btn-success" data-toggle="modal" data-target="#edit">Procesar</button>'},
        ]
    });
    obtener_data("#tablas tbody",table);
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

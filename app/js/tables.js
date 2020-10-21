$(document).ready(function() {
    listar();
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
            {"defaultContent":'<button id="editar" class="btn btn-warning" data-toggle="modal" data-target="#edit">Procesar</button>'},
            {"defaultContent":'<button id="pdf" class="btn btn-success" data-toggle="modal" data-target="#pdf">PDF</button>'}
        ], 
    });
    obtener_data("#tablas tbody",table);
    pdf("#tablas tbody",table);
}
let obtener_data =function(tbody,table){
    $(tbody).on("click","button#editar",function(){
        var data = table.row($(this).parents("tr")).data();
        var id = $('#id').val(data.id_reclamo);
        var fecha = $('#fecha').val(data.fecha);
        var estado = $('#estado').val(data.estado);
        var f =  new Date(data.fecha);
        if((sumarDias(f,31).getDate()) < 10){
            var fecha_limite = sumarDias(f,31).getFullYear()+'-'+sumarDias(f,31).getMonth()+'-0'+sumarDias(f,31).getDate();
        }else{
            var fecha_limite = sumarDias(f,31).getFullYear()+'-'+sumarDias(f,31).getMonth()+'-'+sumarDias(f,31).getDate();
        }
        var fecha_limite= $('#fecha_limite').val(fecha_limite);
    });   
}
function sumarDias(fecha, dias){
    fecha.setDate(fecha.getDate() + dias);
    return fecha;
}
let pdf = function(tbody,table){
    $(tbody).on('click',"button#pdf",function(){
        var data = table.row( $(this).parents("tr")).data();
        var id=data.id_reclamo;
        });
}


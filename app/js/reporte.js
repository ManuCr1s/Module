$(document).ready(function() {
    listar;
});
let listar= function(){
    let table = $('#reporte').DataTable({
        "ajax":{
            "method":"POST",
            "url":'scripts/enviado.php'
        },
        "columns":[
            {"data":"id_reclamo"},
            {"data":"fecha"},
            {"data":"nombre_usuario"},
            {"defaultContent":'<div class="bg-success caja"></div>'},
            {"defaultContent":'<button type="button" class="pdf btn btn-warning px-4 mb-2" data-toggle="modal" data-target="#pdf">INFORME COMPLETO</button><button type="button" class="pdf btn btn-primary px-3" data-toggle="modal" data-target="#pdf">INFORME PARA ENVIAR</button>'},
        ],
    });
}

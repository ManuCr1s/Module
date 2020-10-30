$(document).ready(function() {
    listar_enviadas();
    listar_noenviadas();
    $("#descarga").submit(descarga);
});
let listar_enviadas= function(){
    let table = $('#enviadas').DataTable({
        "ajax":{
            "method":"POST",
            "url":'scripts/enviado.php'
        },
        "columns":[
            {"data":"id_reclamo"},
            {"data":"fecha"},
            {"data":"nombre_usuario"},
            {"defaultContent":'<div class="bg-success caja"></div>'},
            {"defaultContent":'<button type="button" class="pdf btn btn-warning px-4 mb-2" data-toggle="modal" data-target="#pdf">INFORME COMPLETO</button><button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#pdf">INFORME PARA ENVIAR</button>'},
        ],
    });
    pdf('#enviadas tbody',table);
}

let listar_noenviadas= function(){
    let table = $('#no_enviadas').DataTable({
        "ajax":{
            "method":"POST",
            "url":'scripts/noenviado.php'
        },
        "columns":[
            {"data":"id_reclamo"},
            {"data":"fecha"},
            {"data":"nombre_usuario"},
            {"defaultContent":'<div class="bg-success caja"></div>'},
            {"defaultContent":'<button type="button" class="pdf btn btn-warning px-4 mb-2" data-toggle="modal" data-target="#pdf">INFORME COMPLETO</button><button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#pdf">INFORME PARA ENVIAR</button>'},
            {"defaultContent":'<button type="button" class="enviar btn btn-secondary" data-toggle="modal" data-target="#enviar">ENVIAR</button>'},
        ],
    });
    pdf('#no_enviadas tbody',table);
}
let pdf = function(tbody,table){
    $(tbody).on( 'click', 'button.pdf', function () {
        var data = table.row($(this).parents("tr")).data();
        var id= $('#row_valor').val(data.id_reclamo);
    } );
}
function descarga(e)
{
	e.preventDefault();
    $.ajax({
        method:"POST",
        data:$(this).serializeArray(),
        dataType: 'native',
        url: "scripts/imprimir_informe.php",
        xhrFields: {
          responseType: 'blob'
        }
    }).done(function(blob){
        console.log(blob.size);
          var link=document.createElement('a');
          link.href=window.URL.createObjectURL(blob);
          link.download="Informe_Final_" + new Date() + ".pdf";
          link.click();

    });
}
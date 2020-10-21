$(document).ready(function() {
    listar();
});
let listar = function(){
    let table = $('#tablas').DataTable({
        "ajax":{
            "method":"POST",
            "url":'scripts/atendido.php'
        },
        "columns":[
            {"data":"id_reclamo"},
            {"data":"fecha"},
            {"data":"nombre_usuario"},
            {"defaultContent":'<div class="bg-success caja"></div>'},
            {"defaultContent":'<a href="scripts/imprimir.php" id="pdf" class="btn btn-success">PDF</a>'},
        ],
    });
    obtener_data("#tablas tbody",table);
    pdf("#tablas tbody",table);
}
let pdf = function(tbody,table){
    $(tbody).on("click","a#pdf",function(){
        var data = table.row($(this).parents("tr")).data();
        var id = data.id_reclamo;
        $.ajax({
            url:"scripts/imprimir.php",
            type:"POST",
            data:{id:id}
        })
    });
}
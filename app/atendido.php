<?php
require_once "layouts/header.php";
?>
<div class="container-fluid">
    <div class="row vh-100">
        <?php 
            require_once "layouts/nav_lateral.php";
        ?>
        <div class="col-9 py-3 px-5">
        <h2 class="text-center mb-4">Reclamos Atendidos</h2>
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active text-secondary" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">RESPUESTAS PARA ENVIAR</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-secondary" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">RESPUESTAS ENVIADAS</a>
            </li>
        </ul>
        <div class="tab-content border p-2" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
                <table id="no_enviadas" class="table" cellspacing="0" width="100%">
                    <thead>
                            <tr>
                            <th class="th-sm">N°
                            </th>
                            <th class="th-sm">Fecha
                            </th>
                            <th class="th-sm">Nombre
                            </th>
                            <th class="th-sm">Estado
                            </th>
                            <th class="th-sm">Informe en PDF
                            </th>
                            <th class="th-sm">Enviar al Usuario
                            </th>
                            </tr>
                    </thead>
                </table>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
                <table id="enviadas" class="table" cellspacing="0" width="100%">
                    <thead>
                            <tr>
                            <th class="th-sm">N°
                            </th>
                            <th class="th-sm">Fecha
                            </th>
                            <th class="th-sm">Nombre
                            </th>
                            <th class="th-sm">Estado
                            </th>
                            <th class="th-sm">Informe en PDF
                            </th>
                            </tr>
                    </thead>
                </table>

            </div>
          
        </div>

<!-- Modal de formulario PDF-->
<div class="modal fade" id="pdf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">DESCARGAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>   
      </div>
      <div class="modal-body">
            <form id="descarga">
                <div class="form-row d-flex justify-content-center m-2">
                        <input type="text" class="form-control" id="row_valor" name="id">
                        <label>¿Desea descargar reclamo?</label>
                </div>
                <div class="form row d-flex justify-content-center">
                    <button type="button" class="mx-2 px-4 btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="mx-2 btn btn-success">Descargar</button>
                </div>
            </form>
      </div>
     
    </div>
  </div>
</div>

<!-- Modal de formulario para Enviar Correro-->
<div class="modal fade" id="enviar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">ENVIAR CORREO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="text-white bg-secondary p-2">Reclamacion</h6>
                        <div class="form-row p-2">
                            <div class="form-group">
                                <label for="">Numero de Reclamacion</label>
                                <input type="text" class="form-control" id="id_reclamo">                              
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de Reclamacion</label>
                                <input type="text" class="form-control" id="fecha">
                            </div>
                        
                        </div>
                        <h6 class="text-white bg-secondary p-2">Detalle del Agraviado</h6>
                        <div class="form-row p-2">
                            <div class="form-group col-12">
                                <label for="">Nombre del Usuario</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            
                            <div class="form-group col-12">
                                <label for="">Correo</label>
                                <input type="text" class="form-control" id="numero_documento">
                            </div>
                        </div>                        
                        <h7 class="text-white bg-warning p-2">Enviar Correo  (   Informacion de la notificación del reclamo   )</h7>
                            <form id="tramitar">
                                    <div class="form-row m-2">
                                        <input type="text" class="d-none" name="id_reclamo" id="registro"> 
                                        <div class="form-group col-12">
                                            <label for="">Nombre </label>
                                            <input type="text" class="form-control" name="persona" required>
                                        </div>
                                    </div>
                                    <div class="form-row m-2">
                                        <div class="form-group col-12">
                                            <label for="">Correo</label>
                                            <input type="text" class="form-control" name="dni" required>
                                        </div>
                                    </div>
                                    <div class="form-row m-2">
                                        <div class="form-group col-12">
                                            <label for="">Fecha de la notificación</label>
                                            <input type="date" class="form-control" name="fecha" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                            </form>
                    </div>
            </div>
        </div>
</div>

        
        </div>
    </div>
</div>

</body>
<?php require_once "layouts/footer.php";?>
<script src="js/jquery-ajax-native.js"></script>
<script src="js/atendido.js"></script> 
</html>
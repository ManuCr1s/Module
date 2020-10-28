<?php
require_once "layouts/header.php";
?>
<div class="container-fluid">
    <div class="row vh-100">
        <?php 
            require_once "layouts/nav_lateral.php";
        ?>
        <div class="col-9 py-3 px-5">
        <h2 class="text-center mb-4">Reclamos en Proceso</h2>
        <table id="tablas" class="table" cellspacing="0" width="100%">
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
                    <th class="th-sm">Tramite
                    </th>
                    <th class="th-sm">Informe
                    </th>
                    </tr>
            </thead>
        </table>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">ATENDER RECLAMO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="text-white bg-secondary p-2">Reclamacion</h6>
                        <div class="form-row p-2">
                            <div class="form-group">
                                <label for="">Numero de Reclamacion</label>
                                <input type="text" class="form-control" id="reclamo">                              
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
                                <input type="text" class="form-control" id="usuario">
                            </div>
                            
                            <div class="form-group col-12">
                                <label for="">Numero de documento</label>
                                <input type="text" class="form-control" id="numero">
                            </div>
                        </div>
                        <h6 class="text-white bg-secondary p-2">Detalle del Reclamo</h6>
                        <div class="form-row p-2">
                            <div class="form-group col-12">
                                <label for="">Unidad Implicada</label>
                                <input type="text" class="form-control" id="unidad">
                            </div>
                        </div>  
                        <div class="form-row p-2">
                            <div class="form-group col-12">
                                <label for="">Area Implicada</label>
                                <input type="text" class="form-control" id="area">
                            </div>
                        </div>
                        <div class="form-row p-2">
                            <div class="form-group col-12">
                                <label for="">Detalles</label>
                                <textarea class="form-control" id="detalle" cols="30" rows="5" ></textarea>
                            </div>
                        </div>
                        <h7 class="text-white bg-success p-2">Atender Reclamo  (   Informacion de la resolucion del reclamo   )</h7>
                            <form id="tramite">
                                    <div class="form-row m-2">
                                        <input type="text" class="d-none" name="id_reclamo" id="rec"> 
                                        <div class="form-group col-12">
                                            <label for="">Nombre del responsable de la Unidad o Area Implicada</label>
                                            <input type="text" class="form-control" name="persona" required>
                                        </div>
                                    </div>
                                    <div class="form-row m-2">
                                        <div class="form-group col-12">
                                            <label for="">DNI del responsable de la Unidad o Area Implicada</label>
                                            <input type="text" class="form-control" name="dni" required>
                                        </div>
                                    </div>
                                    <div class="form-row m-2">
                                        <div class="form-group col-12">
                                            <label for="">Conclusion del reclamo</label>
                                            <select name="conclusion" id="" class="form-control">
                                                <option value="fundado">FUNDADO</option>
                                                <option value="improcedente">IMPROCEDENTE</option>
                                                <option value="infundado">INFUNDADO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row m-2">
                                        <div class="form-group col-12">
                                            <label for="">Detalle la conclusion del reclamo</label>
                                            <textarea class="form-control" name="detalle" cols="30" rows="5" required></textarea>
                                        </div> 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Atender</button>
                                    </div>
                            </form>
                    </div>
            </div>
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

</body>
<?php require_once "layouts/footer.php";?>
<script src="js/jquery-ajax-native.js"></script>
<script src="js/atender_enproceso.js"></script> 
</html>
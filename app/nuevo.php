<?php
require_once "layouts/header.php";
?>
<div class="container-fluid">
    <div class="row vh-100">
        <?php 
            require_once "layouts/nav_lateral.php";
        ?>
        <div class="col-9 py-3 px-5">
        <h2 class="text-center mb-4">Reclamos Pendientes</h2>
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
                    <th class="th-sm">pdf
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
                    <h5>PROCESAR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="procesar">
                    <div class="form-row justify-content-around">
                        <div class="form-group">
                            <label>Fecha del Reclamo</label>
                            <input class="d-none" type="text" name="id" id="id"> 
                            <input class="d-none" type="text" name="estado" value="warning" > 
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" id="fecha" disabled> 
                        </div>        
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group">
                            <label>Fecha Limite</label>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" id="fecha_limite" disabled> 
                        </div>        
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group">
                            <label>¿Desea atender?</label>
                        </div>     
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success p-3">SI</button>
                            <button type="button" class="btn btn-danger p-3" data-dismiss="modal">NO</button>
                        </div>      
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pdf" tabindex="-1" aria-labelledby="modales" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h5>PROCESAR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="procesar">
                    <div class="form-row justify-content-around">
                        <div class="form-group">
                            <label>Fecha del Reclamo</label>
                            <input class="d-none" type="text" name="id" id="id"> 
                            <input class="d-none" type="text" name="estado" value="warning" > 
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" id="fecha" disabled> 
                        </div>        
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group">
                            <label>Fecha Limite</label>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" id="fecha_limite" disabled> 
                        </div>        
                    </div>
                    <div class="form-row justify-content-around">
                        <div class="form-group">
                            <label>¿Desea atender?</label>
                        </div>     
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success p-3">SI</button>
                            <button type="button" class="btn btn-danger p-3" data-dismiss="modal">NO</button>
                        </div>      
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
</body>
<?php require_once "layouts/footer.php";?>
<script src="js/jquery-ajax-native.js"></script>
<script src="js/tables.js"></script> 
<script src="js/procesar.js"></script> 
 </html>
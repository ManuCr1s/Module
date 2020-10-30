<?php
require_once "layouts/header.php";
?>
<div class="container-fluid">
    <div class="row vh-100">
        <?php 
            require_once "layouts/nav_lateral.php";
        ?>
        <div class="col-9 py-3 px-5">
        <h2 class="text-center mb-4">Reportes</h2>
        <form action="">
            <h6 class="text-white bg-info p-2">INGRESE DATOS</h6>
            <div class="form-row">
                <div class="col-4">
                        <label for="">Seleccione estado de reclamo</label>
                        <select name="" id="" class="form-control">
                            <option value="success">ATENDIDO</option>
                            <option value="warning">EN PROCESO</option>
                            <option value="danger">NO ATENDIDO</option>
                        </select>
                </div>
                <div class="col-4">
                        <label for="">Ingrese fecha inicio</label>
                        <input type="date" class="form-control">
                </div>
                <div class="col-4">
                        <label for="">Ingrese fecha inicio</label>
                        <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-row d-flex justify-content-end">
                        <button type="submit" class="btn btn-info m-3 px-4">Buscar</button>
            </div>
        </form>
        <h6 class="mt-3 bg-info p-1"></h6>
        <div class="row my-4">
            <div class="col-12 d-flex justify-content-center">
                <h5>TOTAL DE REGISTROS <span class="badge badge-secondary">51</span></h5>
            </div>
        </div>
        <table id="tablas" class="table shadow-sm" cellspacing="0" width="100%">
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
</body>
<?php require_once "layouts/footer.php";?>
<script src="js/jquery-ajax-native.js"></script>
<script src="js/atender_enproceso.js"></script> 
</html>

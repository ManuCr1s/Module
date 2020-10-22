<?php
require_once "layouts/header.php";
?>
<div class="container-fluid">
    <div class="row vh-100">
        <?php 
            require_once "layouts/nav_lateral.php";
        ?>
        <div class="col-9 p-3">
        <h2 class="text-center mb-4">Reclamos Atendidos</h2>
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
                    <th class="th-sm">Resumen
                    </th>
                    </tr>
            </thead>
        </table>
        </div>
    </div>
</div>

</body>
<?php require_once "layouts/footer.php";?>
<script src="js/atendido.js"></script> 
</html>
<?php
require_once "layouts/header.php";
require_once "scripts/admin.php";
?>
<div class="container-fluid">
    <div class="row vh-100">
        <?php 
            require_once "layouts/nav_lateral.php";
        ?>
        <div class="col-9 p-3">
            <h2 class="text-center mb-4">Total de Reclamaciones</h2>
            <div class="row border-bottom d-flex justify-content-center">
                <div class="card m-3">
                        <div class="card-body m-4">
                            <h1 id="total"><?php echo $valores[0]; ?></h1>
                        </div>
                </div>
            </div>    
            <div class="row border-bottom my-4">
                <div class="col">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">CANTIDAD DE RECLAMOS ATENDIDOS</div>
                            <div class="card-body">
                                <h1 class="card-text text-center"><?php echo $valores[3]; ?></h1>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header">CANTIDAD DE RECLAMOS EN PROCESO</div>
                            <div class="card-body">
                                <h1 class="card-text text-center" ><?php echo $valores[2]; ?></h1>
                            </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">CANTIDAD DE RECLAMOS POR ATENDER</div>
                            <div class="card-body">
                                <h1 class="card-text text-center"><?php echo $valores[1]; ?></h1>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php require_once "layouts/footer.php";?>
</html>
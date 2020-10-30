<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reclamos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="fondo_login row vh-100">
            <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <form id="dates_user" class="form w-50 h-75 p-4 bg-white shadow">
                        <div class="form-row col-lg-12 justify-content-start ">
                            <h3> REGISTRO DE USUARIO</h3>
                        </div>
                        <div class="form-row mx-2 my-4">
                            <div class="col-4">
                                <label for="nombre">Nombre y Apellidos</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-row mx-2 my-4">
                            <div class="col-4">
                                <label for="nombre">Usuario</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" name="usuario" required>
                            </div>
                        </div>
                        <div class="form-row mx-2 my-4">
                            <div class="col-4">
                                <label for="nombre">Contraseña</label>
                            </div>
                            <div class="col-8">
                                <input type="password" class="form-control" name="pass" id="pass" required>
                            </div>
                        </div>
                        <div class="form-row mx-2 my-4">
                            <div class="col-4">
                                <label for="nombre">Confirmar Contraseña</label>
                            </div>
                            <div class="col-8">
                                <input type="password" class="form-control" name="pass_confirme" id="pass_confirme" required>
                            </div>
                        </div>
                        <div class="form-row mx-2 my-4">
                            <div class="col-4">
                                <label for="nombre">Correo</label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control" name="correo" required>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/registro.js"></script>
</html>
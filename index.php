<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reclamos</title>
    <link rel="stylesheet" href="app/css/bootstrap.css">
    <link rel="stylesheet" href="app/css/styles.css">
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="fondo_login row vh-100">
            <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <form id="dates_user" class="form h-75 p-4 text-white">
                        <div class="form-row col-lg-12 justify-content-center my-3">
                            <svg width="6em" height="6em" viewBox="0 0 16 16" class="logo_login bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                        </div>
                        <div class="form-row mt-4">
                            <label for="nombre">Nombre de Usuario</label>
                            <input type="text" class="entrada_login form-control" id="nombre">
                        </div>
                        <div class="form-row mb-4">
                            <label for="pass">Contraseña</label>
                            <input type="text" class="entrada_login form-control" id="pass">
                        </div>
                        <div class="form-row mb-4">
                            <a href="" class="col-12 text-warning my-1">Recuperar Usuario y Contraseña</a>
                            <input type="submit" class="col-12 btn btn-warning text-secondary font-weight-bold" value="Iniciar Sesión">
                        </div>
                        <div class="form-row d-flex justify-content-center">
                            <label for="">¿No tiene cuenta?,</label>
                            <a href="app/indicadores.php" class="text-warning">Registrese</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>
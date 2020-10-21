<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="datatables/datatables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>
<?php
require_once "layouts/header.php";
?>
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-3 bg-secondary">
            <a href="consolid.php" class="row text-white p-2 bg-dark enlace">
                <div class="col-2 ms-1">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fills" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                            <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        </svg>                            
                </div>
                <div class="col-8 ms-1">
                        INICIO
                </div>
            </a>    
            <a href="nuevo.php" class="row text-white p-2 bg-dark enlace">
                <div class="col-2 ms-1">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smiles" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>                        
                </div>
                <div class="col-8 ms-1">
                        NUEVOS
                </div>
            </a>  
            <a href="proceso.php" class="row text-white p-2 bg-dark enlace">
                <div class="col-2 ms-1">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-neutral" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                        <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                    </svg>                     
                </div>
                <div class="col-8 ms-1">
                        EN PROCESO
                </div>
            </a>  
            <a href="atendido.php" class="row text-white p-2 bg-dark enlace">
                <div class="col-2 ms-1">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>                        
                </div>
                <div class="col-8 ms-1">
                        ATENDIDOS
                </div>
            </a>  
        </div>
        <div class="col-9 p-5">
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
                    </tr>
            </thead>
        </table>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <div class="form-group">
                                <label for="">Nombre del Usuario</label>
                                <input type="text" class="form-control" id="usuario">
                            </div>
                            
                            <div class="form-group">
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
                                            <label for="">Detalle la solucion del reclamo</label>
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
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="datatables/datatables.min.js"></script>
<script src="js/proceso.js"></script> 
<script src="js/send.js"></script>
</html>
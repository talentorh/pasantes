<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKLIST DE GUIA DE INDUCCION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>
<body>
    <style>
        #h2 {
            text-align: center;
            text-transform: uppercase;
        }
    </style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="container-xxl" style="width: 100%; height:100%; background-color: #17AD24; padding:5px;">

<div style="width: 100%; height: auto; display: flex; align-items: center; justify-content: center;">

</div>
<form id="guardardatos" name="guardardatos">
<div id="mensaje"></div>
<script>
                $("#guardardatos").on("submit", function(e) {
                    e.preventDefault();
                    var formData = new FormData(document.getElementById("guardardatos"));
                    formData.append("dato", "valor");
                    $.ajax({
                        url: "guardarInduccion.php",
                        type: "post",
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function(objeto) {
                            $('#mensaje').html('<div id="mensaje" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(../img/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
                        },
                        success: function(data) {
                            $("#mensaje").html(data);
                        }
                    })
                })
            </script>

<div style="width: 100%; height: 100%; background-color: white; border-radius: 10px; padding: 10px; font-size: 15px; margin-top: 10px;">
<div class="containeroficial" id="contenedor">
<div style="width: 100%; height: 100%;">
    <div class="containerinduccion">
<div>
        <h2 id="h2">Guía de inducción al área y puesto de personal en el puesto</h2>
        <h2 id="h2">MEDICO ESPECIALISTA HOSPITAL</h2>
    </div>
<div class="row">
<div class="col-md-4">
        <label>Nombre del trabajador:</label>
        <input type="text" class="form-control">
</div>
<div class="col-md-4">
    <label>CURP:</label>
    <input type="text" class="form-control">
</div>
<div class="col-md-4">
    <label>Puesto:</label>
    <input type="text" class="form-control">
</div>
<div class="col-md-4">
    <label>Adscripcion:</label>
    <input type="text" class="form-control">
</div>
<div class="col-md-4">
    <label>RFC:</label>
    <input type="text" class="form-control">
</div>
<div class="col-md-4">
    <label>CLUES:</label>
    <input type="text" class="form-control">
</div>
</div>
<div class="custom-control custom-checkbox text-inline">
<div>
    <h3>Tipo de movimiento:</h3>
</div>
<input type="hidden" name="idempleado" value="1983">
<div class="form-check">
    <input class="form-check-input" type="radio" name="tipodeingreso" id="flexRadioDefault1" value="ingreso">
    <label class="form-check-label" for="flexRadioDefault1">INGRESO<label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="tipodeingreso" id="flexRadioDefault2" value="reingreso">
    <label class="form-check-label" for="flexRadioDefault2">REINGRESO</label>
</div>
<div class="col-md-12">
    <strong>Inducción a la Unidad de adscripción:</strong>
</div>
<div class="form-check">
    <input class="form-check-input" name="darbienvenida" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">1. Dar la bienvenida a la trabajador/a de nuevo ingreso a Servicios de Salud IMSS-BIENESTAR</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="expliqueorganizacion" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">2. Explique la organización de la Unidad con el apoyo del organigrama</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="realicerecorrido" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">3. Realice un recorrido por las instalaciones de la Unidad</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="presentetrabajador" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">4. Presente al trabajador/a con los y las responsables de otras áreas, en caso de tener trato con ellos</label>
</div>
<div class="col-md-12">
    <strong>Inducción al área de trabajo</strong>
</div>
<div class="form-check">
    <input class="form-check-input" name="describabreve" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">1. Describa brevemente el área de trabajo y los procesos en los que están involucrados</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="presentegrupo" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">2. Presente a las compañeras y compañeros del grupo de trabajo</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="propicieambiente" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">3. Propicie un ambiente de cordialidad e integración de equipo</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="comentecondiciones" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">4. Comente condiciones generales del ttrabajo de IMSS-BIENESTAR</label>
</div>
<div class="col-md-12"> 
    <strong>Inducción al puesto</strong>
</div>
<div class="form-check">
    <input class="form-check-input" name="expliquemision" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">1. Explique la misión del puesto</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="senalevision" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">2. Señale la visión que se desea del puesto</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="muestraubicacion" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">3. Muestra la ubicación del puesto de trabajo y su correspondencia estructural</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="expliqueformatos" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">4. Explique los formatos y el uso de estos</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="capaciteutilizacion" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">5. Capacite en la utilización de equipos y materiales de trabajo</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="expliqueinstrucciones" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">6. Explique las instrucciones básicas de seguridad e higiene</label>
</div>
<div class="form-check">
    <input class="form-check-input" name="motivetrabajador" type="checkbox" value="si" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">7. Motive al trabajador/a para que formule preguntas y aclare dudas sobre sus actividades y las necesidades o expectativas a cubrir con relación a su puesto<br><br></label>
</div>
</div>

<input type="hidden" name="idempleado" value="<?php echo $idempleado ?>">
    </div>
    <div style="width: 100%; height: auto; padding: 10px; background-color: white; display: flex; justify-content: center; align-items: center;">
        <input type="submit" class="btn btn-success" value="Guardar" id="guardar" style="background-color: #17AD24">
            </div>
            </form>
        </div>
            </div>
</body>
</html>

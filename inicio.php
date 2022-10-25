<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/raleway-font.css">
	  <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Registro de disponibilidad</title>
    <?php require_once "scripts.php"; ?>
  </head>
  <body>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="page-content" style="background-image: url('img/tesh.jpg')">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <form class="form-register" id="form-register" action="#" method="post">
                    <div id="form-total">
                        <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number"></span>
			            	<span class="step-text">Informacion personal</span>
			            </h2>
                        <section>
                                <div class="form-group">
                                  <label for="User">Nombre completo</label>
                                  <input type="text" class="form-control" id="User" aria-describedby="User" placeholder="" required>
                                </div>
                                <div class="form-group">
                                  <label for="Lic">Licenciatura</label>
                                  <input type="text" class="form-control" id="Lic" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="Pos">Posgrados</label>
                                    <input type="text" class="form-control" id="Posgrados" placeholder="" >
                                  </div>
                                  <div class="form-group">
                                    <label for="Lic">Periodo escolar</label>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                      <br><label for="PInicio">Mes de inicio</label>
                                      <input type="text" class="form-control" id="PMes" placeholder="Mes" required>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                      <br><label for="espacio"> Año de inicio</label>
                                      <input type="numbre" class="form-control" id="PAño" placeholder="Año" required>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3">
                                      <br><label for="validationDefault05">Mes de termino</label>
                                      <input type="text" class="form-control" id="validationDefault05" placeholder="Mes" required>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <br><label for="validationDefault05">Año de termino</label>
                                        <input type="text" class="form-control" id="validationDefault05" placeholder="Año" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="F">Mediante la presente, expreso al Jefe de División y al Tecnologico de Estudios Superiores de Huixquilucan mi disponibilidad horaria definitiva, misma que servirá de manera informativa a mi Jefatura de División de adscripción para la futura asignación de horarios y materias a impartir para el periodo escolar descrito con anterioridad, reconociendo desde estos momentos que cualquier cambio, modificación o enmendadura a la misma, una vez entregada a la Jefatura de División, séra responsabilidad del que suscribe.</label>
                                    </div>
                        </section>
                        <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number"></span>
			            	<span class="step-text">Turno Matutino</span>
			            </h2>
			            <section>
                    <div class="container">          
                      <div class="table-responsive">
                        <table class="table custom-table">
                          <thead>
                            <tr>
                              <th scope="col">Horario</th>
                              <th scope="col">Lunes</th>
                              <th scope="col">Martes</th>
                              <th scope="col">Miercoles</th>
                              <th scope="col">Jueves</th>
                              <th scope="col">Viernes</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <small class="d-block">7:00 - 8:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th> 
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">8:00 - 9:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">9:00 - 10:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">10:00 - 11:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">11:00 - 12:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">12:00 - 13:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th> 
                            </tr> 
                          </tbody>
                        </table>
                      </div>
                    </div>
			               
			            </section>
                  <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number"></span>
			            	<span class="step-text">Turno Vespertino</span>
			            </h2>
			            <section>
                    <div class="container">          
                      <div class="table-responsive">
                
                        <table class="table custom-table">
                          <thead>
                            <tr>
                              <th scope="col">Horario</th>
                              <th scope="col">Lunes</th>
                              <th scope="col">Martes</th>
                              <th scope="col">Miercoles</th>
                              <th scope="col">Jueves</th>
                              <th scope="col">Viernes</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <small class="d-block">13:00 - 14:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">14:00 - 15:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">15:00 - 16:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">16:00 - 17:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">17:00 - 18:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                            <tr>
                              <td>
                                <small class="d-block">18:00 - 19:00</small>
                              </td>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              <th scope="row">
                                <label class="control control--checkbox">
                                  <input type="checkbox"/>
                                  <div class="control__indicator"></div>
                                </label>
                              </th>
                              
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>   
			            </section>

                  <section>
                    <div class="form-group">
                      <label for="Carrera">Carrera en la que participa</label>
                      <select class="form-control" id="carrera" name="carrera" onchange="cargarMaterias();">
                          <option value="" disabled selected>Seleccionar</option>
                          
                      </select>
                    </div>
                   <div class="form-group">
                    <label for="">Materias a impartir</label>
                    <select class="form-control" id="materia" name="materia">
                        <option value="" disabled selected>Seleccionar</option>
                    </select>  
                  </div>

                  <button type="button" id="registrarN" class="btn btn-success">Siguiente</button>
                  <a href="php/salir.php" class="btn btn-success">Salir del sistema</a>


<script>

function cargarCarreras() {
    var array = ["Gastronomia", "Ingenieria en Sistemas Computacionales", "Ingenieria en Mecatronica", "Ingeneiria Civil", "Licenciatura en Administración", "Ingenieria Industrial", "Licenciatura en Biologia"];
    array.sort();
    addOptions("carrera", array);
}



function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (carrera in array) {
        var opcion = document.createElement("option");
        opcion.text = array[carrera];
        
        opcion.value = array[carrera].toLowerCase()
        selector.add(opcion);
    }
}

function cargarMaterias() {
 
    var listaMaterias = {
      gastronomia: ["Materia 1", "Materia 2"],
    }
    
    var carreras = document.getElementById('carrera')
    var materias = document.getElementById('materia')
    var carreraSeleccionada = carreras.value
    
 
    materias.innerHTML = '<option value="">Seleccionar...</option>'
    
    if(carreraSeleccionada !== ''){
      carreraSeleccionada = listaMaterias[carreraSeleccionada]
      carreraSeleccionada.sort()
    
      carreraSeleccionada.forEach(function(materia){
        let opcion = document.createElement('option')
        opcion.value = materia
        opcion.text = materia
        materias.add(opcion)
      });
    }
    
  }
  
 cargarCarreras();

</script>
                  </section>
                  

                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>


<?php
} else {
	header("location:index.php");
	}
 ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarN').click(function(){

			if($('#User').val()==""){
				alert("Ingresa tu nombre");
				return false;
			}else if($('#Lic').val()==""){
				alert("Ingresa tu Licenciatura");
				return false;
			}else if($('#Pos').val()==""){
				alert("Ingresa tu Posgrado");
				return false;
			
			}

			cadena="User=" + $('#User').val() +
					"&Lic=" + $('#Lic').val() + 
					"&Posgrados=" + $('#Pos').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#form-register')[0].reset();
								aletify.success("Agregado con exito");
							}else{
								error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>


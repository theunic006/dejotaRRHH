<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      SELECCIONAR PLANTA Y PERSONAL
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear preseleccion</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
      <div class="col-lg-6 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form role="form" method="post" class="formularioPreseleccion">

            <div class="box-body">
  
              <div class="box">


                <!--=====================================
                ENTRADA DEL PERSONAL
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-university"></i></span>
                    
                    <select class="form-control" id="seleccionarPlanta" name="seleccionarPlanta" required>

                    <option value="">Seleccionar Planta</option>



                    <?php

                      $item = null;
                      $valor = null;

                      $planta = ControladorPlantas::ctrMostrarPlantasPre($item, $valor);

                       foreach ($planta as $key => $value) {

                         echo '<option value="'.$value["id"].'">'.$value["nombre"].' ||  '.$value["unidadproduccion"].'</option>';

                       }

                    ?>

                    </select>

                    

                  
                  </div>

                  
                
                </div>

                  <!--=====================================
                  ENTRADA DEL NOMBRE DEL SERVICIO
                  ======================================-->
              
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-black-tie"></i></span> 
                    <input type="text" class="form-control" id="nuevoNombre" name="nuevoNombre" placeholder="Nombre del servicio">
                  </div>
                </div> 

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-commenting-o"></i></span> 
                    <input type="text" class="form-control" id="nuevoDescripcion" name="nuevoDescripcion" placeholder="Descripcion del servicio">
                  </div>
                </div> 
                <div class="form-group">
                  <h4>Datos del Responsable del Area</h4>
                </div> 
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                    <input type="text" class="form-control" id="nombreResponsable" name="nombreResponsable" placeholder="Nonbre del Responsable">
                  </div>
                </div> 
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-suitcase"></i></span> 
                    <input type="text" class="form-control" id="cargoResponsable" name="cargoResponsable" placeholder="Cargo">
                  </div>
                </div> 
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span> 
                    <input type="text" class="form-control" id="celularResponsable" name="celularResponsable" data-inputmask="'mask':'99999999'" data-mask  placeholder="Celular">
                  </div>
                </div> 
                <div class="form-group">
                  <h4>Datos del Supervidor del Area</h4>
                </div> 
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                    <input type="text" class="form-control"  id="nombreSupervidor" name="nombreSupervidor" placeholder="Nombre del Supervidor">
                  </div>
                </div> 
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-suitcase"></i></span> 
                    <input type="text" class="form-control" id="cargoSupervidor" name="cargoSupervidor" placeholder="Cargo">
                  </div>
                </div> 
                <div class="form-group col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span> 
                    <input type="text" class="form-control" id="celularSupervidor" name="celularSupervidor" data-inputmask="'mask':'99999999'" data-mask  placeholder="Celular">
                  </div>
                </div> 
                <!--=====================================
                ENTRADA PARA AGREGAR PERSONAL
                ======================================--> 

                <div class="form-group row nuevoPersonal">
                </div>

                <input type="hidden" id="listaPersonales" name="listaPersonales">

              </div>

          </div>

          <div class="box-footer">

            <div class="pull-right">

              <button type="submit" class="btn btn-primary pull-right">Guardar Lista Personal</button>

            </div>

          </div>

        </form>

        <?php

          $guardarPreseleccion = new ControladorPre();
          $guardarPreseleccion -> ctrCrearPre();
          
        ?>

        </div>
            
      </div>

      <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

      <div class="col-lg-6 hidden-md hidden-sm hidden-xs">
        
        <div class="box box-warning">

          <div class="box-header with-border"></div>

          <div class="box-body">          
            
            <table class="table table-bordered table-striped dt-responsive tablaPreselecciones"><button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPersonal">
          Agregar Personal
        </button>
              
               <thead>

                 <tr>
                 <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Celular</th>
                  <th>Lugar Nacimiento</th>
                  <th style="width: 90px">Acciones</th>
                </tr>

              </thead>

            </table>

          </div>

        </div>


      </div>

    </div>
   
  </section>

</div>


<!--=====================================
MODAL AGREGAR PERSONAL
======================================-->

<div id="modalAgregarPersonal" class="modal fade" role="dialog">
  
  <div class="modal-dialog " style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Personal</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">



            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 
                <input type="text" class="form-control input-lg" name="nombre" placeholder="Ingresar nombre" required>
              </div>
            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span> 
                <input type="number" min="0" class="form-control input-lg" name="dni" placeholder="Ingresar DNI" required>
              </div>
            </div>

            <!-- ENTRADA PARA EL CARGO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-recycle"></i></span> 
                <select class="form-control input-lg select-picker" name="cargo" id="cargo">
                  <option value="">SELECCIONE CARGO</option>
                  <option value="GERENTE DE OPERACIONES">GERENTE DE OPERACIONES</option>
                  <option value="INGENIERO DE SEGURIDAD">INGENIERO DE SEGURIDAD</option>
                  <option value="SUPERVISOR OPERATIVO">SUPERVISOR OPERATIVO</option>
                  <option value="SUPERVISOR ELECTRICISTA">SUPERVISOR ELECTRICISTA</option>
                  <option value="RESIDENTE">RESIDENTE</option>
                  <option value="SUPERVISOR">SUPERVISOR</option>
                  <option value="ASISTENTE DE SUPERVISION">ASISTENTE DE SUPERVISION</option>
                  <option value="ASISTENTE ADMINISTRATIVO">ASISTENTE ADMINISTRATIVO</option>
                  <option value="MECANICO">MECANICO</option>
                  <option value="ALINEADOR">ALINEADOR</option>
                  <option value="SOLDADOR">SOLDADOR</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 
                <input type="text" class="form-control input-lg" name="celular" placeholder="Ingresar Celular" data-inputmask="'mask':'999999999'" data-mask>
              </div>
            </div>

            <!-- ENTRADA PARA LA nacionalidad -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 
                <input type="text" class="form-control input-lg" name="nacionalidad" placeholder="Ingresar Nacionalidad">
              </div>
            </div>

            <!-- ENTRADA PARA EL genero -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-intersex"></i></span> 
                <select class="form-control input-lg select-picker" name="genero" id="genero">
                  <option value="">SELECCIONE GENERO</option>
                  <option value="MASCULINO">MASCULINO</option>
                  <option value="FEMENINO">FEMENINO</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA LA estado civil -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 
                <select class="form-control input-lg select-picker" name="estadocivil" id="estadocivil">
                  <option value="">SELECCIONE SU ESTADO CIVIL</option>
                  <option value="CASADO">CASADO</option>
                  <option value="SOLTERO">SOLTERO</option>
                  <option value="DIVORCIADO">DIVORCIADO</option>
                  <option value="VIUDO">VIUDO</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA LA grupo sanguineo -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-ils"></i></span> 
                <select class="form-control input-lg select-picker" name="gruposanguineo" id="gruposanguineo">
                  <option value="">SELECCIONE SU GRUPO SANGUINEO</option>
                  <option value="O-">O-</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="A+">A+</option>
                  <option value="B-">B-</option>
                  <option value="B+">B+</option>
                  <option value="AB-">AB-</option>
                  <option value="AB+">AB+</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                <input type="date" class="form-control input-lg" name="fechanacimiento" placeholder="Ingresar fecha nacimiento"  >
              </div>
            </div>

            
            <!-- ENTRADA PARA LA Edad-->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hand-peace-o"></i></span> 
                <input type="text" class="form-control input-lg" name="edad" placeholder="Ingresar Su Edad" data-inputmask="'mask':'99'" data-mask >
              </div>
            </div>

            <!-- ENTRADA PARA LA direccion -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span> 
                <input type="text" class="form-control input-lg" name="direccion" placeholder="Ingresar Direccion" >
              </div>
            </div>

            <!-- ENTRADA PARA LA distrito -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-alpha-desc"></i></span> 
                <input type="text" class="form-control input-lg" name="distrito" placeholder="Ingresar Distrito" >
              </div>
            </div>

            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="provincia" placeholder="Ingresar Provincia" >
              </div>
            </div>

            <!-- ENTRADA PARA LA departamento -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-desc"></i></span> 
                <input type="text" class="form-control input-lg" name="departamento" placeholder="Ingresar Departamento" >
              </div>
            </div>

            <!-- ENTRADA PARA FIRMA -->

            <div class="form-group col-md-4">
              <div class="panel">SUBIR IMAGEN FIRNA (BIEN CLARO) </div>
              <input type="file" class="imagenfirma" name="imagenfirma">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/personal/default/firma.png" class="img-thumbnail previsualizarFirma" width="100px">
            </div>

            <!-- ENTRADA PARA HUELLA -->

            <div class="form-group col-md-4">
              <div class="panel">SUBIR IMAGEN HUELLA (BIEN CLARO) </div>
              <input type="file" class="imagenhuella" name="imagenhuella">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/personal/default/huella.png" class="img-thumbnail previsualizarHuella" width="100px">
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-4">
              <div class="panel">SUBIR FOTOGRAFIA (OPCIONAL) </div>
              <input type="file" class="fotografia" name="fotografia">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/personal/default/huella.png" class="img-thumbnail previsualizarfoto" width="100px">
            </div>
             
            <!-- ENTRADA PARA DNI -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF DNI </div>
              <input type="file" class="pdfdni" name="pdfdni">
              <p class="help-block">Peso máximo de la foto 10MB</p>
            </div>

              <!-- ENTRADA PARA CV -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF CV </div>
              <input type="file" class="pdfcv" name="pdfcv">
              <p class="help-block">Peso máximo de la foto 10MB</p>
            </div>



          </div>
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar personal</button>
        </div>

      </form>

      <?php

        $crearPersonal = new ControladorPersonales();
        $crearPersonal -> ctrCrearPersonal();

      ?>

    </div>

  </div>

</div>
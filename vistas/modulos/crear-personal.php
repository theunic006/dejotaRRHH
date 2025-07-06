<?php

  $idPlanta=$_GET["idPlanta"];
  $idTarea=$_GET["idTarea"];
  
  $planta = ControladorPlantas::ctrMostrarPlantasTareas($idPlanta, $idTarea);

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
    Agregar Personal a la Tarea: <?php echo $planta["titulo"]?> de la Planta: <?php echo $planta["nombre"]?>
    </h1>

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Crear venta</li>
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
      <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-header with-border"></div>

          <form role="form" method="post" class="formularioPersonal">

            <div class="box-body">
  
              <div class="box">

                <!--=====================================
                ENTRADA DEL TAREA
                ======================================-->
            
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-bank"></i></span> 
                    <input type="text" class="form-control" id="nuevoTarea" value="<?php echo $planta["titulo"]; ?>" readonly>
                    <input type="hidden" name="idTarea" value="<?php echo $planta["id"]; ?>">
                  </div>
                </div> 
                <!--=====================================
                ENTRADA DE LA FECHA INICIO
                ======================================--> 

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar-plus-o"></i></span>
                   <input type="text" class="form-control" id="nuevaFechaInicio" name="editarFechaInicio" value="<?php echo $planta["fechainicio"]; ?>" readonly>
                  </div>
                </div>
                <!--=====================================
                ENTRADA DE LA FECHA FIN
                ======================================--> 

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar-times-o"></i></span>
                   <input type="text" class="form-control" id="nuevaFechaFin" name="editarFechaFin" value="<?php echo $planta["fechafin"]; ?>" readonly>
                  </div>
                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR PERSONAL
                ======================================--> 

                <div class="form-group row nuevoPersonal">
                </div>

                <input type="hidden" id="listaPersonales" name="listaPersonales">

                <!--=====================================
                BOTÓN PARA AGREGAR PERSONAL
                ======================================-->

                <button type="button" class="btn btn-default hidden-lg btnAgregarPersonal">Agregar personal</button>
              </div>

          </div>

          <div class="box-footer">

            <div class="pull-right">
              <button type="submit" class="btn btn-primary pull-right">Registrar</button>
            </div>

          </div>

        </form>

        <?php

          $editarNuevaTarea = new ControladorTareas();
          $editarNuevaTarea -> ctrEditarNuevaTarea();
          
        ?>

        </div>
            
      </div>

      <!--=====================================
      LA TABLA DE PERSONALES
      ======================================-->

      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
        
        <div class="box box-warning">

          <div class="box-header with-border"></div>

          <div class="box-body">
            
            <table class="table table-bordered table-striped dt-responsive tablaPersonal">
              
               <thead>

               <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 100px">Nombre</th>
                  <th>DNI</th>
                  <th style="width: 90px">Cargo</th>
                  <th>Documentacion</th>
                  <th style="width: 130px">Examenes</th>
                  <th style="width: 30px">Seleccionar</th>
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
MODAL AGREGAR EXAMEN
======================================-->

<div id="modalEditarExamen" class="modal fade" role="dialog">
  
  <div class="modal-dialog" style="width: 75% !important;">
    <div class="modal-content" id="">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Datos de Examen Medico</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA LA FECHA DE INICIO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                <input type="date" class="form-control input-lg" name="fechainicioExam" id="fechainicioExam"  placeholder="Fecha de Inicio de Examen Medico">
                <input type="hidden" name="idExamen" id="idExamen">
                <input type="hidden" name="idExamPersonal" id="idExamPersonal">
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE VENCIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                <input type="date" class="form-control input-lg" name="fechafinExam" id="fechafinExam"  placeholder="Fecha Fin de Examen Medico">
              </div>
            </div>

            <!-- ENTRADA PARA EL CANTIDAD DE DIAS -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-minus-o"></i></span> 
                <input type="text" class="form-control input-lg" name="cantidaddiasExam" id="cantidaddiasExam" data-inputmask="'mask':'999'" data-mask placeholder="Cantidad Dias">
              </div>
            </div>

            <!-- ENTRADA PARA EL ESTADO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-binoculars"></i></span> 
                <select class="form-control input-lg select-picker" name="estadoExam" id="estadoExam" placeholder="Estado del Examen Medico">
                  <option value="">ESTADO DEL EXAMEN:</option>
                  <option value="ACTIVO">ACTIVO</option>
                  <option value="VENCIDO">VENCIDO</option>
                  <option value="NO TIENE">NO TIENE</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA EL CLINICA -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hospital-o"></i></span> 
                <input type="text" class="form-control input-lg" name="clinicaExam" id="clinicaExam" placeholder="Nombre de la Clinica">
              </div>
            </div>

            <!-- ENTRADA PARA EL VACUNA -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span> 
                <select class="form-control input-lg select-picker" name="vacunaExam" id="vacunaExam" placeholder="Esta vacunado?">
                  <option value="">Tiene Vacunas?</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA CERTIFICADO EXAMEN MEDICO -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF CERTIFICADO MEDICO </div>
              <input type="file" class="pdfcertificado" name="editpdfcertificado">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              
              <a href="#" target="_blank" id="examenmedicopdf"><img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail previsualizarcertificado" width="100px"></a>
              <input type="hidden" name="certificadoactual" id="certificadoactual">
              <input type="text" name="cercer" id="cercer" disabled>
            </div>

            <!-- ENTRADA PARA PDF VACUNA-->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF VACUNA COVID </div>
              <input type="file" class="pdfvacuna" name="editpdfvacuna">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              
              <a href="#" target="_blank" id="vacunapdf"><img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail previsualizarvacuna" width="100px"></a>
              <input type="hidden" name="vacunaactual" id="vacunaactual">
              <input type="text" name="vacvac" id="vacvac" disabled>
            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarExamen = new ControladorPersonales();
        $editarExamen -> ctrEditarExamen();

      ?>

    

    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR INDUCCION
======================================-->

<div id="modalEditarInduccion" class="modal fade" role="dialog">
  
  <div class="modal-dialog" style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Datos su Induccion</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA LA FECHA DE INICIO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                <input type="date" class="form-control input-lg" name="fechainicioInd" id="fechainicioInd"  data-mask placeholder="Fecha de Inicio de Induccion">
                <input type="hidden" name="idInduccion" id="idInduccion">
                <input type="hidden" name="idIndPersonal" id="idIndPersonal">
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE VENCIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                <input type="date" class="form-control input-lg" name="fechafinInd" id="fechafinInd"  data-mask placeholder="Fecha Fin de Induccion">
              </div>
            </div>

            <!-- ENTRADA PARA EL ESTADO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-binoculars"></i></span> 
                <select class="form-control input-lg select-picker" name="estadoInd" id="estadoInd" placeholder="Estado de la Induccion">
                  <option value="">ESTADO:</option>
                  <option value="ACTIVO">ACTIVO</option>
                  <option value="VENCIDO">VENCIDO</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA EL PROBLEMA -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-binoculars"></i></span> 
                <select class="form-control input-lg select-picker" name="causaInd" id="causaInd" placeholder="Porque no esta Activo su Induccion">
                  <option value="">CAUSA DE NO ACTIVO:</option>
                  <option value="NINGUNO">NINGUNO</option>
                  <option value="CADUCO">CADUCO</option>
                  <option value="NO TIENE">NO TIENE</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA CERTIFICADO INDUCCION -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF CERTIFICADO MEDICO </div>
              <input type="file" class="pdfinduccion" name="editpdfinduccion">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              
              <a href="#" target="_blank" id="induccionpdf"><img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail previsualizarinduccion" width="100px"></a>
              <input type="hidden" name="induccionactual" id="induccionactual">
              <input type="text" name="induindu" id="induindu" disabled>
              
            </div>

            <!-- ENTRADA PARA ACTA DE ASISTENCIA -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF ACTA DE ASISTENCIA </div>
              <input type="file" class="pdfacta" name="editpdfacta">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              
              <a href="#" target="_blank" id="actapdf"><img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail previsualizaracta" width="100px"></a>
              <input type="hidden" name="actaactual" id="actaactual">
              <input type="text" name="actaacta" id="actaacta" disabled>
              
            </div>



          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarInduccion = new ControladorPersonales();
        $editarInduccion -> ctrEditarInduccion();

      ?>

    

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarPersonal" class="modal fade" role="dialog">
  
  <div class="modal-dialog" style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Datos del Personal</h4>
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
                <input type="text" class="form-control input-lg" name="editnombre" id="editnombre" required>
                <input type="hidden" id="idPersonal" name="idPersonal">
              </div>
            </div>

             <!-- ENTRADA PARA EL DOCUMENTO ID -->
             <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span> 
                <input type="number" min="0" class="form-control input-lg" name="editdni" id="editdni" required readonly>
              </div>
            </div>

            <!-- ENTRADA PARA EL CARGO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-recycle"></i></span> 
                <select class="form-control input-lg select-picker" name="editcargo" id="editcargo">
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
                <input type="text" class="form-control input-lg" name="editcelular" id="editcelular" data-inputmask="'mask':'999999999'" data-mask required>
              </div>
            </div>

            <!-- ENTRADA PARA LA nacionalidad -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 
                <input type="text" class="form-control input-lg" name="editnacionalidad" id="editnacionalidad" required>
              </div>
            </div>

            <!-- ENTRADA PARA EL genero -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-intersex"></i></span> 
                <select class="form-control input-lg select-picker" name="editgenero" id="editgenero">
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
                <select class="form-control input-lg select-picker" name="editestadocivil" id="editestadocivil">
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
                <select class="form-control input-lg select-picker" name="editgruposanguineo" id="editgruposanguineo">
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
                <input type="date" class="form-control input-lg" name="editfechanacimiento" id="editfechanacimiento" required>
              </div>
            </div>

            
            <!-- ENTRADA PARA LA Edad-->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hand-peace-o"></i></span> 
                <input type="text" class="form-control input-lg" name="editedad" id="editedad" data-inputmask="'mask':'99'" data-mask >
              </div>
            </div>

            <!-- ENTRADA PARA LA direccion -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i> Direccion</span> 
                <input type="text" class="form-control input-lg" name="editdireccion" id="editdireccion">
              </div>
            </div>

            <!-- ENTRADA PARA LA distrito -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-alpha-desc"></i> Distrito</span> 
                <input type="text" class="form-control input-lg" name="editdistrito" id="editdistrito">
              </div>
            </div>

            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i> Provincia</span> 
                <input type="text" class="form-control input-lg" name="editprovincia" id="editprovincia">
              </div>
            </div>

            <!-- ENTRADA PARA LA departamento -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-desc"></i> Departamento</span> 
                <input type="text" class="form-control input-lg"  name="editdepartamento" id="editdepartamento">
              </div>
            </div>

            <!-- ENTRADA PARA FIRMA -->

            <div class="form-group col-md-4">
              <div class="panel">SUBIR IMAGEN FIRNA (BIEN CLARO) </div>
              <input type="file" class="imagenfirma" name="editimagenfirma">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/personal/default/firma.png" class="img-thumbnail previsualizarFirma" width="100px">
              <input type="hidden" name="firmaactual" id="firmaactual">
            </div>

            <!-- ENTRADA PARA HUELLA -->

            <div class="form-group col-md-4">
              <div class="panel">SUBIR IMAGEN HUELLA (BIEN CLARO) </div>
              <input type="file" class="imagenhuella" name="editimagenhuella">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/personal/default/huella.png" class="img-thumbnail previsualizarHuella" width="100px">
              <input type="hidden" name="huellaactual" id="huellaactual">
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-4">
              <div class="panel">SUBIR FOTOGRAFIA (OPCIONAL) </div>
              <input type="file" class="fotografia" name="editfotografia">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/personal/default/huella.png" class="img-thumbnail previsualizarfoto" width="100px">
              <input type="hidden" name="fotoactual" id="fotoactual">
            </div>

            <!-- ENTRADA PARA DNI -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF DNI </div>
              <input type="file" class="pdfdni" name="editpdfdni">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              
              <a href="#" id="enlacedni" target="_blank" rel="noopener noreferrer"><img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail previsualizardni" width="100px"></a>
              <input type="hidden" name="dniactual" id="dniactual">
              <input type="text" name="dnidni" id="dnidni" disabled>
            </div>

              <!-- ENTRADA PARA CV -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR PDF CV </div>
              <input type="file" class="pdfcv" name="editpdfcv">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              <a href="#" id="enlacecv" target="_blank" rel="noopener noreferrer"><img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail previsualizarcv" width="100px"></a>
              <input type="hidden" name="cvactual" id="cvactual">
              <input type="text" name="cvcv" id="cvcv" disabled>
            </div>

             <!--=====================================
              PIE DEL MINA HUARCHON
              ======================================-->
            <div class="form-group col-md-12" id="cajatitulo">
              <div class="input-group">
                <h4>---------------------------------------------------------------------------- DATOS ADICIONALES SOLO PARA LA MINA HUANCHOR ---------------------------------------------------------------------------------------- </h4>
              </div>
            </div>
                          <!-- ENTRADA PARA LA estado civil -->
            <div class="form-group col-md-6" id="cajacomunidad">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 
                <select class="form-control input-lg select-picker" name="editpertenececomunidad" id="editpertenececomunidad">
                  <option value="">PERTENECE A UNA COMUNIDAD</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajanombrecomunidad">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="editnombrecomunidad" id="editnombrecomunidad" placeholder="NOMBRE DE LA COMUNIDAD">
              </div>
            </div>

            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajacaserio">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="editcaserio" id="editcaserio" placeholder="CASERIO">
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajapensiones">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <select class="form-control input-lg select-picker" name="editpensiones" id="editpensiones">
                  <option value="">SISTEMA DE PENSIONES</option>
                  <option value="SNP">SNP</option>
                  <option value="ONP">ONP</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajaafp">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="editafp" id="editafp" placeholder="NOMBRE DE LA APF">
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajacuspp">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="editcuspp" id="editcuspp" placeholder="CUSPP">
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajanivelsctr">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <select class="form-control input-lg select-picker" name="editnivelsctr" id="editnivelsctr">
                  <option value="">INDICAR CON QUIEN SE TIENE CONTRATADO Y EL NIVEL DE SCTR</option>
                  <option value="SUPERFICIE">SUPERFICIE</option>
                  <option value="SOCABON">SOCABON</option>
                  <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajasctrsalud">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="editsctrsalud" id="editsctrsalud" placeholder="CSTR SALUD">
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajasctrpension">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="editsctrpension" id="editsctrpension" placeholder="CSTR PENSION">
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajavidaley">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <input type="text" class="form-control input-lg" name="editvidaley" id="editvidaley" placeholder="VIDA LEY">
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajagradoinstruccion">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i> </span> 
                <select class="form-control input-lg select-picker" name="editgradoinstruccion" id="editgradoinstruccion">
                  <option value="">GRADO DE INSTRUCCIÓN</option>
                  <option value="SECUNDARIA">SECUNDARIA</option>
                  <option value="TECNICA">TECNICA</option>
                  <option value="UNIVERSITARIA">UNIVERSITARIA</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajacattrabajador">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i> </span> 
                <select class="form-control input-lg select-picker" name="editcattrabajador" id="editcattrabajador">
                  <option value="">CATEGORIA DE TRABAJADOR</option>
                  <option value="STAFF">STAFF</option>
                  <option value="OBRERO">OBRERO</option>
                  <option value="EMPLEADO">EMPLEADO</option>
                  <option value="PRACTICANTE">PRACTICANTE</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajasituacion">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i> </span> 
                <select class="form-control input-lg select-picker" name="editsituacion" id="editsituacion">
                  <option value="">SITUACION</option>
                  <option value="CONTRATO">CONTRATO</option>
                  <option value="PLANILLA">PLANILLA</option>
                  <option value="PRACTICANTE">PRACTICANTE</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6" id="cajaexplosivos">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span> 
                <select class="form-control input-lg select-picker" name="editexplosivos" id="editexplosivos">
                  <option value="">AUTORIZACION DE MANIPULACION DE EXPLOSIVOS SUCAMEC</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <input type="button" class="btn pull-left" value="SOLO MINA HUANCHOR" onclick="agregardatos();" />
          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarPersonal = new ControladorPersonales();
        $editarPersonal -> ctrEditarPersonal();

      ?>

    

    </div>

  </div>

</div>
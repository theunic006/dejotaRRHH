<?php

if ($_SESSION["perfil"] == "Ninguno") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

?>

<!--=====================================
LISTAR PERSONAL
======================================-->

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administracion del Personal

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administracion del Personal</li>

    </ol>

  </section>
  <!--=====================================
  LISTAR PERSONALES
  ======================================-->

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPersonal">
          Agregar Personal
        </button>
      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
          <thead>
            <tr>

              <th style="width:10px">#</th>
              <th>Observacion</th>
              <th style="width:170px">Nombre</th>
              <th>DNI</th>
              <th>Cargo</th>
              <th>Celular</th>
              <th>Edad</th>
              <th>Documentacion</th>
              <th style="width:100px">% Datos</th>
              <th style="width:105px">Acciones</th>
              <th style="width:60px">Examenes</th>
              <th style="width:20px">Borrar</th>

            </tr>
          </thead>
          <tbody>

            <?php
            $item = null;
            $valor = null;
            $personales = ControladorPersonales::ctrMostrarPersonales($item, $valor);

            foreach ($personales as $key => $value) {
              // Variables
              $firma = $value["firma"];
              $huella = $value["huella"];
              $dnii = $value["dnii"];
              $cv = $value["cv"];
              $observacion = $value["observacion"];
              $examen = $value["certificado"];
              $induccion = $value["induccion"];
              $acta = $value["acta"];
              $tipo = $value["tipo"];
              $fechanacimiento = $value["fechanacimiento"];

              // Calcular la edad
              $edadpersonal = (new DateTime($fechanacimiento))->diff(new DateTime('today'))->y;

              // Fechas de examen médico
              $emfechafin = $value["fechafin"];
              $ifechafin = $value["ifechafin"];

              // Progreso de completitud de items
              $items = ['firma' => $firma, 'huella' => $huella, 'dnii' => $dnii, 'cv' => $cv];
              $total = array_sum(array_map(fn ($item) => $item == 'SI' ? 25 : 0, $items));

              // Determinar clases de progreso y badge
              list($progreso, $badge) = $total < 51
                ? ['progress-bar progress-bar-danger', 'badge bg-red']
                : ($total < 76
                  ? ['progress-bar progress-bar-yellow', 'badge bg-yellow']
                  : ['progress-bar progress-bar-green', 'badge bg-green']);

              // Determinar clase de observación
              $observacion = $observacion == 'SI'
                ? ($tipo == 'DEJOTA' ? 'btn btn-danger' : 'btn bg-navy')
                : 'btn btn-success';

              // Determinar clase de examen
              $examen = $examen == 'NO'
                ? 'btn btn-danger'
                : ($emfechafin <= date('Y-m-d') ? 'btn btn-default' : 'btn btn-success');

              // Determinar clase de inducción
              $induccion = ($induccion == 'SI' && $acta == 'SI')
                ? ($ifechafin <= date('Y-m-d') ? 'btn btn-default' : 'btn btn-success')
                : 'btn btn-danger';

              // Progreso de completitud de datos
              $values = [
                "celular" => $value["celular"],
                "correo" => $value["correo"],
                "estadocivil" => $value["estadocivil"],
                "fechanacimiento" => $value["fechanacimiento"],
                "edad" => $value["edad"],
                "direccion" => $value["direccion"],
                "departamento" => $value["departamento"],
                "lugarresidencia" => $value["lugarresidencia"],
                "nacionalidad" => $value["nacionalidad"],
                "familia" => $value["familia"]
              ];

              $camposCompletos = count(array_filter($values, fn ($valor) => $valor !== null && $valor !== '' && $valor !== 'NINGUNO'));
              $totalCampos = count($values);
              $porcentajeCompletitud = $totalCampos > 0 ? ($camposCompletos / $totalCampos) * 100 : 0;
              $porcentajeCompletitud = number_format($porcentajeCompletitud, 0);

              list($progreso2, $badge2) = $porcentajeCompletitud < 71
                ? ['progress-bar progress-bar-danger', 'badge bg-red']
                : ($porcentajeCompletitud < 91
                  ? ['progress-bar progress-bar-yellow', 'badge bg-yellow']
                  : ['progress-bar progress-bar-green', 'badge bg-green']);

              // Generar la fila de la tabla
              echo '<tr>
                      <td>' . ($key + 1) . '</td>
                      <td><button class="' . $observacion . ' btnEditarObservacion" data-toggle="modal" data-target="#modalEditarObservacion" idObservacion="' . $value["id"] . '" title="Observaciones"><i class="fa fa-bomb"></i> Obs</button></td>
                      <td>' . $value["nombre"] . '</td>
                      <td>' . $value["dni"] . '</td>
                      <td>' . $value["cargo"] . '</td>
                      <td>' . $value["celular"] . '</td>
                      <td>' . $edadpersonal . '</td>
                      <td><div class="progress progress-xs">
                          <div class="' . $progreso . '" style="width: ' . $total . '%"></div>
                          </div><span class="' . $badge . '">' . $total . '%</span>
                      </td>
                      <td><div class="progress progress-xs">
                          <div class="' . $progreso2 . '" style="width: ' . $porcentajeCompletitud . '%"></div>
                          </div><span class="' . $badge2 . '">' . $porcentajeCompletitud . ' %</span>
                      </td>
                      <td><div class="btn-group">
                          <button class="btn btn-primary btnEditarPersonal" data-toggle="modal" data-target="#modalEditarPersonal" idPersonal="' . $value["id"] . '" title="Editar Personal"><i class="fa fa-eye"></i></button>
                          <button class="btn btn-primary btnEditarExperiencia" data-toggle="modal" data-target="#modalEditarExperiencia" idExperiencia="' . $value["id"] . '" title="Experiencia"><i class="fa fa-cubes"></i></button>
                          <button class="btn btn-primary btnEditarFamiliar" data-toggle="modal" data-target="#modalEditarFamiliar" idFamiliar="' . $value["id"] . '" title="Datos Familiar"><i class="fa fa-users"></i></button>
                      </div></td>
                      <td><div class="btn-group">
                          <button class="' . $examen . ' btnEditarExamen" data-toggle="modal" data-target="#modalEditarExamen" idExamen="' . $value["id"] . '" title="Examen Medico"><i class="fa fa-stethoscope"></i></button>
                          <button class="' . $induccion . ' btnEditarInduccion" data-toggle="modal" data-target="#modalEditarInduccion" idInduccion="' . $value["id"] . '" title="Inducción"><i class="fa fa-linkedin"></i></button>
                      </div></td>
                      <td><div class="btn-group">
                          <button class="btn btn-danger btnEliminarPersonal" idPersonal="' . $value["id"] . '" title="Eliminar Personal"><i class="fa fa-trash"></i></button>
                      </div></td>
                    </tr>';
            }
            ?>


          </tbody>
        </table>
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
                <input type="text" class="form-control input-lg" name="dni" placeholder="Ingresar DNI" data-inputmask="'mask':'99999999'" data-mask required>
              </div>
            </div>

            <!-- ENTRADA PARA SELECCIONAR cargo -->

            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" id="cargo" name="cargo" required>
                  <option value="">Selecionar Cargo</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $cargos = ControladorCargos::ctrMostrarCargos($item, $valor);

                  foreach ($cargos as $key => $value) {

                    echo '<option value="' . $value["id"] . '">' . $value["cargo"] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA EL CELULAR -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="celular" placeholder="Ingresar Celular" data-inputmask="'mask':'999999999'" data-mask required>
              </div>
            </div>

            <!-- ENTRADA PARA LA nacionalidad -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" class="form-control input-lg" name="nacionalidad" placeholder="Ingresar Nacionalidad" required>
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
                  <option value="CONVIVIENTE">CONVIVIENTE</option>
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
                <input type="date" class="form-control input-lg changeAnios" name="fechanacimiento" placeholder="Ingresar fecha nacimiento" required>
              </div>
            </div>


            <!-- ENTRADA PARA LA Edad-->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hand-peace-o"></i></span>
                <input type="text" class="form-control input-lg" name="edad" placeholder="Ingresar Su Edad" data-inputmask="'mask':'99'" data-mask required>
              </div>
            </div>

            <!-- ENTRADA PARA LA direccion -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control input-lg" name="direccion" placeholder="Ingresar Direccion" required>
              </div>
            </div>

            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control input-lg" name="correo" placeholder="Ingresar correo" required>
              </div>
            </div>
            <!-- ENTRADA PARA LA distrito -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-alpha-desc"></i> Distrito</span>
                <input type="text" class="form-control input-lg" name="distrito" placeholder="Ingresar Distrito" required>
              </div>
            </div>

            <!-- ENTRADA PARA LA provincia -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i> Provincia</span>
                <input type="text" class="form-control input-lg" name="provincia" placeholder="Ingresar Provincia" required>
              </div>
            </div>

            <!-- ENTRADA PARA LA departamento -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-desc"></i> Departamento</span>
                <input type="text" class="form-control input-lg" name="departamento" placeholder="Ingresar Departamento" required>
              </div>
            </div>

            <!-- ENTRADA PARA LUGAR DE RESIDENCIA -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-desc"></i> L. Residencia</span>
                <input type="text" class="form-control input-lg" name="lugarresidencia" placeholder="Lugar de Residencia" required>
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
      $crearPersonal->ctrCrearPersonal();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PERSONAL
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
                <input type="text" min="0" class="form-control input-lg" name="editdni" id="editdni" placeholder="Ingresar DNI" data-inputmask="'mask':'99999999'" data-mask required>
              </div>
            </div>
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" id="editarCargo" name="editarCargo" required>
                  <option value="">Seleccionar Cargo</option>
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
                  <option value="CONVIVIENTE">CONVIVIENTE</option>
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
                <input type="date" class="form-control input-lg changeAnios" name="editfechanacimiento" id="editfechanacimiento" required>
              </div>
            </div>


            <!-- ENTRADA PARA LA Edad-->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hand-peace-o"></i></span>
                <input type="text" class="form-control input-lg" name="editedad" id="editedad" data-inputmask="'mask':'99'" data-mask>
              </div>
            </div>

            <!-- ENTRADA PARA LA direccion -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i> Direccion</span>
                <input type="text" class="form-control input-lg" name="editdireccion" id="editdireccion">
              </div>
            </div>

            <!-- ENTRADA PARA LA correo -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i> Correo</span>
                <input type="text" class="form-control input-lg" name="editcorreo" id="editcorreo">
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
                <input type="text" class="form-control input-lg" name="editdepartamento" id="editdepartamento">
              </div>
            </div>
            <!-- ENTRADA PARA LUGAR DE RESIDENCIA -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-sort-amount-desc"></i> L. Residencia</span>
                <input type="text" class="form-control input-lg" name="editlugarresidencia" id="editlugarresidencia">
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
      $editarPersonal->ctrEditarPersonal();

      ?>



    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR FAMILIAR
======================================-->

<div id="modalEditarFamiliar" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Datos del Familiar</h4>
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
                <input type="text" class="form-control input-lg" name="nombreFam" id="nombreFam" placeholder="Nombre del Familiar">
                <input type="hidden" id="idFamiliar" name="idFamiliar">
                <input type="hidden" id="idFamPersonal" name="idFamPersonal">
              </div>
            </div>

            <!-- ENTRADA PARA EL PARENTESCO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg select-picker" name="parentescoFam" id="parentescoFam" placeholder="Seleccione Parentesco">
                  <option value="">SELECCIONE PARENTESCO</option>
                  <option value="CUÑADO">CUÑADO</option>
                  <option value="CUÑADA">CUÑADA</option>
                  <option value="PAREJA">PAREJA</option>
                  <option value="ESPOSO">ESPOSO</option>
                  <option value="ESPOSA">ESPOSA</option>
                  <option value="HERMANO">HERMANO</option>
                  <option value="HERMANA">HERMANA</option>
                  <option value="HIJO">HIJO</option>
                  <option value="HIJA">HIJA</option>
                  <option value="PADRE">PADRE</option>
                  <option value="MADRE">MADRE</option>
                  <option value="TIO">TIO</option>
                  <option value="TIA">TIA</option>
                  <option value="PRIMO">PRIMO</option>
                  <option value="PRIMA">PRIMA</option>
                  <option value="ABUELO">ABUELO</option>
                  <option value="ABUELA">ABUELA</option>
                  <option value="APODERADO">APODERADO</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="celularFam" id="celularFam" data-inputmask="'mask':'999999999'" data-mask placeholder="escriba numero de Celular">
              </div>
            </div>

            <!-- ENTRADA PARA EL PLANILLA -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-support"></i></span>
                <select class="form-control input-lg select-picker" name="planillaFam" id="planillaFam" placeholder="Esta en Planilla?">
                  <option value="">ESTA EN PLANILLA?:</option>
                  <option value="SI">PLANILLA - SI</option>
                  <option value="NO">PLANILLA - NO</option>
                </select>
              </div>
            </div>
            <!-- ENTRADA PARA FOTOGRAFIA -->

            <div class="form-group col-md-6">
              <div class="panel">SUBIR FOTOGRAFIA </div>
              <input type="file" class="imagenfoto" name="fotoFam">
              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/usuarios/default/anonymous.jpg" class="img-thumbnail previsualizarFoto" width="100px">
              <input type="hidden" name="fotoactual" id="fotoactual">
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

      $editarFamiliar = new ControladorPersonales();
      $editarFamiliar->ctrEditarFamiliar();

      ?>



    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR EXPERIENCIA
======================================-->

<div id="modalEditarExperiencia" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <input type="button" class="btn btn-success pull-left" value="Agregar Experiencia" onclick="agregarexp();" />
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <input type="hidden" id="idnose" name="idnose">

            <!-- ENTRADA PARA EL PARENTESCO -->
            <div class="form-group col-md-6" id="cajatipo">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg select-picker" name="exptipo" id="exptipo" placeholder="Seleccione Parentesco">
                  <option value="">TIPO EXPERIENCIA</option>
                  <option value="MINA">MINA</option>
                  <option value="SUPERFICIE">SUPERFICIE</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajaempresa">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="expempresa" id="expempresa" placeholder="Nombre de la Empresa">
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajacargo">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="expcargo" id="expcargo" placeholder="Escriba el Cargo">
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajaarea">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="exparea" id="exparea" placeholder="Escriba el Area">
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE INICIO -->
            <div class="form-group col-md-6" id="cajafechainicio">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control input-lg" name="expfechainicio" id="expfechainicio" placeholder="Fecha de Inicio">
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE INICIO -->
            <div class="form-group col-md-6" id="cajafechafin">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control input-lg" name="expfechafin" id="expfechafin" placeholder="Fecha Fin">
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajaanio">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="expanio" id="expanio" placeholder="Años">
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajames">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="expmes" id="expmes" placeholder="Meses">
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajadia">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="expdia" id="expdia" placeholder="Dias">
              </div>
            </div>
            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajaobservaciones">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="expobservaciones" id="expobservaciones" placeholder="Escriba alguna Observacion">
              </div>
            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" id="cajaboton">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>
      <?php

      $editarExperiencia = new ControladorPersonales();
      $editarExperiencia->ctrEditarExperiencia();

      ?>
      <div class="modal-header" style="background:#3c8dbc; color:white">
        <h4 class="modal-title">Experiencia</h4>
        <div id="respuesta"></div>
      </div>
      <div class="modal-body">
        <div class="box-body">
          <table id="tablaRegistros" class="table table-bordered table-striped dt-responsive" width="100%">

            <thead>
              <tr>
                <th>EMPRESA</th>
                <th>TIPO</th>
                <th>Cargo</th>
                <th>AREA</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR EXAMEN
======================================-->

<div id="modalEditarExamen" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 75% !important;">
    <div class="modal-content">
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
                <input type="date" class="form-control input-lg" name="fechainicioExam" id="fechainicioExam" placeholder="Fecha de Inicio de Examen Medico">
                <input type="hidden" name="idExamen" id="idExamen">
                <input type="hidden" name="idExamPersonal" id="idExamPersonal">
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE VENCIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control input-lg" name="fechafinExam" id="fechafinExam" placeholder="Fecha Fin de Examen Medico">
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
      $editarExamen->ctrEditarExamen();

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
                <input type="date" class="form-control input-lg" name="fechainicioInd" id="fechainicioInd" data-mask placeholder="Fecha de Inicio de Induccion">
                <input type="hidden" name="idInduccion" id="idInduccion">
                <input type="hidden" name="idIndPersonal" id="idIndPersonal">
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE VENCIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control input-lg" name="fechafinInd" id="fechafinInd" data-mask placeholder="Fecha Fin de Induccion">
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
              <div class="panel">SUBIR PDF CERTIFICADO INDUCCION </div>
              <input type="file" class="pdfinduccion" name="editpdfinduccion">
              <p class="help-block">Peso máximo de la foto 10MB</p>

              <a href="#" target="_blank" id="induccionpdf"><img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail previsualizarinduccion" width="100px"></a>
              <input type="hidden" name="induccionactual" id="induccionactual">
              <input type="text" name="induindu" id="induindu" disabled>

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
      $editarInduccion->ctrEditarInduccion();

      ?>



    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR OBSERVACIONES
======================================-->

<div id="modalEditarObservacion" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">


        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Cualquier Observacion que tenga el Personal</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL TIENE O NO  -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                <select class="form-control input-lg select-picker" name="tieneObs" id="tieneObs">
                  <option value="">TIENE ALGUNA OBSERVACION?:</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
                <input type="hidden" name="idObservacion" id="idObservacion">
                <input type="hidden" name="idObsPersonal" id="idObsPersonal">
              </div>
            </div>

            <!-- ENTRADA PARA EL PROBLEMA -->
            <div class="form-group col-md-6" id="cajatipoObs">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-toggle-on"></i></span>
                <select class="form-control input-lg select-picker" name="tipoObs" id="tipoObs">
                  <option value="">TIPO DE OBSERVACION?:</option>
                  <option value="DEJOTA">DEJOTA</option>
                  <option value="MINERA">MINERA</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajaobservacionObs">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                <input type="text" class="form-control input-lg" name="observacionObs" id="observacionObs" placeholder="Escriba alguna Observacion">
              </div>
            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-6" id="cajadetalleObs">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                <input type="text" class="form-control input-lg" name="detalleObs" id="detalleObs" placeholder="Detalle la observacion">
              </div>
            </div>

            <!-- ENTRADA PARA LA FECHA DE INICIO -->
            <div class="form-group col-md-6" id="cajafechaterminaObs">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control input-lg" name="fechaterminaObs" id="fechaterminaObs" data-mask placeholder="Fecha que termina la observacion">
              </div>
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

      $editarObservacion = new ControladorPersonales();
      $editarObservacion->ctrEditarObservacion();

      ?>



    </div>

  </div>

</div>
<?php

$eliminarPersonal = new ControladorPersonales();
$eliminarPersonal->ctrEliminarPersonal();

?>
<?php

$idPlanta = $_GET["idPlanta"];

$valor=$_GET["idPlanta"];
$item='id';

$planta = ControladorPlantas::ctrMostrarPlantasPre($item, $valor);


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
      
    Lista de Servision de la Planta: <?php echo $planta["nombre"]?> ::::: Unidad de Produccion: <?php echo $planta["unidadproduccion"]?>
    
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active"></li>
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border botonSolo">
  <!--
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTarea">
          Agregar Servicio
        </button>
      </div>
-->
      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Titulo</th>
           <th>Fecha Inicio</th>
           <th>Fecha Fin</th>
           <th>Archivos</th>
           <th>Acciones</th>
           <th>Finalistas</th>
         </tr> 
        </thead>

        <tbody>

        <?php
          
          $item='idplanta';
          $valor=$idPlanta;

          $respuesta = ControladorTareas::ctrMostrarTareas($item, $valor);

          foreach ($respuesta as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>
                  <td>'.$value["titulo"].'</td>
                  <td>'.$value["fechainicio"].'</td>
                  <td>'.$value["fechafin"].'</td>';
                  if($value["cstr"]!=null){
                    echo '
                    <td><div class="btn-group">
                    <a class="btn btn-success" href="'.$value["cstr"].'" target="_blank"><i class="fa fa-print"></i> CSTR</a>
                    <a class="btn btn-success" href="'.$value["vidaley"].'" target="_blank"><i class="fa fa-print"></i> Vida Ley</a>
                    <a class="btn btn-success" href="'.$value["actaasistencia"].'" target="_blank"><i class="fa fa-print"></i> Induccion</a>
                    </div></td>';
                  }else{
                    echo '
                  <td>SIN ARCHIVOS</td>';
                  }
          echo '

                  <td>

                    <div class="btn-group">

                      <!--<a class="btn btn-success" href="index.php?ruta=ventas&xml='.$value["id"].'">xml</a> -->';

                      if($_SESSION["perfil"] == "Administrador"){
                        if($value["personal"]==null){
                          echo '<button class="btn btn-primary btnIngresarPersonal" idTarea="'.$value["id"].'" idPlanta="'.$idPlanta.'"><i class="fa fa-plus"></i> Registrar</button>';

                        }else{
                          echo '<button class="btn btn-success btnEditarPersonal" data-toggle="modal" data-target="#modalEditarTarea" idTarea="'.$value["id"].'"><i class="fa fa-eye"></i> Completar</button>
                          <button class="btn btn-warning btnInsertarPersonal" idTarea="'.$value["id"].'" idPlanta="'.$idPlanta.'"><i class="fa fa-eye"></i> Proceso</button>';
                        }
                    }

                    echo '</div>  

                  </td>
                  <td>';
                  if($value["personal"]==null){
                    echo'<button class="btn btn-default ">Sin Registro </button>';
                    
                  }else{

                    echo '<button class="btn btn-success btnImprimirPdfRegistro" idTarea="'.$value["id"].'"><i class="fa fa-print"></i> Registro </button>';
                    
                  }
                  /*if($value["personal"]==null){
                    if($value["idpreseleccion"]==null){
                      echo'  <div class="btn-group">
                    
                    <button class="btn btn-default ">Sin Registro </button></div>  ';

                    }else{
                      echo'  <div class="btn-group">
                      <button class="btn btn-success btnPdfSupervisor" codigoSupervisor="'.$value["idpreseleccion"].'"><i class="fa fa-print"></i> Supervisor </button>
                      <button class="btn btn-default ">Sin Registro </button></div>  ';
                    }
                    
                  }else{
                    if($value["idpreseleccion"]==null){
                      echo'  <div class="btn-group">
                      <button class="btn btn-success btnImprimirPdfRegistro" idTarea="'.$value["id"].'"><i class="fa fa-print"></i> Registro </button>
                      
                      </div>
                    ';

                    }else{
                      echo'  <div class="btn-group">
                      <button class="btn btn-success btnPdfSupervisor" codigoSupervisor="'.$value["idpreseleccion"].'"><i class="fa fa-print"></i> Supervisor </button>
                      <button class="btn btn-success btnImprimirPdfRegistro" idTarea="'.$value["id"].'"><i class="fa fa-print"></i> Registro </button>
                      <button class="btn btn-success btnExcelRegistro" idTarea="'.$value["id"].'"><i class="fa fa-print"></i> Excel </button>
                      </div>
                      ';
                    }

                  }*/

                  echo '</tr>';
            }

        ?>
               
        </tbody>

       </table>

       <?php

      $eliminarVenta = new ControladorVentas();
      $eliminarVenta -> ctrEliminarVenta();

      ?>
       

      </div>

    </div>

  </section>

</div>



<!--=====================================
MODAL AGREGAR tarea
======================================-->

<div id="modalAgregarTarea" class="modal fade" role="dialog">
  <div class="modal-dialog " style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Tarea</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-bank"></i></span> 
                <input type="text" class="form-control input-lg" name="nombre" placeholder="Ingresar nombre de TAREA" required>
                <input type="hidden" id="idplanta" name="idplanta" value="<?php echo $idPlanta?>">
              </div>
            </div>
            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i> Fecha de Inicio</span> 
                <input type="date" class="form-control input-lg" name="fechainicio" placeholder="Ingresar fecha de inicio">
              </div>
            </div>
            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i> Fecha que Termina</span> 
                <input type="date" class="form-control input-lg" name="fechafin" placeholder="Ingresar fecha fin">
              </div>
            </div>

            <!-- DESDCRIPCION DEL TRABAJO-->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-crop"></i></span> 
                <input type="text" class="form-control input-lg" name="descripciontrabajo" placeholder="DESCRIPCION DEL TRABAJO" required>
              </div>
            </div>
            <!-- ENTRADA PARA EL CARGO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-recycle"></i></span> 
                <select class="form-control input-lg select-picker" name="areatrabajo" id="areatrabajo">
                  <option value="">SELECCIONE AREA DE TRABAJO</option>
                  <option value="SUPERFICIE">SUPERFICIE</option>
                  <option value="MINA">MINA</option>
                </select>
              </div>
            </div>
            <!-- QUIEN AUTORIZA-->
            <h4>     RESPONSABLE DE AUTORIZACION DE LA MINERA</h4>
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i> NOMBRE</span> 
                <input type="text" class="form-control input-lg" name="autoriza" placeholder="NOMBRE QUIEN AUTORIZA" required>
              </div>
            </div>
            <!-- QUIEN AUTORIZA--> 
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-black-tie"></i> CARGO</span> 
                <input type="text" class="form-control input-lg" name="cargoautoriza" placeholder="CARGO QUIEN AUTORIZA" required>
              </div>
            </div>

            <!-- QUIEN AUTORIZA-->
            <h4>     SUPERVISOR RESPONSABLE EN CAMPO</h4>
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i> NOMBRE</span> 
                <input type="text" class="form-control input-lg" name="supervisor" placeholder="NOMBRE DEL SUPERVISOR" required>
              </div>
            </div>
            <!-- QUIEN AUTORIZA-->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-black-tie"></i> CARGO</span> 
                <input type="text" class="form-control input-lg" name="cargosupervisor" placeholder="CARGO DEL SUPERVISOR" required>
              </div>
            </div>

            <h4>     SUPERINTENDENTE DE LA MINERA</h4>
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i> NOMBRE</span> 
                <input type="text" class="form-control input-lg" name="superintendente" placeholder="NOMBRE DEL SUPERINTENDENTE" required>
              </div>
            </div>
            <!-- EFECHA DE CONTRATO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i> Fecha Contrato</span> 
                <input type="date" class="form-control input-lg" name="fechacontrato" placeholder="FECHA DE CONTRATO">
              </div>
            </div>  

            
            <!-- ENTRADA PARA SUBIR actaasistencia -->
            <div class="form-group col-md-4">
              <div class="panel"><b>SUBIR ACTA DE ASISTENCIA</b></div>
              <input type="file" class="actaasistencia" name="actaasistencia">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              <img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail" width="100px">
            </div>
            <!-- ENTRADA PARA SUBIR cstr -->
            <div class="form-group col-md-4">
              <div class="panel"><b>SUBIR PDF  DE CSTTR</b></div>
              <input type="file" class="cstr" name="cstr">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              <img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail" width="100px">
            </div>
            <!-- ENTRADA PARA SUBIR vidaley -->
            <div class="form-group col-md-4">
              <div class="panel"><b>SUBIR PDF  DE VIDA LEY</b></div>
              <input type="file" class="vidaley" name="vidaley">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              <img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail" width="100px">
            </div>

          </div> 
        </div>  


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Tarea</button>
        </div>

      </form>

      <?php

        $crearTarea = new ControladorTareas();
        $crearTarea -> ctrCrearTarea();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL Editar tarea
======================================-->

<div id="modalEditarTarea" class="modal fade" role="dialog">
  <div class="modal-dialog " style="width: 75% !important;">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Tarea</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group col-md-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-bank"></i> Nombre</span> 
                <input type="text" class="form-control input-lg" name="edittitulo" id="edittitulo" required>
                <input type="hidden" id="editidplanta" name="editidplanta">
                <input type="hidden" id="idtarea" name="idtarea">
                <input type="hidden" id="idpreseleccion" name="idpreseleccion">
                
              </div>
            </div>

            <div class="form-group col-md-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-hand-o-right"></i> Descripcion</span> 
                <input type="text" class="form-control input-lg" name="editdescripciontrabajo" id="editdescripciontrabajo" required>
              </div>
            </div>
            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i> Fecha de Inicio</span> 
                <input type="date" class="form-control input-lg" name="editfechainicio" id="editfechainicio">
              </div>
            </div>
            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i> Fecha que Termina</span> 
                <input type="date" class="form-control input-lg" name="editfechafin" id="editfechafin">
              </div>
            </div>
            <!-- ENTRADA PARA EL CARGO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-recycle"></i></span> 
                <select class="form-control input-lg select-picker" name="editareatrabajo">
                  <option value="" id="editareatrabajo"></option>
                  <option value="SUPERFICIE">SUPERFICIE</option>
                  <option value="MINA">MINA</option>
                </select>
              </div>
            </div>

            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-recycle"></i></span> 
                <select class="form-control input-lg select-picker" name="edittipotrabajo" >
                  <option value="" id="edittipotrabajo"></option>
                  <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                  <option value="LOGISTICO">LOGISTICO</option>
                </select>
              </div>
            </div>
            <!-- QUIEN AUTORIZA-->
            <h4>     RESPONSABLE DE AUTORIZACION DE LA MINERA</h4>
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i> NOMBRE</span> 
                <input type="text" class="form-control input-lg" name="editautoriza" id="editautoriza">
              </div>
            </div>
            <!-- QUIEN AUTORIZA--> 
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-black-tie"></i> CARGO</span> 
                <input type="text" class="form-control input-lg" name="editcargoautoriza" id="editcargoautoriza">
              </div>
            </div>

            <!-- QUIEN AUTORIZA-->
            <h4>     SUPERVISOR RESPONSABLE EN CAMPO</h4>
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i> NOMBRE</span> 
                <input type="text" class="form-control input-lg" name="editsupervisor" id="editsupervisor">
              </div>
            </div>
            <!-- QUIEN AUTORIZA-->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-black-tie"></i> CARGO</span> 
                <input type="text" class="form-control input-lg" name="editcargosupervisor" id="editcargosupervisor">
              </div>
            </div>

            <h4>     SUPERINTENDENTE DE LA MINERA</h4>
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i> NOMBRE</span> 
                <input type="text" class="form-control input-lg" name="editsuperintendente" id="editsuperintendente">
              </div>
            </div>
            <!-- EFECHA DE CONTRATO -->
            <div class="form-group col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i> Fecha Contrato</span> 
                <input type="date" class="form-control input-lg" name="editfechacontrato" id="editfechacontrato">
              </div>
            </div>  

            
            <!-- ENTRADA PARA SUBIR actaasistencia -->
            <div class="form-group col-md-4">
              <div class="panel"><b>SUBIR ACTA DE ASISTENCIA</b></div>
              <input type="file" class="actaasistencia" name="actaasistencia">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              <img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail" width="100px">
            </div>
            <!-- ENTRADA PARA SUBIR cstr -->
            <div class="form-group col-md-4">
              <div class="panel"><b>SUBIR PDF  DE CSTTR</b></div>
              <input type="file" class="cstr" name="cstr">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              <img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail" width="100px">
            </div>
            <!-- ENTRADA PARA SUBIR vidaley -->
            <div class="form-group col-md-4">
              <div class="panel"><b>SUBIR PDF  DE VIDA LEY</b></div>
              <input type="file" class="vidaley" name="vidaley">
              <p class="help-block">Peso máximo de la foto 10MB</p>
              <img src="vistas/img/personal/default/pdf2.png" class="img-thumbnail" width="100px">
            </div>

          </div> 
        </div>  


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Tarea</button>
        </div>

      </form>

      <?php

        $editarTarea = new ControladorTareas();
        $editarTarea -> ctrEditarTarea();

      ?>

    </div>

  </div>

</div>
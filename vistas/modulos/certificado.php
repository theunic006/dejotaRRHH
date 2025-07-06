<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

    <section class="content-header">

        <h1>Unidad de Produccion - Area de Certificados</h1>

        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Area de Certificados</li>
        </ol>

    </section>

    <section class="content">
        <div class="box">

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                    <thead>

                        <tr>

                            <th style="width:10px">#</th>
                            <th>TITULO</th>
                            <th>NOMBRE</th>
                            <th>UNIDAD</th>
                            <th>FECHA CONTRATO</th>
                            <th>AUTORIZA</th>
                            <th>SUPERVISOR</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

          $item = null;
          $valor = null;

          $tareas = ControladorTareas::ctrMostrarTareasCert($item, $valor);

          foreach ($tareas as $key => $value) {
           
            echo ' <tr>

                    <td>'.($key+1).'</td>
                    <td>'.$value["titulo"].'</td>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["unidadproduccion"].'</td>
                    <td>'.$value["fechacontrato"].'</td>
                    <td>'.$value["autoriza"].'</td>
                    <td>'.$value["supervisor"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-primary btnIngresarCertifocado" idCertifocado="'.$value["id"].'"><i class="fa fa-pencil"></i> Ingresar </button>';

                      echo '</div>  

                    </td>

                  </tr>';
          }

        ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>

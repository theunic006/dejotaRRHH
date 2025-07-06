<div class="content-wrapper">

<?php
$idCertificado=$_GET["idCertificado"];

$rpta = ControladorPersonales::ctrMostrarCertificado($idCertificado);

?>

    <section class="content-header">

        <h1>Unidad Minera: <?php echo $rpta[0]["unidad"]?>
        </h1>

    </section>

    <section class="content">

        <div class="row">

            <!--=====================================
      LA TABLA DE TAREA - DATATABLE-TAREA.AJAX.PHP
      ======================================-->

            <div class="col-lg-12">
                <div class="box box-warning">
                    <div class="box-header with-border"></div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped dt-responsive tcertificado">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 270px">Nombre</th>
                                    <th style="width: 40px">DNI</th>
                                    <th>Cargo</th>

                                    <th>Fecha Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Certificado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                  foreach ($rpta as $key => $value) {
                                  
                                    echo ' <tr>

                                            <td>'.($key+1).'</td>
                                            <td>'.$value["nombre"].'</td>
                                            <td>'.$value["dni"].'</td>
                                            <td>'.$value["cargo"].'</td>
                                            <td>'.$value["fechainicio"].'</td>
                                            <td>'.$value["fechafin"].'</td>

                                            <td>

                                              <div class="btn-group">
                                                  
                                                <button class="btn btn-warning btnEditarCertificado" idtarea="'.$_GET["idCertificado"].'" idCertificado="'.$value["id"].'"><i class="fa fa-pencil"></i> Certificado</button>';

                                               /* if($_SESSION["perfil"] == "Administrador"){

                                                  echo '<button class="btn btn-danger btnEliminarCertificado" idCertificado="'.$value["id"].'"><i class="fa fa-times"></i> Eliminar</button>';

                                                }*/

                                              echo '</div>  

                                            </td>

                                          </tr>';
                                  }

                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>



        </div>

    </section>
</div>
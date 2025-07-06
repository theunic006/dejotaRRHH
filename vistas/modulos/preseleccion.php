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
      
      Preseleccion del Supervisor
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Preseleccion</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <a href="crear-preseleccion?ruta=crear-preseleccion">
          <button class="btn btn-primary">Agregar Lista</button>
        </a>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Nombre Planta</th>
           <th>Unidad</th>
           <th>Fecha</th>
           <th>Acciones</th>
           <th>Atendido</th>
         </tr> 
        </thead>
        <tbody>

        <?php

        $item=null;
        $valor=null;

          $respuesta = ControladorPre::ctrMostrarPre($item,$valor);

          foreach ($respuesta as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>

                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["unidadproduccion"].'</td>
                  <td>'.$value["fecha"].'</td>';

                  echo '

                  <td>

                    <div class="btn-group">';

                      if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Supervisor"){

                      echo '<button class="btn btn-warning btnEditarPreseleccion" idPreseleccion="'.$value["id"].'"><i class="fa fa-pencil"></i> Editar</button>
                      <button class="btn btn-danger btnEliminarPreseleccion" idPreseleccion="'.$value["id"].'"><i class="fa fa-times"></i> Borarr</button>';

                    }
                   echo '<button class="btn btn-info btnPdfSupervisor" codigoSupervisor="'.$value["id"].'">
                        <i class="fa fa-print"></i> Ver </button>
                        <button class="btn btn-success btnExcelSupervisor" codigoSupervisor="'.$value["id"].'">
                        <i class="fa fa-file-excel-o"></i> Excel </button>';

                    echo '</div>  
                  </td>';
                  if($value["aviso"]=='1'){
                    echo '<td><span class="label label-success">Por Atender</span></td>';
                  }else{
                    echo '<td><span class="label label-danger">Atendido</span></td>';
                  }
                  
               echo' </tr>';
            }

        ?>
               
        </tbody>

       </table>

       <?php

      $eliminarPre = new ControladorPre();
      $eliminarPre -> ctrEliminarPre();

      ?>
       

      </div>

    </div>

  </section>

</div>





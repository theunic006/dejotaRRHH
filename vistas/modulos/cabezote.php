 <header class="main-header">

     <!--=====================================
	LOGOTIPO
	======================================-->
     <a href="inicio" class="logo">

         <!-- logo mini -->
         <span class="logo-mini">
             <img src="vistas/img/plantilla/icono-blanco.png" class="img-responsive" style="padding:10px">
         </span>

         <!-- logo normal -->

         <span class="logo-lg">
             <img src="vistas/img/plantilla/logo-blanco-lineal.png" class="img-responsive" style="padding:10px 0px">
         </span>

     </a>

     <!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
     <nav class="navbar navbar-static-top" role="navigation">

         <!-- Botón de navegación -->

         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
             <span class="sr-only">Toggle navigation</span>
         </a>

         <!-- perfil de usuario -->

         <div class="navbar-custom-menu">
             <ul class="nav navbar-nav">
                 <li class="dropdown notifications-menu col-xd-5">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                         <i class="fa fa-bell-o"></i>
                         <span class="label label-warning"><label id="contador" name="contador"></label></span>
                     </a>
                     
                     <ul class="dropdown-menu" >
                        <li class="header"> Tiene <label id="contar" name="contar"></label> Notificaciones que contestar</li>
          
                         <li>

                             <ul class="menu" id="listaAlertas">
                             </ul>
                         </li>
                     </ul>
                 </li>
				 
                 <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                         <?php
					if($_SESSION["foto"] != ""){
						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
					}else{
						echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
					}
					?>

                         <span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span>
                     </a>

                     <!-- Dropdown-toggle -->

                     <ul class="dropdown-menu">
                         <li class="user-body">
                             <div class="pull-right">
                                 <a href="salir?ruta=salir" class="btn btn-default btn-flat">Salir</a>
                             </div>
                         </li>
                     </ul>

                 </li>
             </ul>
         </div>

     </nav>

 </header>
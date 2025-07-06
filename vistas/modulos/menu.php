<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<?php



			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Supervisor") {

				echo '<li class="active">
				<a href="inicio?ruta=inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>';
			}
			if ($_SESSION["perfil"] == "Administrador") {
				echo '<li>
				<a href="usuarios?ruta=usuarios">
					<i class="fa fa-user"></i>
					<span>Usuarios</span>
				</a>
			</li>';
			}

			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Supervisor") {

				echo '<li class="treeview">
				<a href="#">
					<i class="fa fa-user"></i>
					<span>Personal</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
		
				<ul class="treeview-menu">
					
					<li>
						<a href="personal?ruta=personal">
							<i class="fa fa-circle-o"></i>
							<span>Lista Personal</span>
						</a>
					</li>
		
					<li>
						<a href="observaciones?ruta=observaciones">
							<i class="fa fa-circle-o"></i>
							<span>Observados</span>
						</a>
					</li>';

				if ($_SESSION["perfil"] == "Administrador") {

					echo '<li>
						<a href="personal?ruta=personal">
							<i class="fa fa-circle-o"></i>
							<span>Desactualizado</span>
						</a>
					</li>';
				}

				if ($_SESSION["perfil"] == "Administrador") {

					echo '<li>
							<a href="cargos?ruta=cargos">
								<i class="fa fa-circle-o"></i>
								<span>Cargos</span>
							</a>
						</li>';
				}

				echo '</ul>
		
			</li>';
			}

			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Supervisor") {

				echo '<li>
				<a href="preseleccion?ruta=preseleccion">
					<i class="fa fa-user-md"></i>
					<span>Supervisor</span>
				</a>
			</li>';
			}

			if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>
				<a href="config?ruta=config">
					<i class="fa fa-tool"></i>
					<span>Configuracion</span>
				</a>
			</li>';
			}
			/*

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">
				<a href="certificado">
					<i class="fa fa-home"></i>
					<span>Certificado</span>
				</a>
			</li>';

		}
		
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>
				<a href="categorias">
					<i class="fa fa-th"></i>
					<span>Categorías</span>
				</a>
			</li>

			<li>
				<a href="productos">
					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>
				</a>
			</li>';

		}



		
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>
				<a href="clientes">
					<i class="fa fa-users"></i>
					<span>Clientes</span>
				</a>
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">
				<a href="#">
					<i class="fa fa-list-ul"></i>
					<span>Ventas</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>

				<ul class="treeview-menu">
					
					<li>
						<a href="ventas">
							<i class="fa fa-circle-o"></i>
							<span>Administrar ventas</span>
						</a>
					</li>

					<li>
						<a href="crear-venta">
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>
						</a>
					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>
						<a href="reportes">
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>
						</a>
					</li>';

					}

				echo '</ul>

			</li>';

		}
		*/

			?>

		</ul>

	</section>

</aside>
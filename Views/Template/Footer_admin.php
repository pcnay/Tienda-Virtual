    <script>
			// Genera una variable en JavaScript desde PHP.
			const base_url = "<?php echo base_url(); ?>";
		</script>

		<!-- Essential javascripts for application to work-->
    <script src="Assets/js/jquery-3.3.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/main.js"></script>
		<!-- Se agrega la nueva version del"fontawesome"-->
		<script src="Assets/js/fontawesome.js"></script>
		<script src="Assets/js/Functions_admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="Assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
		<script type="text/javascript" src="Assets/js/plugins/sweetalert.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="Assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="Assets/js/plugins/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="Assets/js/plugins/bootstrap-select.min.js"></script>
    
		<!-- Estos archivos tienen una función "openModal"  -->
		<?php if ($data['page_name'] == "Roles"){ ?>
		<script src="Assets/js/Functions_roles.js"></script>
		<?php
			}
		?>
		<?php if ($data['page_name'] == "Usuarios"){ ?>
			<script src="Assets/js/Functions_usuarios.js"></script>
			<?php
			}
		?>

  </body>
</html>
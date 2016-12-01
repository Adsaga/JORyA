
<html lang="en">
<head>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<script type="text/javascript" src="../../js/jquery-1.12.1.js"></script>
<title>JORyA</title>
<!-- main css -->
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<!-- media queries css -->
<link rel="stylesheet" type="text/css" href="../../css/estilo_mc.css">
<link rel="stylesheet" type="text/css" href="../../css/est_ven.css">
<link href="../../css/media-queries.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../css/slider.css">	
<link href='../../icons/icon_imss.png' rel='shortcut icon' type='image/png'/>
<script type="text/javascript">
	function mostrar(){
		$(".ventana").slideDown("slow");
	}

	function cerrar(){
		$(".ventana").slideUp("past");
	}
	function mostrar1(){
		$(".ventana1").slideDown("slow");
	}

	function cerrar1(){
		$(".ventana1").slideUp("past");
	}
	function mostrar2(){
		$(".ventana2").slideDown("slow");
	}

	function cerrar2(){
		$(".ventana2").slideUp("past");
	}

	function toggle_visibility(id) {
    var e = document.getElementById(id);
    var visivel = e.style.display == 'block';
    var menus = document.querySelectorAll('[id^=menu]');
    for (var i = 0; i < menus.length; i++) {
        menus[i].style.display = 'none';
    };
    if (visivel) e.style.display = 'none';
    else e.style.display = 'block';
}
</script>
</head>
<body>
<div id="pagewrap">
	<header id="header">
  <figure class="post-image"> 
		<img id="s" src="../../images/imss.png">
	</figure> 
		<center><h1>JORyA</h1></center>
		<nav>
		<ul id="main-nav" class="clearfix">
			<li><a href="#"><img src="../../icons/114-user.png"><img src="../../icons/285-down.png"></a>
				<ul>
					<li><a href="perfil_usuario.php"><img src="../../icons/114-user.png"> Perfil</a></li>
					<li><a href="#"><img src="../../icons/149-cog.png"> Ajustes</a></li><hr>
					<li><a href="../../sesion.php"><img src="../../icons/277-exit.png"> Cerrar Sesion</a></li>
				</ul>
			</li>
			
			<li id="bienvenido"><a href="">Registrar</a>
				<ul>
					<li><a href="javascript:mostrar();">Doctor</a></li><hr>
					<li><a href="javascript:mostrar1();">Enfermera</a></li><hr>
					<li><a href="javascript:mostrar2();">Encargado</a></li>
				</ul>
			</li>
		</ul>


			<!-- /#main-nav --> 
		</nav>
		<form id="searchform">
			<input type="search" id="s" placeholder="Search">
		</form>
	</header>
	<!-- /#header -->	
	<div id="content">
		<article class="post clearfix">
			<header>
				<h1 class="post-title"><center><a href="#">Asuncion Atoyaquillo<hr>ADMINISTRADOR</a></center></h1>
			</header>
			<figure class="post-image"> 
			</figure> 
			<div class="slider">         
			<ul >
				<li><img src="../../images/im1.jpg"></li>
				<li><img src="../../images/im2.jpg"></li>
				<li><img src="../../images/im3.jpg"></li>
			</ul>
		</div>  
			<!-- /.video -->
		</article>
		<!-- /.post -->
		<div class="ventana">
			<div class="form">
				<div class="cerrar"><a href="javascript:cerrar();">Cerrar X</a></div>
				<iframe name="zona1" width="100%" height="90%" src="../validaciones/DoctorEnfermera/registro.php"></iframe>
			</div>
		</div>
		<div class="ventana1">
			<div class="form">
				<div class="cerrar"><a href="javascript:cerrar1();">Cerrar X</a></div>
				<iframe name="zona1" width="100%" height="90%" src="../validaciones/DoctorEnfermera/registro.php"></iframe>
			</div>
		</div>
		<div class="ventana2">
			<div class="form">
				<div class="cerrar"><a href="javascript:cerrar2();">Cerrar X</a></div>
				<iframe name="zona1" width="100%" height="90%" src="../validaciones/Encargado/registro.php"></iframe>
			</div>
		</div>
	</div>
	<!-- /#content --> 	
		<aside id="sidebar">
		<section class="widget">
			<h4 class="widgettitle">MENU</h4>
				<ul class="nav">
				<li><a href="index_admin.php"><img src="../../icons/001-home.png "> Home</a></li>
				<li><a href="esp_Enfermera.php"><img src="../../icons/nurse-icon.png"> Especialidad enfermera</a></li>
				<li><a href="Esp_Doctor.php"><img src="../../icons/sthetoscope-icon.png"> Especialidad del Doctor</a></li><hr>
				<a href="#" onclick="toggle_visibility('menu1');"><img src="../../icons/clipboard-icon.png"> Medicina 
					<img src="../../icons/324-circle-down.png"></a>
				<div id="menu1" style="display:none;">
				<ul >
					<li ><a href="ent_Medicina.php"><img src="../../icons/clipboard-icon.png"> Entrada de medicina</a></li>
						<li><a href="Laboratorio.php"><img src="../../icons/clipboard-icon.png">Laboratorio</a></li>
						<li><a href="Proveedor.php"><img src="../../icons/clipboard-icon.png">Proveedor</a></li>
						<li><a href="Tipo_Medicamento.php"><img src="../../icons/clipboard-icon.png">Tipo de medicamento</a></li>
						<li><a href="UnidadMedida.php"><img src="../../icons/clipboard-icon.png">Unidad de medida</a></li>
						<li><a href="Aplicacion.php"><img src="../../icons/clipboard-icon.png">Aplicacion</a></li>
						<li><a href="Clasificacion.php"><img src="../../icons/clipboard-icon.png">Clasificacion</a></li>
					</ul>
				</div>
			</ul>
		</section>
		<!-- /.widget -->
	
		<!-- /.widget -->
		<section>

		</section>						
	</aside>
	<!-- /#sidebar -->
	<footer id="footer">	
		<p>Elaborado por: Jonathan, Orlando, Raul, Adrian</p>
		
	</footer>
	<!-- /#footer --> 	
</div>
<!-- /#pagewrap -->
</body>
</html>
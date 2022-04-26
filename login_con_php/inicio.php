<!DOCTYPE html>
<?php 
include('funciones/funciones.php');
session_start();
$xc =conectar();
$sql = "SELECT * FROM header";
$res = mysqli_query($xc , $sql);


?>
<html>
<head>
	<meta charset="utf-8">
	<title>EL CURIOSO</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/index.css">
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<!--  Cambio del color de fondo-->
<body class="bg-gray-300">
	<!-- links superior -->
		<div>
			<ul class="menu">
			
				<li><a href="videojuegos.html">Videojuegos</a></li>
				<li><a href="deportes.html">Deportes</a></li>
				<li><a href="Perú.html">Perú</a></li>
				<li><a href="Covid-19.html">Covid-19</a></li>
				<li><a href="mundial.html">Mundial</a></li>
				<li><a href="">Pólitica</a></li>
				<li><a href="">Arequipa</a></li>
				<li><a href="">Tecnol.</a></li>
				<li><a href="Formulario.html">Registro</a></li>	

			</ul>
			<form method="post" action="login.php">
            <input type="text" name="usuario" placeholder="usuario"><br>
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Enviar">
            </form>
		</div>
	<!-- titulo -->
		<!-- TAILWIND -->
		<!-- Dudas , consultar en la documentacion de tailwind -->
		<!-- fondo negro , diplay flex , centramos en el eje X con justify-center , margin en el eje de y de 4 -->
		<div class="bg-black flex justify-center my-4">
			<!-- pading en el eje Y de 3 -->
			<div class="py-3">
				<!-- font-serif ->tipo de letra , text-6xl->tamaño de letra , border-b-4 , border hacia abajo , grosor de borde ,  -->
				<h1 class="font-serif text-6xl  border-b-4 border-white"><span class="text-red-500"><?php
				echo $_SESSION['usuario'];
				
				?></span> </h1>
			</div>
			
		</div>
		<h2 style="text-align: center;">Últimas noticias</h2>
		<section class="post-list">
			<div class="content">
				<article class="post">
					<div class="post-header">
						<div class="post-img-1"></div>
					</div>
					<div class="post-body">
						<span>29 Marzo, 2022 | Deportes</span>
						<h2>Perú al repechaje</h2>
						<p>Perú empata un partido con Paraguay y tuvieron que irse a los penales donde se decidió como ganador a Perú por 4 penales a 3 y avanzando a la semifinal de la Copa América, pero a un costo alto ya que el número 18...</p>
						<!-- definimos el flex para posicionar la caja con justify center -->
						<div class="flex justify-center">
							<!-- le asignamos 'block' para que tome los estilo de translate , asignamos un ancho  'w-24' -->
							<!-- hover:-translate-y-0.5 , cuando pasemos el mouse por el boton , automaticamente este se recorrera hacia arriba , 
								si queremos que vaya abajo debemos eliminar el '-' que esta al costado de translate' -->
							<a href="" class="block w-36 bg-gray-500 hover:-translate-y-0.5  py-2 px-6 bg-blue-600  rounded-full text-white">Ver Más</a>
						</div>
					</div>
				</article>
				<article class="post">
					<div class="post-header">
						<div class="post-img-2"></div>
					</div>
					<div class="post-body">
						<span>15 Marzo, 2022 | Política</span>
						<h2>Apunto de ser vacado</h2>
						<p>Tras oficialmente haber ganado las elecciones presidenciales 2021, Pedro Castillo comenzara su gobierno el 28 de julio de este año...</p>
						<!-- definimos el flex para posicionar la caja con justify center -->
						<div class="flex justify-center">
							<!-- le asignamos 'block' para que tome los estilo de translate , asignamos un ancho  'w-24' -->
							<!-- hover:-translate-y-0.5 , cuando pasemos el mouse por el boton , automaticamente este se recorrera hacia arriba , si queremos que vaya abajo debemos eliminar el '-' que esta al costado de translate' -->
							<a href="" class="block w-36 bg-gray-500 hover:-translate-y-0.5  py-2 px-6 bg-blue-600  rounded-full text-white">Ver Más</a>
						</div>
					</div>
				</article>
				<article class="post">
					<div class="post-header">
						<div class="post-img-3"></div>
					</div>
					<div class="post-body">
						<span>3 Marzo, 2022 | Videojuegos</span>
						<h2>Battle Pass 2022</h2>
						<p>La compañia Valve anuncia lanzamiento oficial del Pase de Batalla de su popular juego DOTA 2 con excelentes sorpresas y nuevos aspectos de dos héroes, además...</p>
						<br>
						<!-- definimos el flex para posicionar la caja con justify center -->
						<div class="flex justify-center">
							<!-- le asignamos 'block' para que tome los estilo de translate , asignamos un ancho  'w-24' -->
							<!-- hover:-translate-y-0.5 , cuando pasemos el mouse por el boton , automaticamente este se recorrera hacia arriba , si queremos que vaya abajo debemos eliminar el '-' que esta al costado de translate' -->
							<a href="" class="block w-36 bg-gray-500 hover:-translate-y-0.5  py-2 px-6 bg-blue-600  rounded-full text-white">Ver Más</a>
						</div>
					</div>
				</article>
				<article class="post">
					<div class="post-header">
						<div class="post-img-4"></div>
					</div>
					<div class="post-body">
						<span>4 Marzo, 2022 | Mundial</span>
						<h2>Terrible atentado</h2>
						<p>El día de ayer el castillo de la reina Isabel II del Reino Unido sufrió un atentado terrible que lamentablemente tuvo como consecuencia la muerte de 15 turistas...</p>
						<!-- definimos el flex para posicionar la caja con justify center -->
						<div class="flex justify-center">
							<!-- le asignamos 'block' para que tome los estilo de translate , asignamos un ancho  'w-24' -->
							<!-- hover:-translate-y-0.5 , cuando pasemos el mouse por el boton , automaticamente este se recorrera hacia arriba , si queremos que vaya abajo debemos eliminar el '-' que esta al costado de translate' -->
							<a href="" class="block w-36 bg-gray-500 hover:-translate-y-0.5  py-2 px-6 bg-blue-600  rounded-full text-white">Ver Más</a>
						</div>
					</div>
				</article>
				<article class="post">
					<div class="post-header">
						<div class="post-img-5"></div>
					</div>
					<div class="post-body">
						<span>5 Marzo, 2022 | Covid-19</span>
						<h2>¡ Alerta Mundial !</h2>
						<p>La OMS afirmó que el mundo atraviesa un periodo muy peligroso de la pandemia del coronavirus devido a la nueva variante delta registrada hace apenas unos meses...</p>
						<br>
						<!-- definimos el flex para posicionar la caja con justify center -->
						<div class="flex justify-center">
							<!-- le asignamos 'block' para que tome los estilo de translate , asignamos un ancho  'w-24' -->
							<!-- hover:-translate-y-0.5 , cuando pasemos el mouse por el boton , automaticamente este se recorrera hacia arriba , si queremos que vaya abajo debemos eliminar el '-' que esta al costado de translate' -->
							<a href="" class="block w-36 bg-gray-500 hover:-translate-y-0.5  py-2 px-6 bg-blue-600  rounded-full text-white">Ver Más</a>
						</div>
					</div>
				</article>
				<article class="post">
					<div class="post-header">
						<div class="post-img-6"></div>
					</div>
					<div class="post-body">
						<span>19 Marzo, 2022 | Perú</span>
						<h2>Se enciende el turismo</h2>
						<p>Machu Picchu una de las 7 maravillas del mundo dijo en una entrevista que ya esta resiviendo nuevamente turistas peruanos con ciertas restricciones al abordar el tren...</p>
						<!-- definimos el flex para posicionar la caja con justify center -->
						<div class="flex justify-center">
							<!-- le asignamos 'block' para que tome los estilo de translate , asignamos un ancho  'w-24' -->
							<!-- hover:-translate-y-0.5 , cuando pasemos el mouse por el boton , automaticamente este se recorrera hacia arriba , si queremos que vaya abajo debemos eliminar el '-' que esta al costado de translate' -->
							<a href="" class="block w-36 bg-gray-500 hover:-translate-y-0.5  py-2 px-6 bg-blue-600  rounded-full text-white">Ver Más</a>
						</div>
					</div>
				</article>
			</div>
		</section>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
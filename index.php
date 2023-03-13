#<?php
#session_set_cookie_params(0, '/', '.4ks.online');
#session_start();

#// Check if the user is logged in
#if (isset($_SESSION['username'])) {
#    header('Location: login.php');
#    exit;
#}
#
#
#// Check if the form has been submitted
#if ($_SERVER['REQUEST_METHOD'] === 'POST') {
#    // Check the username and password
#    if ($_POST['username'] === 'myusername' && $_POST['password'] === 'mypassword') {
#
#
#        // Set the session variable and redirect to dashboard
#        $_SESSION['username'] = $_POST['username'];
#        header('Location: dashboard.php');
#        exit;
#    } else {
#        // Display an error message
#        $error_message = 'Incorrect username or password.';
#    }
#}
#?>

#<!DOCTYPE html>
#<html>
#<link rel="stylesheet" href="style.css" />
#<head>
#    <style>
#        
#        body {
#            font-family: Arial, sans-serif;
#        }
#        body {
#        background-image: url('img/bg.png');
#        background-repeat: no-repeat;
#        background-size: cover;
#        justify-content: center;
#        align-items: center;
#        }
#
#        form {
#            border: 1px solid #ccc;
#            padding: 20px;
#            width: 300px;
#            margin: 50px auto;
#        }

#        label {
#            display: block;
#            margin-bottom: 10px;
#        }
#
#        input[type="text"],
#        input[type="password"] {
#            padding: 5px;
#            margin-bottom: 10px;
#            width: 100%;
#        }

#        button[type="submit"] {
#            background-color: #4CAF50;
#            border: none;
#            color: white;
#            padding: 10px 20px;
#            text-align: center;
#            text-decoration: none;
#            display: inline-block;
#            font-size: 16px;
#            margin-top: 10px;
#            cursor: pointer;
#        }
#
#        button[type="submit"]:hover {
#            background-color: #3e8e41;
#        }

#        .error {
#            color: red;
#            margin-bottom: 10px;
#        }
#    </style>
#</head>
#<body>
#    <form action="login.php" method="POST">
#        <label for="username">Username:</label>
#        <input type="text" name="username" id="username"><br>
#        <label for="password">Password:</label>
#        <input type="password" name="password" id="password"><br>
#        <button type="submit">Login</button>
#    </form>

#    <?php if (isset($error_message)): ?>
#        <p class="error"><?php echo $error_message; ?></p>
#    <?php endif; ?>
#</body>
#</html>
<!DOCTYPE html>
<html lang="es">
	<title>Dashboard</title>
	<head>
		<!-- Establece la codificación de caracteres como UTF-8 -->
		<meta charset="UTF-8" />
		<!-- Establece la compatibilidad con Internet Explorer -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- Establece la escala inicial y el ancho para dispositivos móviles -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Establece el título de la página -->
		<title>Menú de navegación</title>
		<!-- Descripción del sitio web -->
		<!-- URL canónica del sitio web -->
		<link rel="canonical" href="https://isabellaea.com/Baul/menu-navigation" />
		<!-- Favicon del sitio web -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
		<!-- Vincula el archivo de estilo "style.css" -->
		<link rel="stylesheet" href="style.css" />
		<!-- Vincula la fuente de iconos de Font Awesome -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
			integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>
	<body>
		<!-- Contenedor principal de la página -->
		<div class="container">
			<!-- Encabezado de la página -->
			<header class="nav">
				<div class="menu">
					<!-- Enlaces de navegación -->
					<a href="dashboard.php">Dashboard</a>
					<a href="#" class="active">Todas</a>
					<a href="#">Producion</a>
					<a href="#">Testing</a>
					<a href="#">Desarrollo</a>
					<!-- Caja de búsqueda con icono de búsqueda de Font Awesome -->
					<div class="searchBox">
						<i class="fas fa-search"></i>
					</div>
					<a href="logout.php">Logout</a>
				</div>
			</header>
			<!-- Contenido principal de la página -->
			<div class="main">
				<!-- Sección de películas populares -->
				<div class="trendingMovies movies">
					<p>Producion</p>
					<!-- Contenedor para las tarjetas de películas -->
					<div class="cards">
						<!-- Tarjeta de una película -->
						<a href="../apps/app1.php"><div class="card" data-text="APP6-PROD">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app2.php"><div class="card" data-text="APP6-PROD">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app3.php"><div class="card" data-text="APP6-PROD">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app4.php"><div class="card" data-text="APP6-PROD">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app5.php"><div class="card" data-text="APP6-PROD">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app6.php"><div class="card" data-text="APP6-PROD">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app7.php"><div class="card" data-text="APP6-PROD">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
					</div>
				</div>

				<!-- Sección de películas de bollywood -->
				<div class="bollywoodMovies movies">
					<p>Testing</p>
					<!-- Contenedor para las tarjetas de películas -->
					<div class="cards">
						<!-- Tarjeta de una película -->
						<a href="../apps/app8.php"><div class="card" data-text="APP1-TEST">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app9.php"><div class="card" data-text="APP2-TEST">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app10.php"><div class="card" data-text="APP3-TEST">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app11.php"><div class="card" data-text="APP4-TEST">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app12.php"><div class="card" data-text="APP5-TEST">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app13.php"><div class="card" data-text="APP6-TEST">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app14.php"><div class="card" data-text="APP7-TEST">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
					</div>
				</div>

				<!-- Sección de películas webSeries -->
				<div class="webSeries movies">
					<p>Desarrollo</p>
					<!-- Contenedor para las tarjetas de películas -->
					<div class="cards">
						<!-- Tarjeta de una película -->
						<a href="../apps/app15.php"><div class="card" data-text="APP1-DEV">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app16.php"><div class="card" data-text="APP2-DEV">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app17.php"><div class="card" data-text="APP3-DEV">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
						<!-- Tarjeta de una película -->
						<a href="../apps/app18.php"><div class="card" data-text="APP4-DEV">
							<img src="img/bollywoodMovies/csn.png" alt="" />
						</div></a>
					</div>
				</div>
			</div>
		</div>

		<script>
			// Selecciona todos los elementos de enlace del documento
			const a = document.querySelectorAll('a');

			// Añade un evento de clic a cada elemento de enlace
			a.forEach((e) => {
				e.addEventListener('click', (e) => {
					// Muestra el contenido de la lista de clases del elemento de enlace que se ha clicado
					console.log(e.target.classList);
					// Elimina la clase "active" de todos los elementos de enlace
					a.forEach((e) => {
						e.classList.remove('active');
					});
					// Si el elemento de enlace que se ha clicado no tiene la clase "active", se le añade
					if (!e.target.classList.contains('active')) {
						e.target.classList.add('active');
					}
				});
			});
		</script>

		<script>
			const links = document.querySelectorAll('a');
			const movies = document.querySelectorAll('.movies');

			links.forEach((link) => {
				link.addEventListener('click', (e) => {
					// Oculta todas las secciones de películas
					movies.forEach((movie) => {
						movie.style.display = 'none';
					});
					// Muestra la sección de películas correspondiente
					if (link.textContent === 'Producion') {
						document.querySelector('.trendingMovies').style.display = 'block';
					} else if (link.textContent === 'Testing') {
						document.querySelector('.bollywoodMovies').style.display = 'block';
					} else if (link.textContent === 'Desarrollo') {
						document.querySelector('.webSeries').style.display = 'block';
					} else {
						// Si se selecciona el enlace "Todas", muestra todas las secciones de películas
						movies.forEach((movie) => {
							movie.style.display = 'block';
						});
					}
				});
			});
		</script>
	</body>
</html>

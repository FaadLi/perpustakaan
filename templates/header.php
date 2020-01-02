<!DOCTYPE html>
<html>
	<head>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/modal.css">
		<link rel="stylesheet" href="css/dataTable.min.css">

		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

	</head>

	<body>
		
		<div class="navbar-fixed">
			<!-- Dropdown Structure -->
			<ul id="dropdown1" class="dropdown-content" style="margin-top: 50px">
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<nav>
				<div class="nav-wrapper">
					<a href="sman1gomoker.sch.id" class="brand-logo">Perpustakaan SMAGOMOKER</a>
					<!-- activate side-bav in mobile view -->
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="fa fa-user"></i>  Admin</a></li>
					</ul>
					<!-- navbar for mobile -->
					<ul class="side-nav" id="mobile-demo">
						<li><a href="logout.php">logout</a></li>
					</ul>
				</div>
			</nav>
		</div>
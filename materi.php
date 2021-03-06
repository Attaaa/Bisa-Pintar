<?php 
    session_start(); 
    if (!isset($_SESSION['login'])){
        header('Location: index.php');
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>BisaPintar | Materi</title>
</head>

<body class="mt-lg-5 mt-md-4 mb-md-1 mb-5">

	<!--Tampilan navigasi mobile-->
	<div class="container container-header-sm bg-dark py-3 px-4 mb-5">
        <button type="button" class="btnNav text-light d-flex align-items-center">
            <i class="fas fa-bars "></i><span class="ml-3 menu">Menu</span>
        </button>
    </div>

    <div class="modal" id="modalSide" tabindex="-1" role="dialog">
        <div id="mySidenav" class="sidenav">
            <button type="button" id="closeNav" class="close mr-3 mt-3" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="nav flex-column mynav px-4 mt-5">
				<li class="nav-item">
					<a href="profile.php" class="nav-link mx-4 px-0 pb-0 nav-left">PROFILE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-4 px-0 active" href="materi.php">MATERI</a>
				</li>
				<li class="nav-item">
					<a href="latihan.php" class="nav-link mx-4 px-0">LATIHAN</a>
				</li>
				<li class="nav-item">
					<a href="help.php" class="nav-link mx-4 px-0" >HELP</a>
				</li>
				<li class="nav-item">
					<a href="#" class="btnLogout nav-link mx-4 px-0">LOGOUT</a>
				</li>
            </ul>
        </div>
    </div>
    <!--end tampilan navigasi mobile-->

	<!--Tampilan Navigasi Desktop-->
	<div class="container container-header mb-5">
		<ul class="nav justify-content-end mynav py-3 px-4">
			<li class="nav-item">
				<a href="profile.php" class="nav-link mx-4 px-0 pb-0 nav-left">PROFILE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link mx-4 px-0 active" href="materi.php">MATERI</a>
			</li>
			<li class="nav-item">
				<a href="latihan.php" class="nav-link mx-4 px-0">LATIHAN</a>
			</li>
			<li class="nav-item">
                <a href="help.php" class="nav-link mx-4 px-0" >HELP</a>
            </li>
			<li class="nav-item">
				<a href="#" class="btnLogout nav-link mx-4 px-0">LOGOUT</a>
			</li>
		</ul>
	</div>

	<!--Judul Page-->
	<div class="container text-center mb-4">
		<h3>MATERI</h3>
	</div>

	<!--Container Pilihan Materi-->
	<div class="container px-sm-5 px-3" >
		<div class="row">

			<!--Card Materi PSPEC-->
			<div class="col-sm col-12 mb-md-0 mb-4">
				<div class="card p-2" >
					<img class="card-img-top img-materi" src="img/erd.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">PSPEC</h5>
						<p class="card-text">Pspec merupakan ....</p>
						<button onclick="location.href='materi/mpspec.php';" type="button" class="btn btn-main w-100">Mulai Belajar</a>
					</div>
				</div>
			</div>

			<!--Card Materi ERD-->
			<div class="col-md col-12 mb-md-0 mb-4">
				<div class="card p-2">
					<img class="card-img-top img-materi" src="img/erd.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">ERD</h5>
						<p class="card-text">ERD merupakan ....</p>
						<button onclick="location.href='materi/merd.php';" type="button" class="btn btn-main w-100">Mulai Belajar</a>
					</div>
				</div>
			</div>

			<!--Card materi Flowchart-->
			<div class="col-md col-12 mb-md-0 mb-4">
				<div class="card p-2">
					<img class="card-img-top img-materi" src="img/flowchart.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">FLOWCHART</h5>
						<p class="card-text">Flowchart ... </p>
						<button onclick="location.href='materi/mflowchart.php';" type="button" class="btn btn-main w-100">Mulai Belajar</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--End Container Pilihan Materi-->

	<!--modal logout-->
    <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <p class="mt-5"><i class="fas fa-sign-out-alt fa-5x text-danger"></i><br/><br/>Anda yakin ingin keluar?</p>
                    <button type="button" class="btn btn-danger mr-2 px-3" onclick="location.href='functions/logout.php';">Ya</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
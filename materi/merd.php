<?php 
    session_start(); 
    if (!isset($_SESSION['login'])){
        header('Location: ../index.php');
    }    
    $_SESSION['location'] = 'Location: ../index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>BisaPintar | Materi ERD</title>
    <style>
        .modal-dialog {
            max-width: 60% !important;
        }
    </style>
</head>

<body class="mt-lg-5 mt-md-4 mb-5">

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
                    <a href="../profile.php" class="nav-link mx-4 px-0 pb-0 nav-left">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4 px-0 active" href="../materi.php">MATERI</a>
                </li>
                <li class="nav-item">
                    <a href="../latihan.php" class="nav-link mx-4 px-0">LATIHAN</a>
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
                <a href="../profile.php" class="nav-link mx-4 px-0 pb-0 nav-left">PROFILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-4 px-0 active" href="../materi.php">MATERI</a>
            </li>
            <li class="nav-item">
                <a href="../latihan.php" class="nav-link mx-4 px-0">LATIHAN</a>
            </li>
            <li class="nav-item">
                <a href="help.php" class="nav-link mx-4 px-0" >HELP</a>
            </li>
            <li class="nav-item">
                <a href="#" class="btnLogout nav-link mx-4 px-0">LOGOUT</a>
            </li>
        </ul>
    </div>

    <!--Main Submateri-->
    <div class="container px-5">
        <h2 class="submateri-title">ERD</h2>
        <h4 class="mb-3">Entity Relationship Diagram</h4>
        <div>
            <button type="button" class="btn btn-block btn-outline-warning p-3" style="text-align: left; font-size: 22px;" data-target="#pengertian" data-toggle="modal">
                <i class="fas fa-play mr-3"></i>Pengertian
            </button>
            <button type="button" class="btn btn-block btn-outline-warning p-3" style="text-align: left; font-size: 22px;" data-target="#entitas" data-toggle="modal">
                <i class="fas fa-play mr-3"></i>Entitas
            </button>
            <button type="button" class="btn btn-block btn-outline-warning p-3" style="text-align: left; font-size: 22px;" data-target="#atribut" data-toggle="modal">
                <i class="fas fa-play mr-3"></i>Atirubut
            </button>
            <button type="button" class="btn btn-block btn-outline-warning p-3" style="text-align: left; font-size: 22px;" data-target="#relasi" data-toggle="modal">
                <i class="fas fa-play mr-3"></i>Relasi
            </button>
            <button type="button" class="btn btn-block btn-outline-warning p-3" style="text-align: left; font-size: 22px;" data-target="#contoh" data-toggle="modal">
                <i class="fas fa-play mr-3"></i>Contoh
            </button>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="pengertian">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Pengertian ERD</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/y-UMH_7w9I8"  allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="entitas">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Entitas pada ERD</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GyGcTNVfLQA" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="atribut">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Atribut pada ERD</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://youtube.com/embed/dhJyDaiyHL0" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="relasi">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Relasi Pada ERD</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pn9Il3UbCfE"allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="contoh">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Contoh ERD</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fpzs5TRfNRI" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!--modal logout-->
    <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <p class="mt-5"><i class="fas fa-sign-out-alt fa-5x text-danger"></i><br/><br/>Anda yakin ingin keluar?</p>
                    <button type="button" class="btn btn-danger mr-3" onclick="location.href='functions/logout.php';">Ya</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>

    <script>
        $('.btnLogout').click(function(){
            $('#modalLogout').modal('show');
        })
    </script>	

</body>

</html>
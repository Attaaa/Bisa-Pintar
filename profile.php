<?php 
    session_start(); 
    if (!isset($_SESSION['login'])){
        header('Location: index.php');
    }  
    $_SESSION['location'] = 'Location: ../index.php';  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body class="mt-lg-5 mt-md-4 mb-lg-1 mb-5">

    <div class="bg-img">
        <img src="img/profile.png" alt="">
    </div>

    <!--modal berhasil mendaftarkan akun-->
    <div class="modal fade" id="modalValidDaftar" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mt-5"><i class="fas fa-check-circle fa-5x text-success"></i><br/><br/>Akun anda berhasil didaftarkan.</p>
                </div>
            </div>
        </div>
    </div>

    <!--modal berhasil update akun-->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2 text-center">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mt-5"><i class="fas fa-check-circle fa-5x text-success"></i><br/><br/>Akun anda berhasil di update.</p>
                </div>
            </div>
        </div>
    </div>

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
                <li class="nav-item ">
                    <a href="profile.php" class="nav-link active mx-4 px-0">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a href="materi.php" class="btnDaftar nav-link mx-4 px-0">MATERI</a>
                </li>
                <li class="nav-item">
                    <a href="latihan.php" class="btnMasuk nav-link mx-4 px-0">LATIHAN</a>
                </li>
                <li class="nav-item">
                    <a href="help.php" class="nav-link mx-4 px-0" >HELP</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btnLogout btnMasuk nav-link mx-4 px-0">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
    <!--end tampilan navigasi mobile-->

	<!--Tampilan Navigasi Desktop-->
	<div class="container container-header mb-5">
		<ul class="nav justify-content-end mynav py-3 px-4">
			<li class="nav-item text-center">
				<a href="profile.php" class="nav-link mx-4 px-0 active">PROFILE</a>
			</li>
			<li class="nav-item dropdown">
				<a href="materi.php" class="nav-link mx-4 px-0">MATERI</a>
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
    
    <!--main profile-->
    <div class="container pt-3 px-sm-5 main-profile">
        <div class="row px-6">

            <div class="col-lg col-12 px-5 mb-4">

                <!--profile image-->
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                    <div class="justify-content-md-end justify-content-center">
                        <button type="button" class="btn btn-main px-4 py-2" data-toggle="modal" data-target="#modalEdit">EDIT PROFIL</button>
                    </div>
                </div>

            </div>

            <div class="col-lg col-12 pr-xl-5 px-md-5">

                <!--profile highlight-->
                <div class="profile-head mb-4">
                    <?php if (!isset($_SESSION['user'])): ?>
                    <h2 class="text-main main-name">Kshiti Ghelani</h2>
                    <?php else: ?>
                    <h2 class="text-main main-name"><?php echo $_SESSION['user'][2]; ?></h2>
                    <?php endif; ?>
                    <h5 class="">Student of Computing</h5>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-5 col-12">
                        <label>Username</label>
                    </div>
                    <div class="col-lg-7 col-12">
                        <?php if (!isset($_SESSION['user'])): ?>
                        <p>Kshiti123</p>
                        <?php else: ?>
                        <p><?php echo $_SESSION['user'][0];?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-5 col-12">
                        <label>Name</label>
                    </div>
                    <div class="col-lg-7 col-12">
                        <?php if (!isset($_SESSION['user'])): ?>
                        <p>Kshiti Ghelani</p>
                        <?php else: ?>
                        <p><?php echo $_SESSION['user'][2]; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-5 col-12">
                        <label>Email</label>
                    </div>
                    <div class="col-lg-7 col-12">
                        <?php if (!isset($_SESSION['user'])): ?>
                        <p class="text-nowrap">kshitighelani@gmail.com</p>
                        <?php else: ?>
                        <p class="text-nowrap"><?php echo $_SESSION['user'][3]; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--modal edit-->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content px-2">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form id="formEdit" action="functions/update.php" method="GET" class="mt-5 mb-4">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama lengkap" value="<?php if (!isset($_SESSION['user'])): echo 'test'; else: echo $_SESSION['user'][2]; endif; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="uname" class="form-control" id="uname" placeholder="username" value="<?php if (!isset($_SESSION['user'])): echo 'test'; else: echo $_SESSION['user'][0]; endif; ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="email" value="<?php if (!isset($_SESSION['user'])): echo 'test'; else: echo $_SESSION['user'][3]; endif; ?>">
                        </div>
                        <div class="form-group mb-5">
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="password">
                        </div>
                        <button type="submit" name="update" class="btn btn-main py-2">SIMPAN</button>
                        <button class="btn btn-secondary py-2" data-dismiss="modal">BATAL</button>
                    </form>
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
                    <button type="button" class="btn btn-danger mr-2 px-3" onclick="location.href='functions/logout.php';">Ya</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <?php
        if (isset($_SESSION['daftar'])) {
            if ($_SESSION['daftar'] == 'valid') {
                echo "<script>$('#modalValidDaftar').modal('show');</script>";
            }
            unset($_SESSION['daftar']);
        }
        if (isset($_SESSION['update'])) {
            if ($_SESSION['update'] == 'valid') {
                echo "<script>$('#modalUpdate').modal('show');</script>";
            }
            unset($_SESSION['update']);
        }
    ?>

</body>
</html>
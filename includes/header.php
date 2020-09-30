<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hosanna Furnitures | <?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="webfonts/fontawesome.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div id="wrapper">
        <header>
            <div class="container-fluid">
                <div class="text-center">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" data-spy="affix" data-offset-top="197">
                        <a class="navbar-brand logo" href="index.php">Hosanna<br><span class="ims">Furnitures</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-grip-lines"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php"> Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="about.php"> About</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="contact.php"> Contact</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="products.php">Products</a>
                                </li>
                                <!-- <li class="nav-item ">
                                    <a class="nav-link" href="user-login.php"> Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user-register.php"> Register  </a>
                                </li> -->
                                <?php if(isset($_SESSION['admin-id'])){ ?>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="admin/admin.php"> Profile</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="logout.php"> Logout</a>
                                    </li>
                                <?php } ?>
                                <?php if(isset($_SESSION['user-id'])){ ?>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="user/user.php"> Profile</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="logout.php"> Logout</a>
                                    </li>
                                <?php } else { if(!isset($_SESSION['admin-id'])) { ?>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="user-login.php"> Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="user-register.php"> Register  </a>
                                    </li>
                                <?php } } ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="help.php"> Help</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
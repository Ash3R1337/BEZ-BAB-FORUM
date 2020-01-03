<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>YOUR PROFILE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/pro.css?1.0.2">
	<link rel="stylesheet" type="text/css" href="css/style.css?1.0.1">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/brands.css">
	<link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/fontawesome.css">
	<link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/solid.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
</head>
<body style="height: 500px; background-color: #5518E0;">
	<?php 
	require 'db.php';
	?>
	<header>
		<div class="row">
		<div class="container-fluid">
			<div class="header-inner">
			    <div class="logo float-left img-fluid">
					<a href="index.php"><img src="img/logo.png"></a>
				</div>
				<div class="main-title"><h1>BEZ-BAB THE FORUM</h1></div>
				<?php if (isset ($_SESSION['logged_user']) ) : ?>
  								<div class ="logged float-right" title="ТЫ" style="color: #65D9FF; margin: 20px 40px;"> <?php echo $_SESSION['logged_user']->login; ?> 
  							  	<div class="exit"><a href="logout.php">Выйти</a></div>
  							  	<a href="#"><img class="rounded-circle float-left" style="width: 50px; height: 50px; z-index: 10; display: inline-block; position: relative; right: 60px; top: -47px;" src="img/test.jpg" alt="user"></a>
  							  	</div>
  							  	<?php else : ?>    
					<div class="navigation float-right">
						<ul class="nav">
  							<li class="nav-item">  								
    							<a class="nav-link" href="login.php">Войти</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" href="signup.php">Зарегистрироваться</a>    							
  							</li>
  						</ul>
  					</div>
  					<?php endif; ?>
  						<div class="dropdown" <?php if (isset($_SESSION['logged_user']) ){ echo 'style="display:none;"'; } ?>>
  							<button type="button" class="btn btn-primary dropdown-toggle float-right" data-toggle="dropdown">
  							  Авторизуйтесь
  							</button>
 							 <div class="menu dropdown-menu">
  							  <a class="dropdown-item" href="login.php">Войти</a>
  							  <a class="dropdown-item" href="signup.php">Зарегистрироваться</a>
 							 </div>
						</div>
  			</div>
		</div>
		</div>
	</header>
	<section>
		<div class="head">
			<div class="ava" style="z-index: 5000; position: relative; top: 160px; text-align: center;" >
				<img class="rounded-circle" src="img/test.jpg" alt="" height="180px" width="180px" style="border: 2px solid #00D8FF;">
			</div>
			<div class="fon-gena" style="margin-top: -110px; z-index: 100;">
				<div class="login-prof" style="z-index: 10000;"><span><?php echo $_SESSION['logged_user']->login; ?></span></div>
				<img src="img/profile.jpg" style="opacity: 0.7;" height="300px" width="100%" alt="" style="min-width: 100%;">
			</div>
		</div>
	</section>
</body>
</html>
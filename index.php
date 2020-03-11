<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>THE FORUM</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/brands.css">
	<link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/fontawesome.css">
	<link rel="stylesheet" href="fontawesome-free-5.10.1-web/css/solid.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
	require 'db.php';
	?>
	<header>
		<div class="row">
		<div class="container-fluid">
			<div class="header-inner" style="border-bottom-color: #560742;">
			    <div class="logo float-left img-fluid">
					<a href="#"><img src="img/logo-for.png" width="300px" height="50px"></a>
				</div>
				<div class="main-title" style="letter-spacing: 10px; margin-left: 38%;"><h1>THE FORUM</h1></div>
				<?php if (isset ($_SESSION['logged_user']) ) : ?>
  								<div class ="logged float-right" title="ТЫ" style="color: #65D9FF; margin: 20px 40px;"> <?php echo $_SESSION['logged_user']->login; ?> 
  							  	<div class="exit"><a href="logout.php">Выйти</a></div>
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
		<div class="content-header">
			<div class="content-header-image mx-auto d-block"><img src="img/head.jpg" alt="bg-head" width="1400" height="500"></div>
			<div class="gena"><img src="img/begginer-on.jpg" alt="" width="550px" height="450px"></div>
			<div class="head-rules" style="margin: 90px 130px; letter-spacing: 2px; font-size: 23px;">
				<h1>Добро пожаловать!</h1>
				<p>Это форум, сделан в качестве моего проекта</p>
				<p>На данный момент реализована регистрация, чат, шаблон.</p>
				<h4>Здесь можно найти:</h4>
				<ul>
					<li>Чат</li>
					<li>Форумы</li>
					<li>Доска почёта всех участников</li>
				</ul>
				<div class="head-chat-btn"></div>
			</div>
			<div class="block-content">

				
			</div>
		</div>		
	</header>
	<section>
		<div class="content-body">
			<div class="sections">
				<div class="on-chat"><img src="img/chat.png" class="rounded-circle" alt="" width="200px" height="200px"><a href="chat/chat.php"><h3>Онлайн-чат<i class="fas fa-comments"></i></h3></a></div><hr/>
				<div class="on-forums"><img src="img/forum.png" class="rounded-circle" alt="" width="200px" height="200px"><a href="error.php"><h3>Форумы<i class="fab fa-foursquare"></i></h3></a></div><hr/>
				<div class="on-rating"><img src="img/raiting.png" class="rounded-circle" alt="" width="200px" height="200px"><a href="error.php"><h3>Рейтинг<i class="fas fa-star-half-alt"></i></h3></a></div><hr/>
			</div>
		</div>
	</section>
	<section>
		<div class="section-rules">
			<div class="img-rules"><img src="img/rul-for.png" alt="" width="500px" height="400px" style="margin-top: 0px;"></div>
			<div class="rules" style="margin-top: 30px;"><span>Правила</span>
				<ul>Первое правило</ul>
				<i class="fas fa-star"></i><ul>Второе правило</ul>
				<i class="fas fa-star"></i><ul>Третье правило</ul>
				<i class="fas fa-star"></i><ul>Четвертое правило</ul>
				<i class="fas fa-star"></i><ul>Пятое правило</ul>
			</div>
		</div>
	</section>
	<section>
		<div class="the-best">
			<p>Лучшие</p><hr/>
			<div class="slide">
				<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/best.jpg" class="rounded-circle" alt="" height="200px" width="200px">
    </div>
    <div class="carousel-item">
      <img src="img/best1.jpg" class="rounded-circle" alt="" height="200px" width="200px">
    </div>
    <div class="carousel-item">
      <img src="img/best2.jpg" class="rounded-circle" alt="" height="200px" width="200px">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

			</div>
	 	</div>
	</section>

	<footer>
		<div class="foot">
			<div class="footer-inner"><span>&copy;Ash3R</span></div>
		</div>
	</footer>
	
	<div id="toTop">Вверх ^</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
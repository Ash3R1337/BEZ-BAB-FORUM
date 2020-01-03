<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BEZ-BAB THE FORUM</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?1.0.1">
	<link rel="stylesheet" type="text/css" href="css/media.css?1.0.1">
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
			<div class="header-inner">
			    <div class="logo float-left img-fluid">
					<a href="#"><img src="img/logo.png"></a>
				</div>
				<div class="main-title"><h1>BEZ-BAB THE FORUM</h1></div>
				<?php if (isset ($_SESSION['logged_user']) ) : ?>
  								<div class ="logged float-right" title="ТЫ" style="color: #65D9FF; margin: 20px 40px;"> <?php echo $_SESSION['logged_user']->login; ?> 
  							  	<div class="exit"><a href="logout.php">Выйти</a></div>
  							  	<a href="profile.php"><img class="rounded-circle float-left" style="width: 50px; height: 50px; z-index: 10; display: inline-block; position: relative; right: 60px; top: -47px;" src="img/test.jpg" alt="user"></a>
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
			<div id="gena-h"><img src="img/begginer.jpg" alt="" width="550px" height="450px"></div>
			<div class="head-rules">
				<h1>Добро пожаловать, мужик!</h1>
				<p>Ты попал туда, где сидят настоящие люди и никакие женщины тебя не найдут.</p>
				<p>Администрация следит за всем что тут происходит и очень строго относится к политике "БЕЗ БАБ".</p>
				<h4>Здесь ты найдешь:</h4>
				<ul>
					<li>"БЕЗ БАБ" Чат</li>
					<li>Форумы</li>
					<li>Доска почёта всех "БЕЗ БАБ"</li>
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
				<div class="on-chat"><img src="img/chat.jpg" class="rounded-circle" alt="" width="200px" height="200px"><a href="chat/chat.php"><h3>Онлайн-чат<i class="fas fa-comments"></i></h3></a></div><hr/>
				<div class="on-forums"><img src="img/forums.jpg" class="rounded-circle" alt="" width="200px" height="200px"><a href="error.php"><h3>Форумы<i class="fab fa-foursquare"></i></h3></a></div><hr/>
				<div class="on-rating"><img src="img/rating.png" class="rounded-circle" alt="" width="200px" height="200px"><a href="error.php"><h3>Рейтинг Без баб<i class="fas fa-star-half-alt"></i></h3></a></div><hr/>
			</div>
		</div>
	</section>
	<section>
		<div class="section-rules">
			<div class="img-rules"><img src="img/rul.png" alt="" ></div>
			<div class="rules"><span>Правила</span>
				<ul>Знать автобиографию Гены Букина</ul>
				<i class="fas fa-star"></i><ul>Не грубить участникам БЕЗ баб</ul>
				<i class="fas fa-star"></i><ul>Лена Полено - не человек</ul>
				<i class="fas fa-star"></i><ul>Выгодно закупаться в пятерочке или магните</ul>
				<i class="fas fa-star"></i><ul>Борьба с плохими феминистками</ul>
			</div>
		</div>
	</section>
	<section>
		<div class="the-best">
			<p>Лучшие БЕЗ баб</p><hr/>
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
	<div id="gena"><img src="img/gena.jpg" height="350px" width="300px"></div>
	<div id="toTop">Вверх ^</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js?1.0.1"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>João AF</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="imgs/joao.jpg" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize-social.less">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize-social.css">
</head>
<body>
	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo right"><img class="logo" src="imgs/joao.jpg"></a>
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li><a href="#">Home</a></li>
				<li><a href="#">Sobre</a></li>
				<li><a href="#">falar comigo</a></li>
				<li><a href="#">Entrar</a></li>
			</ul>
		</div>
	</nav>

	<!-- Dropdown Estrutura -->
	<ul id="front_and" class="dropdown-content">
		<li><a href="#!">HTML5</a></li>
		<li class="divider"></li>
		<li><a href="#!">CSS3</a></li>
		<li class="divider"></li>
		<li><a href="#!">Javascript</a></li>
		<li class="divider"></li>
		<li><a href="#!">jQuery</a></li>
		<li class="divider"></li>
		<li><a href="#!">Webpack</a></li>
		<li class="divider"></li>
		<li><a href="#!">Bootstrap</a></li>
		<li class="divider"></li>
		<li><a href="#!">Materialize</a></li>
	</ul>
	<ul id="back_and" class="dropdown-content">
		<li><a href="#!">PHP</a></li>
		<li class="divider"></li>
		<li><a href="#!">Zend Framework	</a></li>
		<li class="divider"></li>
		<li><a href="#!">Symfony Framework</a></li>
		<li class="divider"></li>
		<li><a href="#!">Laravel Framework</a></li>
		<li class="divider"></li>
		<li><a href="#!">Python</a></li>
		<li class="divider"></li>
		<li><a href="#!">Linguagem C</a></li>
	</ul>
	<ul id="infraestrutura" class="dropdown-content">
		<li><a href="#!">GIT</a></li>
		<li class="divider"></li>
		<li><a href="#!">Linux</a></li>
		<li class="divider"></li>
		<li><a href="#!">SQL</a></li>
	</ul>
	<ul id="framework-back" class="dropdown-content">
	</ul>
	<ul id="dev-mobile" class="dropdown-content">
		<li><a href="#!">Android</a></li>
		<li class="divider"></li>
		<li><a href="#!">IOS</a></li>
	</ul>

	<nav>
		<div class="nav-wrapper sub-menu">
			<ul class="right hide-on-med-and-down">
				<li><a class="dropdown-trigger" href="#!" data-target="front_and">Front-end<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-trigger" href="#!" data-target="back_and">Back-end<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-trigger" href="#!" data-target="infraestrutura">Infraestrutura<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-trigger" href="#!" data-target="dev-mobile">Desenvolvimento Mobile<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
		</div>
	</nav>


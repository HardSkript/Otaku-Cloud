<?php
	session_start();
?>

<!DOCTYPE html>
<html>

  <head>
    <title>Otaku Cloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="\Otaku-Cloud/css/bootstrap.min.css" rel="stylesheet">
	<link href="\Otaku-Cloud/css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<link rel="icon" href="/Otaku-Cloud/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="/Otaku-Cloud/favicon.ico" type="image/x-icon"/>
  
    
  </head>
  <body>
    
	<div id="wrapperHeader">
		<div id="header">
			<a href="\Otaku-Cloud/index.php"><img src="/Otaku-Cloud/images/signature.png" alt="logo" /></a>
		</div> 
	</div>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="\Otaku-Cloud/forum">Forum</a></li>
      <li><a href="\Otaku-Cloud/stream">Streaming</a></li>
      <li><a href="\Otaku-Cloud/chat">Chat</a></li>
      <li class="dropdown">
        <a href="staff.php" class="dropdown-toggle" data-toggle="dropdown">Staff List <b class="caret"></b></a>
        <ul class="dropdown-menu">
			<li><a href="staff.php">John Carpenter - <span style="color: blue;">Mgr.</span></a></li>
			<li><a href="staff.php">Kyal Cantwell - <span style="color: blue;">Dev</span></a></li>
        </ul>
      </li>
    </ul>

	<?php
		//Checks if the user is already logged in
		if(!isset($_SESSION['uid'])) {
			echo '<form class="navbar-form navbar-right" role="search" action="/Otaku-Cloud/forum/login_parse.php" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Username" name="username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" name="password">
			</div>
		<button type="submit" name="login" class="btn btn-default">Login</button>
	</form>';
		} else {
			echo "<div class='nav navbar-right' style='padding: 8px; border-radius: 10px;'>Welcome back, " . $_SESSION['username'] . "! <a href='\Otaku-Cloud/logout_parse.php'><button class='btn btn-default'>Logout</button></a></div>";
		}
	?>
       
  </div><!-- /.navbar-collapse -->
</nav>
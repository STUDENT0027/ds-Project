<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>BeeSocial Login</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div id="main">
		<header>
		   <div id="login"><a href="login.php">Login</a></div>
			<div id="signup"><a href="register.php">Sign up</a></div>
			<div id="logo">
				<a  href="index.html"><img src="images/BeeSocial.png"></a>
				<div id="logo_text"><h2><strong>Be curious. Be informed. BeeSocial.</strong></h2></div>
			</div>
		<!--Main Menu Bar-->    
		  <nav>
			<div id="menu_container">
			  <ul class="sf-menu" id="nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Categories</a>
				  <ul>
					<li><a href="nonrNews.php">News and Current events</a></li>
                <li><a href="nonrTechnology.php">Technology</a></li>
                <li><a href="nonrHobbies.php">Hobbies</a></li>
                <li><a href="nonrSports.php">Sports</a></li>
                <li><a href="nonrEducation.php">Education</a></li>
                <li><a href="nonrTravel.php">Travel</a></li>    
                <li><a href="nonrAnimal.php">Animal Life</a></li>
                <li><a href="nonrEntertainment.php">Entertainment</a></li>
                <li><a href="nonrHealth.php">Health</a></li>
				<li><a href="nonrFashion.php">Fashion</a></li>		
				<li><a href="nonrFood.php">Food</a></li>
				  </ul>
				</li>
<li><a href="nonrRules.html">Site Rules</a></li>
			  </ul>
			</div>
		  </nav>
		</header>
	</div>
	
	<div id="site_content">
		<div class="content">
			<h1>Login</h1>
			<div class ="form_settings">
				<form method="post" action="login.php">
					<?php include('errors.php'); ?>
						<div class="input-group">
							<p><label>Username</label>
								<input type="text" name="username" ></p>
						</div>
						<div class="input-group">
							<p><label>Password</label>
							<input type="password" name="password"></p>
						</div>
						<div class="input-group">
							<span>&nbsp;</span><button type="submit" class="btn" name="login_user">Login</button>
						</div>
					<p>
						Not yet a member? <a href="register.php">Sign up</a>
					</p>
				</form>
			</div>
		</div>
	</div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
      <p><a href="index.html">Home</a> | <a href="login.php">Login</a> | <a href="#">Register</a>
      <p>Copyright &copy; CSS3_contrast | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>
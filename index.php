<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>BeeSocial News</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="hexCss.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div id="main">
   
	<header>
		<div id="login"><a href="index.php?logout='1'" style="color: red;">Logout</a></div>
		<div id="logo">
			<a  href="home.html"><img src="images/BeeSocial.png"></a>
			<div id="logo_text"><h2><strong>Be curious. Be informed. BeeSocial.</strong></h2></div>
		</div>
	
	<!--Main Menu Bar-->    
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="home.html">Home</a></li>
            <li><a href="index.php">Profile</a></li>
            <li><a href="#">Categories</a>
              <ul>
               <li><a href="regNews.php">News and Current events</a></li>
                <li><a href="regTechnology.php">Technology</a></li>
                <li><a href="regHobbies.php">Hobbies</a></li>
                <li><a href="regSports.php">Sports</a></li>
                <li><a href="regEducation.php">Education</a></li>
                <li><a href="regTravel.php">Travel</a></li>    
                <li><a href="regAnimal.php">Animal Life</a></li>
                <li><a href="regEntertainment.php">Entertainment</a></li>
                <li><a href="regHealth.php">Health</a></li>
				<li><a href="regFashion.php">Fashion</a></li>		
				<li><a href="regFood.php">Food</a></li>
			  </ul>
            </li>
			<li><a href="Rules.html">Site Rules</a></li>
 		  </ul> 
		</div>
		
      </nav>
    </header>
    <div id="site_content">
	  	
	  <div class="content">
			<div class="notification">
		<!-- notification message -->
			<?php if (isset($_SESSION['success'])) : ?>
			  <div class="error success" >
				<h3>
				  <?php 
					echo $_SESSION['success']; 
					unset($_SESSION['success']);
				  ?>
				</h3>
			  </div>
			<?php endif ?>
		</div>
			<div class = "category">		
				<a href="#">
					<div id="profile" class = "hexagon"><h2>Profile</h2></div>
				</a>
			</div>
	  </div>		
	  <div class ="profile">
			<!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
				<h2>Username:&nbsp;<strong><?php echo $_SESSION['username']; ?></strong></h2>
				<!--<h2>Age:&nbsp;<strong><!-- insert php code here --><!--</strong></h2>
				<h2>Email:&nbsp;<strong><!-- insert php code here --><!--</strong></h2>-->
				<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			<!--	<input type="button" onclick="location.href='upload.php';" value="add a resource" />
				<input type="button" onclick="location.href='view.php';" value="view resources" />-->
			<?php endif ?>
		</div>
	</div>
	</div>
	<div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
      <p><a href="home.html">Home</a> | <a href="index.php?logout='1'">Logout</a></p>
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
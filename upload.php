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
<?php
//include_once 'dbconfig.php';
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dsproject');
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>BeeSocial</title>
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
			<a  href="index.html"><img src="images/BeeSocial.png"></a>
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
                <li><a href="News.php">News and Current events</a></li>
                <li><a href="Technology.php">Technology</a></li>
                <li><a href="Hobbies.php">Hobbies</a></li>
                <li><a href="Sports.php">Sports</a></li>
                <li><a href="Education.php">Education</a></li>
                <li><a href="Travel.php">Travel</a></li>    
                <li><a href="Animal.php">Animal Life</a></li>
                <li><a href="Entertainment.php">Entertainment</a></li>
                <li><a href="Health.php">Health</a></li>
				<li><a href="Fashion.php">Fashion</a></li>		
				<li><a href="Food.php">Food</a></li>
			  </ul>
            </li>
			<li><a href="Rules.html">Site Rules</a></li>		
		  </ul>
        
		</div>
		
      </nav>
    </header>
    <div id="site_content">
      
	  <div class="content">
		<h2>Create a new topic</h2>
		<div class = "form_settings">
			  <form action="upload2.php" method="post" enctype="multipart/form-data">
			 <label for="title">Topic title</label><input type="text" class="form-control" id="title" name="title" placeholder="Enter title of resource" required /><br>
			<div>
			<label for="category">Category</label>
			<select name="category"> 
			  <option value ="Animal Life">Animal Life</option>
			  <option value="Education">Education</option>
			  <option value="Entertainment">Entertainment</option>
			  <option value="Fashion and Accessories">Fashion and Accessories</option>
			  <option value="Health and Personal Care">Health and Personal Care</option>
			  <option value="Hobbies">Hobbies</option>
			  <option value="News and Current Events">News and Current Events</option>
			  <option value="Sports">Sports</option>
			  <option value="Technology">Technology</option>
			  <option value="Travel">Travel</option>
			  <option value="Food">Food</option>
			</select>
			</div>
			<label for="description" >Topic Content</label>
			<div class="col-sm-7">
											<textarea class="form-control" rows="5" cols="50" name="description" placeholder="Topic content" ></textarea>
											
											<br><small>5 to 65,535 characters long </small> 
											<br />
											
			</div>
			<div>
			<div class="filetype">
			<label for="type_">File Type</label><br>
									   <input name="type_" type="radio" value="1" />
											Pdf file 
										
										
											<input name="type_" type="radio" value="2" />
											Video 
										
										
											<input name="type_" type="radio" value="3" />
											Presentation/Documents
										
										
											<input name="type_" type="radio" value="4" />
											Images
										
										
											<input name="type_" type="radio" value="5" />
											Audio
										
			</div>
			</div>
			 <input type="file" name="file" />
			 <button type="submit" name="btn-upload">upload</button>
			 </form>
		</div>	 
				<br /><br />
				<?php
			 if(isset($_GET['success']))
			 {
			  ?>
					<label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
					<?php
			 }
			 else if(isset($_GET['fail']))
			 {
			  ?>
					<label>Problem While File Uploading !</label>
					<?php
			 }
			 else
			 {
			  ?>
					<label>Try to upload a files</label>
					<?php
			 }
			 ?>
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
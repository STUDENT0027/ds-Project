<?php
//include_once 'dbconfig.php';
// connect to the database
//$db = mysql_connect('localhost', 'root', '');
//mysql_select_db('dsproject',$db) or die('Could not select database; ' . mysql_error());

$db = mysqli_connect('localhost', 'root', '', 'dsproject');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
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
            <li><a href="login.php">Profile</a></li>
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
			<li><a href="login.php">Site Rules</a></li>
 		  </ul> 
		</div>
		
      </nav>
    </header>
    <div id="site_content">
      
	 <div class="content">
		<div class = "category">		
			<a href="#">
				<div id="fashion" class = "hexagon"><h2>Fashion</h2></div>
			</a>
		</div>
		<div class="topic_option">
			<div id="catSearch" class="searchBar">
				 <input id="catSearch" type="text" placeholder="Search by tag...">
				<button id="search" type="submit" class="btn" name="login_user">Search</button>
			</div>
			<button id="addTopic" type="submit" class="btn" name="login_user">New Topic</button>
		</div>

		<div class = "topics">

   
				 <?php
			 $sql="SELECT * FROM tbl_uploads WHERE category='Fashion and Accessories'";
			 //$result_set = mysql_query($sql);
			 $result_set = $db->query($sql);
			 
			//if($result_set) { 
			   // die(mysql_error()); // TODO: better error handling
				//echo 'No posts in this category';
			//}

			if ($result_set->num_rows > 0) {
				// output data of each row
				?>
			 <table width="80%" border="1">
				<tr>
				<th colspan="4">Sign up or Login to view resources</th>
				</tr>
				<tr>
				<td>Topic title</td>
				<td>Author</td>
				</tr> <?php
			 while($row= $result_set->fetch_assoc())
			 {
			  ?>
			   
					<tr>
					<td><?php echo $row['title'] ?></td>
					
					<td><?php echo $row['username'] ?></td>

					</tr>
					<?php
					
			 } 
								
			 }
			 else {?>
				<h2 id = "catMsg"><?php echo "No posts in this category";?></h2>
				<?php
			}


			 $db->close();


			 ?>
				</table>
		</div>	
	</div>
</div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
      <p><a href="index.html">Home</a> | <a href="login.php">Login</a> | <a href="register.php">Register</a>
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
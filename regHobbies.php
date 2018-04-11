
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  ?>
  
  
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//view.php
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
  <title>BeeSocial</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="hexCss.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
		<div class = "category">		
			<a href="#">
				<div id="camera" class = "hexagon"><h2>Hobbies</h2></div>
			</a>
		</div>
		<div class="topic_option">
			<div id="catSearch" class="searchBar">
				 <input id="catSearch" type="text" placeholder="Search by tag...">
				<button id="search" type="submit" class="btn" name="login_user">Search</button>
			</div>
			<a href="upload.php"><button id="addTopic" type="submit" class="btn" name="login_user">New Topic</button></a>
		</div>

		<div class = "topics">
			<div class="form_settings">
	
   
				 <?php
			 $sql="SELECT * FROM tbl_uploads WHERE category='Hobbies'";
			$result_set = $db->query($sql);
			if($result_set === FALSE) { 
				die(mysql_error()); // TODO: better error handling
			}
			if ($result_set->num_rows > 0) {
			 while($row= $result_set->fetch_assoc())
			 {
			  ?>
					
					<?php
					
						 
								if($row['ftype'] == 1)
								{
									?>
								
								<h2>Title: <?php echo $row['title'] ?></h2><br>
								<label><?php echo $row['description'] ?></label><br>
								<embed src="uploads/<?php echo $row['file']  ?>" width="200px" height="200px" />
								<br />
								<a href="uploads/<?php echo $row['file'] ?>"  target="_blank">View</a>
								
								<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
				$result_set2 = $db->query($sql2);
				
				while($row2 = $result_set2->fetch_assoc()) {
				?>				
				<table>
				<tr>
			   <td><?php echo $row2['comment']  ?></td>
			   </tr>
			   </table>
			   <!--  <div id="display_comment"></div>-->
				
				<?php } ?>
				<div class="container">
			   <form method="POST" id="comment_form" action= "add_commentHo.php">
			   <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['id']  ?>" />
				<div class="form-group">
				</div>
				
				<!-- Text area for comments-->
				<div>
				 <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
				</div>
				<div class="form-group">
				 <input type="hidden" name="comment_id" id="comment_id" value="0" />
				 <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
				 <br><hr>
				</div>
				</form> 
								<?php 
								}
								
								
								if($row['ftype'] == 2 )
								{							
									?>
											
											
											<!--Display video-->	
											<h2>Title: <?php echo $row['title'] ?></h2><br>
								<label><?php echo $row['description'] ?></label><br>
								
												<video width="320" height="240" controls>
									  <source src="uploads/<?php echo $row['file'] ?>">
															  <?php echo $login_title; ?>
									</video>
									
									<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
				$result_set2 = $db->query($sql2);
				
				while($row2 = $result_set2->fetch_assoc()) {
				?>				
				<table>
				<tr>
			   <td><?php echo $row2['comment']  ?></td>
			   </tr>
			   </table>
			   <!--  <div id="display_comment"></div>-->
				
				<?php } ?>
				<div class="container">
			   <form method="POST" id="comment_form" action= "add_commentHo.php">
			   <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['id']  ?>" />
				<div class="form-group">
				 
				</div>
				<div class="form-group">
				 <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
				</div>
				<div class="form-group">
				 <input type="hidden" name="comment_id" id="comment_id" value="0" />
				 <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
				 <br><hr>
				</div>
				</form> 
											<?php 
										}
										
								if($row['ftype'] == 4)
								{
						
									?>
								
								
								<!--Display images-->	
								<h2>Title: <?php echo $row['title'] ?></h2><br>
								<label><?php echo $row['description'] ?></label><br>
								<!--Edit size-->
								<img src="uploads/<?php echo $row['file']?> " width="25%" height="25%" />
								<br />
								<a href="uploads/<?php echo $row['file']?>"  target="_blank">View</a>
								<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
				$result_set2 = $db->query($sql2);
				
				while($row2 = $result_set2->fetch_assoc()) {
				?>				
				
				<table>
				<tr>
			   <td><?php echo $row2['comment']  ?></td>
			   </tr>
			   </table>
			   <!--  <div id="display_comment"></div>-->
				
				<?php } ?>
			<div class="container">
			   <form method="POST" id="comment_form" action= "add_commentHo.php">
			   <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['id']  ?>" />
				<div class="form-group">
				</div>
				<div class="form-group">
				 <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
				</div>
				<div class="form-group">
				 <input type="hidden" name="comment_id" id="comment_id" value="0" />
				 <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
				 <br><hr>
				</div>
				</form> 
			</div>
			<?php 
									}
									
								if($row['ftype'] == 5)
								{
						
									?>
								
								
								<!--Display Audio-->
												<h2>Title: <?php echo $row['title'] ?></h2><br>
												<label><?php echo $row['description'] ?></label><br>							
												<audio controls>
													<source src="uploads/<?php echo $row['file']?> ?>" >
												</audio>
												<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
				$result_set2 = $db->query($sql2);
				
				while($row2 = $result_set2->fetch_assoc()) {
				?>				
				
				
			   	<table>
				<tr>
			   <td><?php echo $row2['comment']  ?></td>
			   </tr>
			   </table>
			   <!--  <div id="display_comment"></div>-->
				
				<?php } ?>
				<div class="container">
			   <form method="POST" id="comment_form" action= "add_commentHo.php">
			   <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['id']  ?>" />
				<div class="form-group">
				</div>
				<div class="form-group">
				 <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
				</div>
				<div class="form-group">
				 <input type="hidden" name="comment_id" id="comment_id" value="0" />
				 <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
				 <br><hr>
				</div>
				</form> 
								<?php 
									}
			 } //end of while
			 }
			 else {?>
				<h2 id = "catMsg"><?php echo "No posts in this category";?></h2>
				<?php
			}
			 ?>
			</div>
			</div>
		</div>
		</div>
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

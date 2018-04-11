
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
<!DOCTYPE html>
<html >
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div id="header">
</div>
<div id="body">

   
     <?php
 $sql="SELECT * FROM tbl_uploads WHERE category='Entertainment'";
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
					
					<h4>Title: <?php echo $row['title'] ?></h4><br>
					<label><?php echo $row['description'] ?></label><br>
					<embed src="uploads/<?php echo $row['file']  ?>" width="200px" height="200px" />
					<br />
					<a href="uploads/<?php echo $row['file'] ?>"  target="_blank">View</a>
					
					<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
	$result_set2 = $db->query($sql2);
	
	while($row2 = $result_set2->fetch_assoc()) {
	?>				
	
	
   <p><?php echo $row2['comment']  ?>
   <!--  <div id="display_comment"></div>-->
	
	<?php } ?>
	<div class="container">
   <form method="POST" id="comment_form" action= "add_commentEn.php">
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
					
					
                    if($row['ftype'] == 2 )
					{							
						?>
								
								
								<!--Display video-->	
								<h4>Title: <?php echo $row['title'] ?></h4><br>
					<label><?php echo $row['description'] ?></label><br>
					
									<video width="320" height="240" controls>
						  <source src="uploads/<?php echo $row['file'] ?>">
												  <?php echo $login_title; ?>
						</video>
						
						<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
	$result_set2 = $db->query($sql2);
	
	while($row2 = $result_set2->fetch_assoc()) {
	?>				
	
	
   <p><?php echo $row2['comment']  ?>
   <!--  <div id="display_comment"></div>-->
	
	<?php } ?>
	<div class="container">
   <form method="POST" id="comment_form" action= "add_commentEn.php">
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
					<h4>Title: <?php echo $row['title'] ?></h4><br>
					<label><?php echo $row['description'] ?></label><br>
					
					<img src="uploads/<?php echo $row['file']?> " width="25%" height="25%" />
					<br />
					<a href="uploads/<?php echo $row['file']?>"  target="_blank">View</a>
					<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
	$result_set2 = $db->query($sql2);
	
	while($row2 = $result_set2->fetch_assoc()) {
	?>				
	
	
   <p><?php echo $row2['comment']  ?>
   <!--  <div id="display_comment"></div>-->
	
	<?php } ?>
	<div class="container">
   <form method="POST" id="comment_form" action= "add_commentEn.php">
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
						
					if($row['ftype'] == 5)
					{
			
						?>
					
					
					<!--Display Audio-->
									<h4>Title: <?php echo $row['title'] ?></h4><br>
					                <label><?php echo $row['description'] ?></label><br>							
									<audio controls>
										<source src="uploads/<?php echo $row['file']?> ?>" >
									</audio>
									<?php $sql2 = "SELECT * FROM tbl_comment WHERE id =".$row['id'];
	$result_set2 = $db->query($sql2);
	
	while($row2 = $result_set2->fetch_assoc()) {
	?>				
	
	
   <p><?php echo $row2['comment']  ?>
   <!--  <div id="display_comment"></div>-->
	
	<?php } ?>
	<div class="container">
   <form method="POST" id="comment_form" action= "add_commentEn.php">
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
 else {
    echo "No posts in this category";
}
 ?>
   
    
</div>
</body>
</html>

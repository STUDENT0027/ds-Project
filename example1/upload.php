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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload a Resource </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <form action="upload2.php" method="post" enctype="multipart/form-data">

 <label for="title">Title</label>
<input type="text" class="form-control" id="title" name="title" placeholder="Enter title of resource" required /><br>
<div >
<label for="category">Category</label><br>
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
                         <label for="description" >Description</label> <br>
							<div class="col-sm-7">
								<textarea class="form-control" rows="5" cols="50" name="description" placeholder="Description of resource" ></textarea>
								
								<br> <small>5 to 65,535 characters long </small> 
								<br />
								
							</div>
<div >
<label for="type_">File Type</label><br>
                           <input name="type_" type="radio" value="1" />
								Pdf file 
							</label>
							<label>
								<input name="type_" type="radio" value="2" />
								Video 
							</label>
							<label>
								<input name="type_" type="radio" value="3" />
								Presentation/Documents
 							</label>
							<label>
								<input name="type_" type="radio" value="4" />
								Images
 							</label>
							<label>
								<input name="type_" type="radio" value="5" />
								Audio
 							</label>
</div>
 <input type="file" name="file" />
 <button type="submit" name="btn-upload">upload</button>
 </form>
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
<div id="footer">

</div>
</body>
</html>
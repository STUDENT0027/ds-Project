<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  ?>
<?php
//include_once 'dbconfig.php';
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dsproject');
if(isset($_POST['btn-upload']))
{    
// [name in index]
 $title = $_POST['title'];
 $category = $_POST['category']; 
 $description = $_POST['description']; 
 $type = $_POST['type_'];
 
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
  // form validation: ensure that the form is correctly filled ...
   //do later
   
  $valid_extensions = array('jpeg', 'jpg', 'png', 'mp3', 'mkv' , 'pdf' , 'docx' , 'ppt'); // valid extensions
  
  // get uploaded file's extension
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 

 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
	 
 // $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
 // mysql_query($sql);
  
  //include database configuration file
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dsproject');

//insert form data in the database        (database names)
$insert = $db->query("INSERT tbl_uploads (file,type,size,title,category,description,ftype,username) VALUES ('".$final_file."','".$file_type."','".$new_size."','".$title."','".$category."','".$description."','".$type."','".$_SESSION['username']."')");
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
  <?php
 }
 else
 {
  echo 'invalid';
 }
}
}
?>
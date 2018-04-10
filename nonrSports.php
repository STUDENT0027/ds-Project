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
<!DOCTYPE html>
<html >
<head>

</head>
<body>
<div id="header">
</div>
<div id="body">

   
     <?php
 $sql="SELECT * FROM tbl_uploads WHERE category='Sports'";
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
    <td>Title</td>
    <td>Description</td>
    </tr> <?php
 while($row= $result_set->fetch_assoc())
 {
  ?>
   
        <tr>
        <td><?php echo $row['title'] ?></td>
		
        <td><?php echo $row['description'] ?></td>

        </tr>
        <?php
		
 } 
					
 }
 else {
    echo "No posts in this category";
}


 $db->close();


 ?>
    </table>
    
</div>
</body>
</html>
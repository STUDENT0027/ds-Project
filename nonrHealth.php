<?php
//include_once 'dbconfig.php';
// connect to the database
$db = mysql_connect('localhost', 'root', '');
mysql_select_db('dsproject',$db) or die('Could not select database; ' . mysql_error());

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
 $sql="SELECT * FROM tbl_uploads WHERE category='Health and Personal Care'";
 $result_set = mysql_query($sql);
if($result_set === FALSE) { 
    die(mysql_error()); // TODO: better error handling
	//echo 'No posts in this category';
}

if (mysql_num_rows($result_set)==0) {  echo 'No posts in this category'; }
else{ ?>
 <table width="80%" border="1">
	<tr>
    <th colspan="4">Sign up or Login to view resources</th>
    </tr>
    <tr>
    <td>Title</td>
    <td>Description</td>
    </tr> <?php
 while($row=mysql_fetch_array($result_set))
 {
  ?>
   
        <tr>
        <td><?php echo $row['title'] ?></td>
		
        <td><?php echo $row['description'] ?></td>

        </tr>
        <?php
		
 } 
					
 }
 


 ?>
    </table>
    
</div>
</body>
</html>
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
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...</th>
    </tr>
    <tr>
    <td>Title</td>
    <td>User</td>
    <td>View</td>
	<td>Comment</td>
	<td>Save</td>
    </tr>
     <?php
 $sql="SELECT * FROM tbl_uploads";
 $result_set = mysql_query($sql);
if($result_set === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
		<td><button type="button">add a comment</button></td>
		<td><button type="button">save to profile</button></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=dsproject', 'root', '');

$error = '';

$comment_content = '';



if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment,id) 
 VALUES (:parent_comment_id, :comment, :id)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   
   ':id' => $_POST["id"]
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);
header('Location: regAnimal.php')
?>

<?php session_start();

require_once "classes/model.php";
require_once "classes/comment.php";



if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $comment = new Comment();
    $update  = $comment->updateStatus($id);
  
    if ($update) {
        header('Location: admin.php');
    }

}



?>
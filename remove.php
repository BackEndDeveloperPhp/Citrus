<?php session_start();

require_once "classes/model.php";
require_once "classes/comment.php";


// delete comment
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $comment = new Comment();
    $delete  = $comment->deleteComment($id);


    if ($delete) {
        header('Location: admin.php');
    }

}



?>
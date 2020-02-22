<?php session_start();

require_once "classes/model.php";
require_once "classes/comment.php";

// insert comment into DB
if (isset($_POST['submit'])) {
      
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) {
        
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $text = $_POST['text'];

            $comment = new Comment();
            $insert  = $comment->insert($name, $email, $text);
            
            if($insert){
               
                    header('Location:index.php');
                    $_SESSION['message']= "<div class='alert alert-success' role='alert'>
                    Comment added successfully
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>";
            }else{
                    header('Location:index.php');
                    $_SESSION['error']= "<div class='alert alert-danger ' role='alert'>
                    error!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>";
            }
          
        }else{
                    header('Location:index.php');
                    $_SESSION['empty']= "<div class='alert alert-danger ' role='alert'>
                    Fields is required!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>";
        }
    }
}


?>
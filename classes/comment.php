<?php 



Class Comment extends Model {

  

    // select all data where status = 1

 public function select(){

    $sql = "SELECT * FROM `comments` WHERE status = 1";


    $result = $this->connect()->prepare($sql); 
    $result->execute(); 
    $rows = $result->fetchAll();
  
    return $rows; 
 }


  //insert data in DB

  public function insert($name, $email, $text){
  

      $query = "INSERT INTO comments (name, email, text, status) VALUES (:name, :email, :text, '0')";         
                 
      $pripadeQuery = $this->connect()->prepare($query);

            $pripadeQuery->bindParam(":name", $name);
            $pripadeQuery->bindParam(":email", $email);
            $pripadeQuery->bindParam(":text", $text);
       
                   
      $rez = $pripadeQuery->execute();
      return $rez;

  }
   


 // select all data where status = 0

 public function statusZero(){

  $sql = "SELECT * FROM `comments` WHERE status = 0";

 
  $result = $this->connect()->prepare($sql); 
  $result->execute(); 
  $rows = $result->fetchAll();
  
  return $rows;
 
}


// comment update

public function updateStatus($id){


  $sql = "UPDATE comments set status='1' WHERE id = :id";



  $pripadeQuery = $this->connect()->prepare($sql);

  $pripadeQuery->bindParam(":id", $id);

         
  $rez = $pripadeQuery->execute();
  return $rez;
}



// delete comment

public function deleteComment($id){

  $sth = $this->connect()->prepare('DELETE FROM comments WHERE id=:id');
  $sth->bindValue(':id', $id, PDO::PARAM_INT);
  $sth->execute();
  $count = $sth->rowCount();

  if($count>0)
  {
      header('location:admin.php');
  }else{
      echo "Error in delete";
  }
}


 
}






?>
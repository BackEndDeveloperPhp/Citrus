<?php



Class Product extends Model {

    // select all data

 public function select(){

    $sql = "SELECT * FROM items";

    $result = $this->connect()->prepare($sql); 
    $result->execute(); 
    $rows = $result->fetchAll();
  
    return $rows; 

 }
 
}
?>
<?php  
class Guestbook extends CI_Controller{
  
  
  public function index(){
    echo "Hi~ Luzia!";
  }
  
  public function add($title,$comment){
    echo "add" . $title . $comment;
  }
  
  public function delete($id){
    echo "delete" . $id;
  }
  
  public function edit($id,$title,$comment){
    echo "edit" . $id . $title . $comment;
  }
}

?>
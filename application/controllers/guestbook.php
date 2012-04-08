<?php  
class Guestbook extends CI_Controller{
  
  
  public function index(){
    echo "Hi~ Luzia!"."<br>";
	echo "welcome guestbook";
	
  }
  
  public function add($title = null,$comment = null){
    echo "add" . $title . $comment;
	$data = array(
		'title'=> isset($title) ? $title : "",
		'comment'=> isset($comment) ? $comment : "");
	$this->load->view('add_form',$data);
  }
  
  public function delete($id = null){
    echo "delete" . $id;
  }
  
  public function edit($id = null,$title = null,$comment = null){
    echo "edit" . $id . $title . $comment;
	$data = array(
		'id'=>$id,
		'title'=>$title,
		'comment'=>$comment);
	$this->load->view('add_form',$data);
	
  }
}

?>
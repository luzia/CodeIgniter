<?php  
class Guestbook extends CI_Controller{
  
  public function index(){
	$this->load->view('/guestbook/view.html');
    // echo "Hi~ Luzia!"."<br>";
	// echo "welcome guestbook";
  }
  
  public function __construct(){
		// Model «Øºc¨ç¦¡
		parent::__construct();
		$this->load->model('/guestbook_model');
  }
  
  // public function add($title = null,$comment = null){
    // echo "add" . $title . $comment;
	// $data = array(
		// 'title'=> isset($title) ? $title : "",
		// 'comment'=> isset($comment) ? $comment : "");
	// $this->load->view('add_form',$data);
  // }
  public function lists(){
	$data['data'] = $this->guestbook_model->list_data();
	$this->load->view('/guestbook/list',$data);
  }
  // public function view(){
	// $this->load->view('guestbook/view.html');
  // }
  
  public function add(){
	$this->load->view('/guestbook/add_form');
  }
  
  public function insert_db(){
	$data = array(
		'name'=>$this->input->get_post('title'),
		'message'=>$this->input->get_post('message')
		);
	$this->guestbook_model->insert_data('message',$data);
	// $data['data'] = $this->guestbook_model->list_data();
	// $this->load->view('/guestbook/list',$data);
	$this->load->view('/guestbook/view.html');
  }
  
  public function delete(){
	$id = $this->input->get_post('id');
	$this->guestbook_model->delete_db($id);
	// $data['data'] = $this->guestbook_model->list_data();
	// $this->load->view('/guestbook/list',$data);
	$this->load->view('/guestbook/view.html');
  }
  
  public function edit(){
	$id = $this->input->get_post('id');
	$data['data'] = $this->guestbook_model->get_data($id);
	$this->load->view('/guestbook/edit_form',$data);
	// $this->load->view('/guestbook/view.html');
  }
  
  public function edit_db(){
	$id = $this->input->get_post('id') ? $this->input->get_post('id') : "";
	$update_data = array(
		"name"=>$this->input->get_post('name') ? $this->input->get_post('name') : "",
		"message"=>$this->input->get_post('message') ? $this->input->get_post('message') : ""
	);
	$this->guestbook_model->update_db($id,$update_data);
	// $data['data'] = $this->guestbook_model->list_data();
	// $this->load->view('/guestbook/list',$data);
	$this->load->view('/guestbook/view.html');
  }
}

?>
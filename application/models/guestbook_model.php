<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guestbook_model extends CI_Model {
	//public $name = 'guestbook';
	public function __construct(){
		// Model 建構函數
		parent::__construct();
		$this->load->database();
	}
	public function add_guestbook(){
		echo 'insert data';
	}
	public function index(){
		echo 'index';
	}

	public function insert_data($db,$data = array()){
		$this->db->insert($db,$data);
	}
	public function list_data(){
		$query = $this->db->get('message');
		$data = $query->result_array();
		return $data;
	}
	public function get_data($id){
		$this->db->where('id',$id);
		$query = $this->db->get('message');
		$data = $query->row_array();
		return $data;
	}
	public function update_db($id,$data){
		$this->db->where('id',$id);
		$query = $this->db->update('message',$data);
	}
	public function delete_db($id){
		$this->db->where('id',$id);
		$query = $this->db->delete('message');
	}
}

?>
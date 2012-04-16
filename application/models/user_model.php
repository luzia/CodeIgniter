<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
     public function __construct()
    {
        // Model 建構函數
        parent::__construct();
        $this->load->database();
    }
    
    public function get_db()
    {
        $query = $this->db->get("user");
        $data = $query->result_array();
        return $data;
    }
    
    public function get_data($id)
    {
        $this->db->where("user_id", $id);
        $query = $this->db->get("user");
        $data = $query->row_array();
        return $data;
    }
    
    public function update_db($user_id, $data)
    {
        $this->db->where("user_id", $user_id);
        $this->db->update("user", $data);
    }
    
    public function delete_data($user_id)
    {
        $this->db->where("user_id", $user_id);
        $this->db->delete("user");
    }
    
    public function insert_data($data = array())
    {
        $this->db->insert("user", $data);
    }
    
}

?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class New_model extends CI_Model{
     public function __construct()
    {
        // Model 建構函數
        parent::__construct();
        $this->load->database();
    }
    
    public function get_db()
    {
        $query = $this->db->get("news");
        $data = $query->result_array();
        return $data;
    }
    
    public function get_data($id)
    {
        $this->db->where("news_id", $id);
        $query = $this->db->get("news");
        $data = $query->row_array();
        return $data;
    }
    
    public function update_db($news_id, $data)
    {
        $this->db->where("news_id", $news_id);
        $this->db->update("news", $data);
    }
    
    public function delete_data($news_id)
    {
        $this->db->where("news_id", $news_id);
        $this->db->delete("news");
    }
    
    public function insert_data($data = array())
    {
        $this->db->insert("news", $data);
    }
    
    public function join()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->join('user', 'user.user_id = news.user_id', 'left');
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }
    
}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model{
    public function __construct()
    {
        // Model 建構函數
        parent::__construct();
        $this->load->database();
    }
    
    public function get_db($db)
    {
        $query = $this->db->get($db);
        $data = $query->result_array();
        return $data;
        
    }

    public function insert_data($db, $data = array())
    {
        $this->db->insert($db, $data);
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
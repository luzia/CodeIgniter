<?php  
class News extends CI_Controller
{
    public function index()
    {
        // $this->load->view('/news/admin.php'); 
        $this->admin(); 
    }
    
    public function __construct()
    {
        // Model 建構函式
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('user_model');
        $this->load->model('new_model');
    }
    
    public function admin()
    {
        $data['data'] = $this->news_model->join();
        $this->load->view('/news/admin.php', $data); 
    }
    
    public function user_list()
    {
        $data['data'] = $this->user_model->get_db();
        $this->load->view('/news/user_list.php', $data); 
    }
    public function news_list()
    {
        $data['data'] = $this->new_model->get_db();
        $this->load->view('/news/news_list.php', $data); 
    }
    
    public function add_user()
    {
        $this->load->view('/news/user_add.php'); 
    }
    
    public function add_news()
    {
        $user_data['user_data'] = $this->news_model->get_db("user");
        $this->load->view('/news/news_add.php', $user_data); 
    }
    
    public function lists()
    {
        $user_data = $this->user_model->get_db();
        $news_data = $this->new_model->get_db();
        $data['data'] = array(
            "user_data"=> $user_data,
            "news_data"=> $news_data
        );
        $this->load->view('/news/admin.php', $data); 
    }
    
    public function ac()
    {
        switch($this->input->get_post('ac'))
        {
            case "user_insert":
                $this->user_insertDB();
                break;
            case "news_insert":
                $this->news_insertDB();
                break;
            case "user_edit":
                $this->user_update();
                break;
            case "news_edit":
                $this->news_update();
                break;
            default:
                echo "other";
        }
    }
    
    public function user_insertDB()
    {
        $data = array(
            "user_name"=> $this->input->get_post("user_name"),
            "user_company"=> $this->input->get_post("user_company")
            );
        $this->news_model->insert_data("user", $data);
        $this->admin();
    }
    
     public function news_insertDB()
    {
        $data = array(
            "user_id"=> $this->input->get_post("user_id"),
            "news_title"=> $this->input->get_post("news_title"),
            "news_message"=> $this->input->get_post("news_message")
            );
        $this->news_model->insert_data("news", $data);
        $this->admin();
    }
    
    public function edit()
    {
        switch($this->input->get_post("tb"))
        {
            case "user":
                $this->edit_user();
                break;
            case "news":
                $this->edit_news();
                break;
            default:
            
        }
    }
    
    public function del()
    {
        switch($this->input->get_post("tb"))
        {
            case "user":
                $this->delete_user();
                break;
            case "news":
                $this->delete_news();
                break;
            default:
            
        }
    }
    
    public function edit_user()
    {
        $user_id = $this->input->get_post("user_id");
        $data['data'] = $this->user_model->get_data($user_id);
        $this->load->view("/news/user_edit", $data);
    }
    
    public function edit_news()
    {
        $user_data = $this->user_model->get_db();
        $news_id = $this->input->get_post("news_id");
        $news_data = $this->new_model->get_data($news_id);
        $data['data'] = array(
            "user_data"=>$user_data,
            "news_data"=>$news_data
        );
        $this->load->view("/news/news_edit", $data);
    }
    
    public function user_update()
    {
        $user_id = $this->input->get_post("user_id");
        $data = array(
            "user_name"=>$this->input->get_post("user_name"),
            "user_company"=>$this->input->get_post("user_company")
        );
        $this->user_model->update_db($user_id, $data);
        $this->admin();
    }
    
    public function news_update()
    {
        $news_id = $this->input->get_post("news_id");
        $data = array(
            "user_id"=>$this->input->get_post("user_id"),
            "news_title"=>$this->input->get_post("news_title"),
            "news_message"=>$this->input->get_post("news_message")
        );
        $this->new_model->update_db($news_id, $data);
        $this->admin();
    }
    
    public function delete_user()
    {
        $user_id = $this->input->get_post("user_id");
        $this->user_model->delete_data($user_id);
        $this->admin();
    }
    
    public function delete_news()
    {
        $news_id = $this->input->get_post("news_id");
        $this->new_model->delete_data($news_id);
        $this->admin();
    }
    
}

?>

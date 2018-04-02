<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->model('Blog_model');
        $result = $this->Blog_model->get_article();
        $arr['blogs']=$result;
        $this->load->view('index_logined.php',$arr);

    }
}
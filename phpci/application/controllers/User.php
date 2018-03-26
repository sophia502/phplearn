<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller{
//        初始化 构造函数
        public function __construct(){
            parent::__construct();
        }
        public function index(){

        }
        public  function reg(){
            $this->load->view("reg.php");
        }
        public function do_reg(){
           $name = $this->input->post('uname');
           $pass = $this->input->post('pass');
           $mpass=md5($pass);   //加密
           //1.加载model类
           $this->load->model('User_model');
           //2.加载model类下面的方法
           $result = $this->User_model->insert_name($name,$mpass);
           if($result){
//               echo"success";

           }else{
               echo"error";
           }
        }
    }
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('captcha');
        }
        public function index(){
            $this->load->view('index.php');
        }
        public function unlogin(){
            unset($_SESSION['uid']);
            unset($_SESSION['name']);
            redirect('User/index');
        }
        public function login(){
            $this->load->view('login.php');
        }
        public function do_login(){
            $name = $this->input->post('email');
            $pass = $this->input->post('pwd');

            $this->load->model('User_model');
            $result = $this->User_model->sel_name($name,$pass);
            if($result){
                $array = array(
                    'uid'  => $result->USER_ID,
                    'name' => $result->NAME,
//                    'logged_in' => TRUE
                );
                $this->session->set_userdata($array);
                redirect("Blog/index");
            }
        }
        public function reg(){
//            $this->load->helper('captcha');
            $vals = array(
                'word'      => rand(1000,9999),
                'img_path'  => './captcha/',
                'img_url'   => base_url().'captcha/',
//                'font_path' => './path/to/fonts/texb.ttf',
                'img_width' => '80',
                'img_height'    => 30,
                'expiration'    => 7200,
                'word_length'   => 8,
                'font_size' => 16,
//                'img_id'    => 'Imageid',
                'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

                // White background and border, black text and red grid
                'colors'    => array(
                    'background' => array(255, 255, 255),
                    'border' => array(255, 255, 255),
                    'text' => array(0, 0, 0),
                    'grid' => array(255,185,15)
                )
            );

            $cap = create_captcha($vals);
            $data['capt']=$cap;
            $this->load->view('reg.php',$data);
//            echo $cap['image'];

        }
        public function do_reg(){
            $account=$this->input->post('email');
            $name=$this->input->post('name');
            $pass=$this->input->post('pwd');
            $gender=$this->input->post('gender');
            $province=$this->input->post('province');
            $city=$this->input->post('city');
            $this->load->model('User_model');
            $result =$this->User_model->ins_data($account,$name,$pass,$gender,$province,$city);
            if($result){
                redirect('user/login');
            }
        }
    }
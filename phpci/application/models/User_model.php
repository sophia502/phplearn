<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function insert_name($name,$pass){
//            echo $name.'||'.$pass;
//            $sql="insert into user(uid,uname,pass) values(null,'$name','$pass')";
//            $query = $this->db->query($sql);
            $arr = array(
                'uname' => $name,
                'pass' => $pass,
            );
            $query = $this->db->insert('user',$arr);
            return $query;
        }
    }
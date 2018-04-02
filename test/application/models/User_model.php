<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model {
    public function ins_data($account,$name,$pass,$gender,$province,$city){
        $data = array(
            'ACCOUNT' => $account,
            'NAME' => $name,
            'PASSWORD' => $pass,
            'GENDER' => $gender,
            'PROVINCE' => $province,
            'CITY' => $city,
        );

        $query = $this->db->insert('t_users', $data);
        return $query;
    }
    public function sel_name($name,$pass){
        $this->db->where('ACCOUNT', $name);
        $this->db->where('PASSWORD', $pass);
        $query = $this->db->get('t_users');
        return $query->row();
    }
    }

<?php

class User_model extends CI_Model {

    //constructor function
    public function __construct(){
        parent::__construct();
    }

    public function check_login($email='',$password=''){
        if(!empty($email) && !empty($password)){
            $this->db->select('user_id,fname,lname,email');
            $this->db->where('email',$email);
            $this->db->where('password', md5($password));
            $res = $this->db->get('users');
            if($res->num_rows() > 0){
                return $res->row();
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function add_friend_type($friend_data=array()){
        if(!empty($friend_data)){
            $this->db->insert('frient_types', $friend_data);
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function add_friends($friends=array()){
        if(!empty($friends)){
            $this->db->insert('frients', $friends);
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


}
<?php

class Friend_model extends CI_Model {


	//constructor function
    public function __construct(){
        parent::__construct();
    }

	//function friend list 
	public function get_friend_types($user_id=''){
		$this->db->select('*');
		$this->db->from('friend_types');
		$this->db->where('user_id',$user_id);
		$res = $this->db->get();
		if($res->num_rows() > 0){
			return $res->result();
		}
		return false;
	}

	//function friend list 
	public function get_friend_list($user_id='',$friend_type_id=''){
		$this->db->select('*');
		$this->db->from('friends');
		$this->db->where('user_id',$user_id);
		$this->db->where('friend_type',$friend_type_id);
		$res = $this->db->get();
		if($res->num_rows() > 0){
			return $res->result();
		}
		return false;
	}

	//add friends to the list with groups (closed friends, faimily etc.) 
	public function add_friends($friend_data=array()){
		if(!empty($friend_data)){
			$this->db->insert('friends',$friend_data);
			return $this->db->insert_id();
		}
		return false;
	}

	//add friends types/groups (closed friends, faimily etc.) 
	public function add_friends_types($type_data=array()){
		if(!empty($type_data)){
			$this->db->insert('friend_types',$type_data);
			return $this->db->insert_id();
		}
		return false;
	}

	public function check_type_exists($type=''){
		if(!empty($type)){
			$this->db->select('friend_type_id');
			$this->db->from('friend_types');
			$this->db->where('friend_type_name',$type);
			$res = $this->db->get();
			if($res->num_rows()>0){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	//function get user list 
	public function get_user_list(){
		$this->db->select('*');
		$this->db->from('users');
		$res = $this->db->get();
		if($res->num_rows() > 0){
			return $res->result();
		}
		return false;
	}
}
<?php

//models es todo lo vinculado sql
    class User_Model extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }

        public function saveUser($data){

            if($data!=null){
                return $this->db->insert('users',$data);
            }

        }

        public function getAllUsers(){
            // select * from userrs
            $query= $this->db->get('users');
            return $query->result_array();//devuelve un array
        }
    }

?>
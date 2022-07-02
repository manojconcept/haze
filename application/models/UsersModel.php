<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UsersModel extends CI_Model
{
    //----------------------------------------------------------------------------------------------------->To create a table value
    public function create_users()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'phone' => $this->input->post('phone'),
        );
        return $this->db->insert('users', $data);
        return true;
    }
    //------------------------------------------------------------------------------------------------------>To check the data in table
    public function check_login($username, $password)
    {
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password, 'deleted' => "N"));
        return $query->result();
    }

    //----------------------------------------------------------------------------------------------------------------------->session 
    public function is_login()
    {
        if ($this->session->userdata("userid") != null) {
            $query = $this->db->get_where('users', array("id" => $this->session->userdata("userid"),"deleted"=>"N"));
            $user = $query->result();
            if (!empty($user[0]->id)) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function get_user_by_id()
    {
        $query = $this->db->get_where('users', array("id" => $this->session->userdata("userid"),"deleted"=>"N"));
        return $query->result();
    }

    public function update_user()
    {
        $data = [];
        $data["name"] = $this->input->post("name");
        $data["username"] = $this->input->post("username");
        $data["password"] = $this->input->post("password");
        $data["phone"] = $this->input->post("phone");
        $this->db->where('id', $this->session->userdata('userid'));
        $this->db->where('deleted', "N");
        if ($this->db->update('users', $data)) {
            return true;
        }
    }

        public function modeldelete(){ 
        $data = [];
        $data["deleted"] = "Y";
        $this->db->where('id', $this->session->userdata('userid'));
        $this->db->where("deleted","N" );
        if ($this->db->update('users', $data)) {
            return true;
        }
            
    }
}

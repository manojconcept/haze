<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    
    public function signup()
    {
        $this->load->view("templates/header");
        $this->load->view("pages/signup");
        $this->load->view("templates/footer");
    }

    public function signupsubmite()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo  validation_errors();
        } else {
            $this->UsersModel->create_users();
            redirect("users/home");
        }
    }

    //For LogIn
    public function sigeinsubmite()
    {
        $sibs = $this->UsersModel->check_login($this->input->post('siusername'), $this->input->post('sipassword'));
        // SettingUp userdata
        if (!empty($sibs[0]->id)) {
            $this->session->set_userdata("userid", $sibs[0]->id);
            redirect("users/dashboard");
        } else {
            redirect("users/signin");
        }
    }


    public function home()
    {
        $this->load->view("templates/header");
        $this->load->view("pages/home");
        $this->load->view("templates/footer");
    }

    public function signin()
    {
        $this->load->view("templates/header");
        $this->load->view("pages/signin");
        $this->load->view("templates/footer");
    }

    public function signout()
    {
        $this->session->sess_destroy();
        redirect('Users/home');
    }

    public function edit()
    {
        if ($this->UsersModel->is_login()) {
            $funstar = $this->UsersModel->get_user_by_id();
            // echo $funstar[0]->name;
            $data = [
                "name" => $funstar[0]->name,
                "username" => $funstar[0]->username,
                "password" => $funstar[0]->password,
                // "confirm_password" => $funstar[0]->confirm_password,
                "phone" => $funstar[0]->phone,
            ];
            $this->load->view("templates/header");
            $this->load->view("pages/edit", $data);
            $this->load->view("templates/footer");
        } else {
            redirect('Users/signin');
        }
    }


    public function resubmit()
    {
        $this->UsersModel->update_user();
        redirect("Users/edit");
        
    }
    

    public function dashboard()
    {

        if ($this->UsersModel->is_login()) {
            $this->load->view("templates/header");
            $this->load->view("pages/dashboard");
            $this->load->view("templates/footer");
        } else {
            redirect('Users/signin');
        }
    }

   public function deleted(){
    $this->UsersModel->modeldelete();
    $this->session->sess_destroy();
        redirect('Users/home');

   }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','html'));
        $this->load->library("form_validation");
        $this->load->model("user_model");
    }
    public function login()
    {
        if($this->data['user_token']) {
            redirect('user/home');
        }
        $this->form_validation->set_rules('login','Login','trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password','trim|required|xss_clean');
            if( $this->form_validation->run() == TRUE )
            {
                $result = $this->user_model->login( $this->input->post('login'), $this->input->post('password') );
                if($result){
                    redirect('user/home');
                }else{
                    redirect('user/login');
                }
            }else {
                $this->load->view('user/login_header');
                $this->load->view('user/login');
                $this->load->view('user/footer');
            }
    }
    public function home()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "home";

            $this->load->view('user/header', $this->data);
            $this->load->view('user/home');
            $this->load->view('user/footer');

    }
    public function users()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "profile";

        $this->load->view('user/header', $this->data);
        $this->load->view('user/users');
        $this->load->view('user/footer');

    }
    public function currency()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "currency";

        $this->load->view('user/header', $this->data);
        $this->load->view('user/currency');
        $this->load->view('user/footer');

    }
    public function ohistory()
    {
        if(!$this->data['user_token']) {
            redirect('user/login');
        }
        $this->data['active'] = "ohistory";

        $this->load->view('user/header', $this->data);
        $this->load->view('user/ohistory');
        $this->load->view('user/footer');

    }



//$this->data['active'] = "paths";
    //добавить контроллеры для всех видов
    public function logout()
    {
        unset($_SESSION['token']);
        session_destroy();
        redirect('/user/login','refresh');
    }

}
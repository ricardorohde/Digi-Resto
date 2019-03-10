<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
    }

    public function cek_auth_admin()
    {
        if ($this->session->userdata('username') == '' || $this->session->userdata('username') == null) {
            $_SESSION['redirect'] = current_url();
            redirect('login');
        }
    }

    public function cek_auth_user()
    {
        if ($this->session->userdata('username_user') == '' || $this->session->userdata('username_user') == null) {
            $_SESSION['redirect'] = current_url();
            redirect('login-user');
        }
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
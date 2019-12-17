<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CUser extends CI_Controller
{
	public function home()
	{
        $query = "SELECT * FROM campaign WHERE approval=1";
        $data['content'] = $this->db->query($query);
        $this->load->view('home', $data);
    }

	public function contact()
	{
        $this->load->view('contact');
    }
    
	public function register()
	{
        $this->load->view('register');
    }

	public function action_register()
	{
        $this->load->model('MSign');
        $this->MSign->register();
    }
    
	public function action_login()
	{
        $this->load->model('MSign');
        $this->MSign->login();
    }
    
	public function logout()
	{
        session_unset();
        session_destroy();
        redirect('home', 'refresh');
    }

    public function dashboard()
	{
        $this->load->view('dashboard');
    }
    
    public function contribute($id="")
	{
        $this->load->model('MUser');
        $this->MUser->contribute($id);
    }

    public function add_campaign()
	{
        $this->load->model('MUser');
        $this->MUser->add_campaign();
    }    

	public function action_add_campaign()
	{
        $this->load->model('MUser');
        $this->MUser->action_add_campaign();
    }
}
<?php
ob_start();
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
        if(isset($_SESSION['login'])){
            $this->load->view('contact');
        }else{
            redirect('404_override');
        }
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
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->dashboard();
            $this->load->view('dashboard');
        }else{
            redirect('404_override');
        }
    }
    
    public function contribute($id="")
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->contribute($id);
        }else{
            redirect('404_override');
        }
    }

    public function add_campaign()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->add_campaign();
        }else{
            redirect('404_override');
        }
    }    

	public function action_add_campaign()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->action_add_campaign();
        }else{
            redirect('404_override');
        }
    }
    
	public function add_gift()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->add_gift();
        }else{
            redirect('404_override');
        }
    }
    
	public function action_add_gift()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->action_add_gift();
        }else{
            redirect('404_override');
        }
    }
    public function save_ticket_transaction()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->save_ticket_transaction();
        }else{
            redirect('404_override');
        }
    }

    public function pay()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->pay();
        }else{
            redirect('404_override');
        }
    }
    
    public function campaign()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $data['content'] = $this->MUser->campaign();
            $this->load->view('event', $data);
        }else{
            redirect('404_override');
        }
    }
    
    public function crownfunding()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $data['content'] = $this->MUser->crownfunding();
            $this->load->view('event', $data);
        }else{
            redirect('404_override');
        }
    }
}
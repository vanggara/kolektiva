<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CUser extends CI_Controller
{
	public function home()
	{
        $this->load->view('home');
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
}
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
}
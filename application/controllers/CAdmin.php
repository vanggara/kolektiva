<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CAdmin extends CI_Controller
{
	public function home()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
			$data['content'] = $this->MAdmin->home();
            $this->load->view('admin/campaign', $data);
        }else{
            redirect('404_override');
        }
    }

    public function login()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
			$data['content'] = $this->MAdmin->home();
            $this->load->view('admin/campaign', $data);
        }else{
            $this->load->view('admin/login');
        }
    }
    
	public function action_login()
	{
        $this->load->model('MAdmin');
        if($data['content'] = $this->MAdmin->login() == false){
            $this->load->view('admin/login');
        }else{
            $data['content'] = $this->MAdmin->login();
            $this->load->view('admin/campaign', $data);
        }
    }
    
	public function tambah_campaign()
	{
        if(isset($_SESSION['login'])){
            $this->load->view('admin/tambah_campaign');
        }else{
            $this->load->view('admin/login');
        }
    }
}
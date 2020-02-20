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
}
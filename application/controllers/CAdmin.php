<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CAdmin extends CI_Controller
{
	public function informasi_bootcamp()
	{
		if(!isset($_SESSION['login'])){
			redirect('login','refresh');
		}else{
			$data['content']=$this->db->get('informasi_bootcamp');
			$this->load->view('admin/informasi_bootcamp',$data);
		}
    }
    
    public function tambah_informasi_bootcamp()
	{
		if(!isset($_SESSION['login'])){
			redirect('login','refresh');
		}else{
			$this->load->view('admin/tambah_informasi_bootcamp');
		}
	}
}
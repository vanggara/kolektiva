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

	public function campaign()
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
            $this->load->model('MAdmin');
			$data['content'] = $this->MAdmin->tambah_campaign();
            $this->load->view('admin/tambah_campaign', $data);
        }else{
            $this->load->view('admin/login');
        }
    }
    
	public function action_add_campaign()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
            if($this->MAdmin->action_add_campaign()==true){
                $this->load->model('MAdmin');
                $data['content'] = $this->MAdmin->tambah_campaign();
                $this->load->view('admin/tambah_campaign', $data);
            }else{
                $this->load->model('MAdmin');
                $data['content'] = $this->MAdmin->home();
                $this->load->view('admin/campaign', $data);
            }
        }else{
            $this->load->view('admin/login');
        }
    }
    
	public function edit_campaign($id_campaign)
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
			$data['content'] = $this->MAdmin->edit_campaign($id_campaign);
			$data['content2'] = $this->MAdmin->tambah_campaign();
            $this->load->view('admin/edit_campaign', $data);
        }else{
            $this->load->view('admin/login');
        }
    }

	public function action_edit_campaign($id_campaign)
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
            if($this->MAdmin->action_edit_campaign($id_campaign)==false){
                $data['content'] = $this->MAdmin->edit_campaign($id_campaign);
                $data['content2'] = $this->MAdmin->tambah_campaign();
                $this->load->view('admin/edit_campaign', $data);
                echo "<script>alert('Failed to save!');</script>";
            }else{
                $this->load->model('MAdmin');
                $data['content'] = $this->MAdmin->home();
                $this->load->view('admin/campaign', $data);
                echo "<script>alert('Saved data success!');</script>";
            }
        }else{
            $this->load->view('admin/login');
        }
    }
    
	
	public function hapus_campaign($id_campaign)
	{
		if(isset($_SESSION['login'])){
			$this->load->model('MAdmin');
            $this->MAdmin->hapus_campaign($id_campaign);
            
            $this->load->model('MAdmin');
            $data['content'] = $this->MAdmin->home();
            $this->load->view('admin/campaign', $data);
            echo "<script>alert('Data berhasil dihapus!');</script>";
		}else{
            $this->load->view('admin/login');
		}
    }
        
	public function approve($id_campaign)
	{
		if(isset($_SESSION['login'])){
			$this->load->model('MAdmin');
            $this->MAdmin->approve($id_campaign);
            
            $this->load->model('MAdmin');
            $data['content'] = $this->MAdmin->home();
            $this->load->view('admin/campaign', $data);
            echo "<script>alert('Approve success!');</script>";
		}else{
            $this->load->view('admin/login');
		}
    }
    
	public function view_proposal($id_campaign)
	{
		if(isset($_SESSION['login'])){
			$this->load->model('MAdmin');
            $data['content'] = $this->MAdmin->view_proposal($id_campaign);
            $this->load->view('admin/view_proposal', $data);
		}else{
            $this->load->view('admin/login');
		}
    }
        
	public function gift()
	{
		if(isset($_SESSION['login'])){
			$this->load->model('MAdmin');
            $data['content'] = $this->MAdmin->gift();
            $this->load->view('admin/gift', $data);
		}else{
            $this->load->view('admin/login');
		}
    }
    
	public function tambah_gift()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
			$data['content'] = $this->MAdmin->tambah_gift();
            $this->load->view('admin/tambah_gift', $data);
        }else{
            $this->load->view('admin/login');
        }
    }
    
	public function action_add_gift()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
            if($this->MAdmin->action_add_gift()==true){
                $this->load->model('MAdmin');
                $data['content'] = $this->MAdmin->tambah_gift();
                $this->load->view('admin/tambah_gift', $data);
            }else{
                $this->load->model('MAdmin');
                $data['content'] = $this->MAdmin->tambah_gift();
                $this->load->view('admin/tambah_gift', $data);
            }
        }else{
            $this->load->view('admin/login');
        }
    }
    
	public function edit_gift($id_gift)
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
			$data['content2'] = $this->MAdmin->tambah_gift();
			$data['content'] = $this->MAdmin->edit_gift($id_gift);
            $this->load->view('admin/edit_gift', $data);
        }else{
            $this->load->view('admin/login');
        }
    }
    
	public function action_edit_gift($id_gift)
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MAdmin');
            if($this->MAdmin->action_edit_gift($id_gift)==false){
                $data['content'] = $this->MAdmin->edit_gift($id_gift);
                $data['content2'] = $this->MAdmin->tambah_gift();
                $this->load->view('admin/edit_gift', $data);
                echo "<script>alert('Failed to save!');</script>";
            }else{
                $this->load->model('MAdmin');
                $data['content'] = $this->MAdmin->gift();
                $this->load->view('admin/gift', $data);
                echo "<script>alert('Saved data success!');</script>";
            }
        }else{
            $this->load->view('admin/login');
        }
    }

	public function hapus_gift($id_gift)
	{
		if(isset($_SESSION['login'])){
			$this->load->model('MAdmin');
            $this->MAdmin->hapus_gift($id_gift);

            $data['content'] = $this->MAdmin->gift();
            $this->load->view('admin/gift', $data);
            echo "<script>alert('Data berhasil dihapus!');</script>";
		}else{
            $this->load->view('admin/login');
		}
    }

    public function transaction_ticket()
	{
		if(isset($_SESSION['login'])){
			$this->load->model('MAdmin');
            $data['content'] = $this->MAdmin->transaction_ticket();
            $this->load->view('admin/transaction_ticket', $data);
		}else{
            $this->load->view('admin/login');
		}
    }
    
    public function transaction_gift()
	{
		if(isset($_SESSION['login'])){
			$this->load->model('MAdmin');
            $data['content'] = $this->MAdmin->transaction_gift();
            $this->load->view('admin/transaction_gift', $data);
		}else{
            $this->load->view('admin/login');
		}
    }
        
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSign extends CI_Model {

    public function login($id=''){
        // session_start();
        error_reporting(0);
        // $_SESSION['login']='login';
        if(isset($_POST['login']))
            {
                $email=$_POST['email'];
                $password=md5($_POST['password']);
                
                $sql="select * from user where email = '".$email."' AND password = '".$password."'";
                $query=$this->db->query($sql);

                // echo var_dump($datas);
                $count = $this->db->count_all_results();
                if($count == 1)
                {
                    foreach ($query->result() as $row)
                    {  
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password; 
                        $_SESSION['login']='login';
                        $_SESSION['fullName'] = $row->fullName;  
                    } 
                    $data['content']=$this->db->get('user');
                    $this->load->view('home',$data);
                } 
                else{
                    echo "<script>alert('Invalid Details!');</script>";
                    redirect ('home','refresh');
                }
        }
    }

    public function register(){
        // session_start();
        error_reporting(0);
        // $_SESSION['login']='login';
        if(isset($_POST['register']))
            {
                $fullName = $_POST['fullName'];
                $email = $_POST['email'];
                $phoneHumber = $_POST['phoneNumber'];
                $password = md5($_POST['password']);
                
                $this->db->where('email', $email);
                $this->db->from('user');

                $query = $this->db->count_all_results();
                if($query == 1)
                {
                    echo "<script>alert('User already exist!');</script>";
                    redirect ('register','refresh');
                }
                else{
                    $data = array(
                            'fullName' => $this->input->post('fullName'),
                            'email' => $this->input->post('email'),
                            'phoneNumber' => $this->input->post('phoneNumber'),
                            'password' => $password,
                            'role' => 2
                        );
    
                        $this->db->insert('user', $data);
    
                        redirect('home','refresh');
                }
        }
    }
}
?>

<?php
?>
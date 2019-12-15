<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSign extends CI_Model {

    public function login($id=''){
        // session_start();
        error_reporting(0);
        // $_SESSION['login']='login';
        if(isset($_POST['login']))
            {
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                
                $this->db->where('username', $username);
                $this->db->where('password', $password);
                $this->db->from('user');

                echo var_dump($username, $password);
                $query = $this->db->count_all_results();
                if($query == 1)
                {
                    // echo "oke2";
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password; 
                    $_SESSION['login']='login';
                    redirect ('informasi-sertifikasi','refresh');
                } 
                else{
                    // echo "oke3";
                    echo "<script>alert('Invalid Details');</script>";
                    redirect ('login','refresh');
                }
        }
    }

    public function register(){
        // session_start();
        error_reporting(0);
        // $_SESSION['login']='login';
        if(isset($_POST['login']))
            {
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                
                $this->db->where('username', $username);
                $this->db->where('password', $password);
                $this->db->from('user');

                echo var_dump($username, $password);
                $query = $this->db->count_all_results();
                if($query == 1)
                {
                    // echo "oke2";
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password; 
                    $_SESSION['login']='login';
                    redirect ('informasi-sertifikasi','refresh');
                } 
                else{
                    // echo "oke3";
                    echo "<script>alert('Invalid Details');</script>";
                    redirect ('login','refresh');
                }
        }
    }
}
?>

<?php
?>
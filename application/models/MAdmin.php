<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {

    public function home(){
        $query = "SELECT * FROM campaign;";
        return $this->db->query($query);
    }

    
    public function login(){
                $email=$_POST['email'];
                $password=md5($_POST['password']);
                
                $sql="select * from user where email = '".$email."' AND password = '".$password."'";
                $query=$this->db->query($sql);

                // echo var_dump($email);
                $this->db->query($sql);
                $count = $this->db->count_all_results("user where email = '".$email."' AND password = '".$password."'");
                if($count == 1)
                {
                    foreach ($query->result() as $row)
                    {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password; 
                        $_SESSION['login']='login';
                        $_SESSION['fullName'] = $row->fullName;  
                        $_SESSION['idUser'] = $row->id;  
                        echo "<script>alert('Login success!');</script>";
                    }
                    $query = "SELECT * FROM campaign;";
                    return $this->db->query($query);
                } 
                else{
                    echo "<script>alert('Please check your password or email!');</script>";
                    return false;
                }
    }

}
?>
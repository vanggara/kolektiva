<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {

    public function home(){
        $query = "SELECT * FROM campaign;";
        return $this->db->query($query);
    }
    
    public function tambah_campaign(){
        $query = "SELECT * FROM category";
        return $this->db->query($query);
    }
    
    public function edit_campaign($id_campaign){
        $query = "SELECT * FROM campaign WHERE id = ".$id_campaign.";";
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
    
    public function action_add_campaign(){
        // error_reporting(0);
        $category = $_POST['category'];
        $eventName = $_POST['eventName'];
        $eventDate = $_POST['eventDate'];

        $image = $_FILES['imgInp']['name'];
        $imageKtp = $_FILES['imgKtp']['name'];
        $pdfProposal = $_FILES['pdfProposal']['name'];
        $instagram = $_POST['instagram'];
        $campaigner = $_POST['campaigner'];
        $dueDate = $_POST['dueDate'];
        $venue = $_POST['venue'];
        // $target = $_POST['target'];
        $detail = $_POST['detail'];
        $price = $_POST['ticket'];
        $idUser = $_SESSION['idUser'];
        
        $this->db->where('eventName', $eventName);
        $this->db->where('eventDate', $eventDate);
        $this->db->from('campaign');

        $query = $this->db->count_all_results();
        if($query == 1)
        {
            echo "<script>alert('Campaign already exist!');</script>";
            $query = "SELECT * FROM category";
            return $this->db->query($query);
        }
        else{                  
            $target_path = "assets/uploads/campaign/";    
            $target_path = $target_path . basename( $_FILES['imgInp']['name']); 
            $file_type=$_FILES['imgInp']['type'];

            $target_path_ktp = "assets/uploads/ktp/";    
            $target_path_ktp = $target_path_ktp . basename( $_FILES['imgKtp']['name']); 
            $file_type_ktp=$_FILES['imgKtp']['type'];

            $target_path_proposal = "assets/uploads/proposal/";    
            $target_path_proposal = $target_path_proposal . basename( $_FILES['pdfProposal']['name']); 
            $file_type_proposal=$_FILES['pdfProposal']['type'];

                if(move_uploaded_file($_FILES['imgInp']['tmp_name'], $target_path) &&
                    move_uploaded_file($_FILES['imgKtp']['tmp_name'], $target_path_ktp) &&
                    move_uploaded_file($_FILES['pdfProposal']['tmp_name'], $target_path_proposal)) {
                    $data = array(
                        'id_user' => $idUser,
                        'category' => $category,
                        'eventName' => $eventName,
                        'eventDate' => $eventDate,
                        'image' => $image,
                        'imageKtp' => $imageKtp,
                        'proposal' => $pdfProposal,
                        'price' => $price,
                        'instagram' => $instagram,
                        'campaigner' => $campaigner,
                        'dueDate' => $dueDate,
                        'venue' => $venue,
                        'target' => 0,
                        'detail' => $detail,
                        'percentage' => 0,
                        'approval' => 0,
                        'gift' => 1
                    );
                    $this->db->insert('campaign', $data);

                    echo "<script>alert('Saved data success!');</script>";
                    return false;
                } else{
                    echo "<script>alert('Failed to upload!');</script>";
                    $query = "SELECT * FROM category";
                    return $this->db->query($query);
                }
        }
    }
    
    public function action_edit_campaign($id_campaign){
        // error_reporting(0);
        $category = $_POST['category'];
        $eventName = $_POST['eventName'];
        $eventDate = $_POST['eventDate'];

        if(!isset($_FILES['imgInp']['name'])){
            $image = $_FILES['imgInp']['name'];
        }else{
            $image = $_POST['imgInp'];
        }
        
        if(!isset($_FILES['imgKtp']['name'])){
            $imageKtp = $_FILES['imgKtp']['name'];
        }else{
            $imageKtp = $_POST['imgKtp'];
        }
        
        if(!isset($_FILES['pdfProposal']['name'])){
            $pdfProposal = $_FILES['pdfProposal']['name'];
        }else{
            $pdfProposal = $_POST['pdfProposal'];
        }
        $instagram = $_POST['instagram'];
        $campaigner = $_POST['campaigner'];
        $dueDate = $_POST['dueDate'];
        $venue = $_POST['venue'];
        // $target = $_POST['target'];
        $detail = $_POST['detail'];
        $price = $_POST['ticket'];
        $idUser = $_SESSION['idUser'];

            $target_path = "assets/uploads/campaign/";    
            $target_path = $target_path . basename( $_FILES['imgInp']['name']); 
            $file_type=$_FILES['imgInp']['type'];

            $target_path_ktp = "assets/uploads/ktp/";    
            $target_path_ktp = $target_path_ktp . basename( $_FILES['imgKtp']['name']); 
            $file_type_ktp=$_FILES['imgKtp']['type'];

            $target_path_proposal = "assets/uploads/proposal/";    
            $target_path_proposal = $target_path_proposal . basename( $_FILES['pdfProposal']['name']); 
            $file_type_proposal=$_FILES['pdfProposal']['type'];

                if(move_uploaded_file($_FILES['imgInp']['tmp_name'], $target_path) ||
                    move_uploaded_file($_FILES['imgKtp']['tmp_name'], $target_path_ktp) ||
                    move_uploaded_file($_FILES['pdfProposal']['tmp_name'], $target_path_proposal)) {
                    $data = array(
                        'id_user' => $idUser,
                        'category' => $category,
                        'eventName' => $eventName,
                        'eventDate' => $eventDate,
                        'image' => $image,
                        'imageKtp' => $imageKtp,
                        'proposal' => $pdfProposal,
                        'price' => $price,
                        'instagram' => $instagram,
                        'campaigner' => $campaigner,
                        'dueDate' => $dueDate,
                        'venue' => $venue,
                        'target' => 0,
                        'detail' => $detail,
                        'percentage' => 0,
                        'approval' => 1,
                        'gift' => 1
                    );
                    $this->db->where('id', $id_campaign);
                    $this->db->update('campaign', $data);
                    return false;
                } else{
                    $data = array(
                        'id_user' => $idUser,
                        'category' => $category,
                        'eventName' => $eventName,
                        'eventDate' => $eventDate,
                        'image' => $image,
                        'imageKtp' => $imageKtp,
                        'proposal' => $pdfProposal,
                        'price' => $price,
                        'instagram' => $instagram,
                        'campaigner' => $campaigner,
                        'dueDate' => $dueDate,
                        'venue' => $venue,
                        'target' => 0,
                        'detail' => $detail,
                        'percentage' => 0,
                        'approval' => 1,
                        'gift' => 1
                    );
                    $this->db->where('id', $id_campaign);
                    $this->db->update('campaign', $data);
                    
                    $query = "SELECT * FROM category";
                    return $this->db->query($query);
                }
    }
    
    public function hapus_campaign($id_campaign)
	{
            $this->db->query("DELETE FROM campaign WHERE id = '".$id_campaign."'");
            return true;
    }
    
    public function approve($id_campaign)
	{
        $data = array(
            'approval' => 1
        );
        $this->db->where('id', $id_campaign);
        $this->db->update('campaign', $data);
        return true;
    }
    
    public function view_proposal($id_campaign)
	{
        return $this->db->query("SELECT * FROM campaign WHERE id = '".$id_campaign."'");
            
    }

    public function gift()
	{
        return $this->db->query("SELECT c.eventName, g.id, g.package_name, g.price, g.detail, g.gift_stock FROM gift g JOIN campaign c ON
        g.id_campaign = c.id;");
            
    }
    
    public function tambah_gift(){
        $query = "SELECT * FROM campaign";
        return $this->db->query($query);
    }
    
    public function action_add_gift(){
        // error_reporting(0);
        
        if(!isset($_FILES['imgInp']['name'])){
            $image = $_FILES['imgInp']['name'];
        }else{
            $image = $_POST['imgInp'];
        }

                $image = $_FILES['imgInp']['name'];
                $price = $_POST['price'];
                $packageName = $_POST['packageName'];
                $detail = $_POST['detail'];
                $giftStock = $_POST['giftStock'];
                $id_campaign = $_POST['id_campaign'];
                
                $this->db->where('package_name', $packageName);
                $this->db->where('id_campaign', $id_campaign);
                $this->db->from('gift');

                $query = $this->db->count_all_results();
                if($query == 1)
                {
                    return true;
                }
                else{                        
                    $target_path = "assets//uploads//gift//";    
                    $target_path = $target_path . basename( $_FILES['imgInp']['name']); 
                    
                    if(move_uploaded_file($_FILES['imgInp']['tmp_name'], $target_path)) {
                        
                        $targetDb = 0;
                        $sql = "SELECT target FROM campaign where id=".$id_campaign.";";
                        $query=$this->db->query($sql);
                        foreach ($query->result() as $row)
                        {  
                            $targetDb = $row->target;
                        }
                        $target = ($price * $giftStock) + $targetDb;
                        
                        $targets = array(
                            'target' => $target
                        );
                        $this->db->where('id', $id_campaign);
                        $this->db->update('campaign', $targets);
                    

                        $datas = array(
                            'id_campaign' => $id_campaign,
                            'image' => $image,
                            'price' => $price,
                            'package_name' => $packageName,
                            'detail' => $detail,
                            'gift_stock' => $giftStock
                        );
                        $this->db->insert('gift', $datas);
                            $this->load->model('MUser');
                            $this->MUser->add_gift_rupiahs($id_campaign);
                            return true;
                            // redirect('add-gift','refresh');
                    } else{
                        $query = "SELECT * FROM campaign;";
                        return $this->db->query($query);
                    }
                }
    }
    
    public function edit_gift($id_gift){
        $query = "SELECT * FROM gift WHERE id = ".$id_gift.";";
        return $this->db->query($query);
    }

    public function action_edit_gift($id_gift){
        // error_reporting(0);
        
        if(isset($_FILES['imgInp']['name'])){
            $image = $_POST['imgInp'];
        }else{
            $image = $_FILES['imgInp']['name'];
        }
                $price = $_POST['price'];
                $packageName = $_POST['packageName'];
                $detail = $_POST['detail'];
                $giftStock = $_POST['giftStock'];
                $id_campaign = $_POST['id_campaign'];

                    $target_path = "assets//uploads//gift//";    
                    $target_path = $target_path . basename( $_FILES['imgInp']['name']); 
                    
                    if(move_uploaded_file($_FILES['imgInp']['tmp_name'], $target_path)) {
                        
                        $targetDb = 0;
                        $sql = "SELECT target FROM campaign where id=".$id_campaign.";";
                        $query=$this->db->query($sql);
                        foreach ($query->result() as $row)
                        {  
                            $targetDb = $row->target;
                        }
                        $target = ($price * $giftStock) + $targetDb;
                        
                        $targets = array(
                            'target' => $target
                        );
                        $this->db->where('id', $id_campaign);
                        $this->db->update('campaign', $targets);
                    

                        $datas = array(
                            'id_campaign' => $id_campaign,
                            'image' => $image,
                            'price' => $price,
                            'package_name' => $packageName,
                            'detail' => $detail,
                            'gift_stock' => $giftStock
                        );
                        $this->db->where('id', $id_gift);
                        $this->db->update('gift', $datas);
                            return true;
                            // redirect('add-gift','refresh');
                    } else{
                        $targetDb = 0;
                        $sql = "SELECT target FROM campaign where id=".$id_campaign.";";
                        $query=$this->db->query($sql);
                        foreach ($query->result() as $row)
                        {  
                            $targetDb = $row->target;
                        }
                        $target = ($price * $giftStock) + $targetDb;
                        
                        $targets = array(
                            'target' => $target
                        );
                        $this->db->where('id', $id_campaign);
                        $this->db->update('campaign', $targets);
                    

                        $datas = array(
                            'id_campaign' => $id_campaign,
                            'image' => $image,
                            'price' => $price,
                            'package_name' => $packageName,
                            'detail' => $detail,
                            'gift_stock' => $giftStock
                        );
                        $this->db->where('id', $id_gift);
                        $this->db->update('gift', $datas);
                        $query = "SELECT * FROM campaign;";
                        return $this->db->query($query);
                    }
                
    }
    
    public function hapus_gift($id_gift)
	{
        $this->db->query("DELETE FROM gift WHERE id = '".$id_gift."'");
        return true;
    }
    
    public function transaction_ticket()
	{
            $query = $this->db->query("SELECT u.email, c.eventName, tc.order_id_transaction_ticket, tc.status_code_transaction_ticket ,
            tc.transaction_status_transaction_ticket FROM transaction_ticket tc JOIN campaign c ON c.id = tc.id_campaign_transaction_ticket
            JOIN user u ON tc.id_user_transaction_ticket = u.id;");
            return $query;
    }

    public function transaction_gift()
	{
            $query = $this->db->query("SELECT g.package_name, tg.order_id_transaction_gift, tg.status_code_transaction_gift, 
            tg.transaction_status_transaction_gift, u.fullName, tg.total_ticket_transaction_gift, tg.price_transaction_gift, 
            tg.total_price_transaction_gift FROM transaction_gift tg JOIN gift g ON g.id = tg.id_gift_transaction_gift
            JOIN user u ON tg.id_user_transaction_gift = u.id;");
            return $query;
    }
    
    
}
?>
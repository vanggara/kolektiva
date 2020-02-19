<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {

    public function contribute($id=""){
        $_SESSION['idCampaign'] = $id;
        $query = "SELECT * FROM campaign where id='".$id."';";
        $query2 = "SELECT gift.image, gift.price, gift.package_name, gift.detail, gift.gift_stock, gift.id, campaign.eventDate, campaign.eventName, campaign.venue from gift JOIN
        campaign ON campaign.id = gift.id_campaign 
        WHERE gift.id_campaign = '".$id."';";
        $data['content'] = $this->db->query($query);
        $data['content2'] = $this->db->query($query2);
        $this->load->view('contribute', $data);
    }

    public function event_list(){
        $query = "SELECT * FROM campaign WHERE approval=1";
        $data['content'] = $this->db->query($query);
        $this->load->view('home', $data);
    }

    public function add_campaign(){
        error_reporting(0);
        $query = "SELECT * FROM category";
        $data['content'] = $this->db->query($query);
        $this->load->view('add_campaign', $data);
    }

    public function action_add_campaign(){
        error_reporting(0);
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
            redirect ('add-campaign','refresh');
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
                    redirect('add-gift','refresh');
                } else{
                    echo "<script>alert('Failed to upload!');</script>";
                    redirect('add-campaign','refresh');
                }
        }
    }
    
    public function add_gift(){
        error_reporting(0);
        $sql = "SELECT id FROM campaign ORDER BY id DESC LIMIT 1";
        $query=$this->db->query($sql);
        foreach ($query->result() as $row)
        {  
            $_SESSION['idCampaign'] = $row->id;
        }
        $this->load->view('add_gift');
    }
        
    public function save_ticket_transaction(){
        $PecahStr = explode("-", $_GET['order_id']);
        if($PecahStr[0]=="T"){
            $this->db->where('order_id_transaction_ticket', $_GET['order_id']);
            $this->db->where('id_campaign_transaction_ticket', $_SESSION['idCampaign']);
            $this->db->where('id_user_transaction_ticket', $_SESSION['idUser']);
            $this->db->from('transaction_ticket');
    
            $query = $this->db->count_all_results();
            if($query == 1)
            {
                echo "ok2";
                echo "<script>alert('Transaksi sudah diproses!');</script>";
                redirect ('home','refresh');
            }
            else{
                $data = array(
                    'id_user_transaction_ticket' => $_SESSION['idUser'],
                    'id_campaign_transaction_ticket' => $_SESSION['idCampaign'],
                    'order_id_transaction_ticket' => $_GET['order_id'],
                    'status_code_transaction_ticket' => $_GET['status_code'],
                    'transaction_status_transaction_ticket' => $_GET['transaction_status']
                );
                $this->db->insert('transaction_ticket', $data);
                echo "<script>alert('Transaksi Berhasil!');</script>";
                redirect('home','refresh');        
            }
        }else{
            $this->db->where('order_id_transaction_gift', $_GET['order_id']);
            $this->db->where('id_gift_transaction_gift', $_SESSION['idGift']);
            $this->db->where('id_user_transaction_gift', $_SESSION['idUser']);
            $this->db->from('transaction_gift');

            $query = $this->db->count_all_results();
            if($query == 1)
            {
                echo "ok2";
                echo "<script>alert('Transaksi sudah diproses!');</script>";
                redirect ('home','refresh');
            }
            else{
                $data = array(
                    'id_user_transaction_gift' => $_SESSION['idUser'],
                    'id_campaign_transaction_gift' => $_SESSION['idCampaign'],
                    'id_gift_transaction_gift' => $_SESSION['idGift'],
                    'order_id_transaction_gift' => $_GET['order_id'],
                    'status_code_transaction_gift' => $_GET['status_code'],
                    'transaction_status_transaction_gift' => $_GET['transaction_status'],
                    'total_ticket_transaction_gift' => $_POST['quantity'],
                    'price_transaction_gift' => $_POST['price'],
                    'total_price_transaction_gift' => $_GET['gross_amount']
                );
                $this->db->insert('transaction_gift', $data);
                //update percentage
                $query=$this->db->query("SELECT * FROM campaign WHERE id=".$_SESSION['idCampaign']);
                foreach ($query->result() as $row)
                {  
                    $target = $row->target;
                }
                $percent = 0;
                $percent = (($target - $_SESSION['total_price2']) / $target) * 100;
                
                $update = array(
                    'percentage' => $percent
                );
                $this->db->where('id', $_SESSION['idCampaign']);
                $this->db->update('campaign', $update);

                //update gift stock
                $query2=$this->db->query("SELECT * FROM gift WHERE id=".$_SESSION['idGift']);
                foreach ($query2->result() as $row)
                {  
                    $target2 = $row->gift_stock;
                }
                $gift_stock = $target2 - 1;
                
                $update2 = array(
                    'gift_stock' => $gift_stock
                );
                $this->db->where('id', $_SESSION['idGift']);
                $this->db->update('gift', $update2);

                echo "<script>alert('Transaksi Berhasil!');</script>";
                redirect('home','refresh');        
            }
        }
    }
    
    public function action_add_gift(){
        error_reporting(0);
        if(isset($_POST['submit']) || isset($_POST['addGift']))
            {
                $image = $_FILES['imgInp']['name'];
                $price = $_POST['price'];
                $packageName = $_POST['packageName'];
                $detail = $_POST['detail'];
                $giftStock = $_POST['giftStock'];
                $id_campaign = $_SESSION['idCampaign'];
                
                $this->db->where('package_name', $packageName);
                $this->db->where('id_campaign', $id_campaign);
                $this->db->from('gift');

                $query = $this->db->count_all_results();
                if($query == 1)
                {
                    echo "ok2";
                    echo "<script>alert('Gift already exist!');</script>";
                    redirect ('add-gift','refresh');
                }
                else{                        
                    $target_path = "assets//uploads//gift//";    
                    $target_path = $target_path . basename( $_FILES['imgInp']['name']); 
                    
                    if(move_uploaded_file($_FILES['imgInp']['tmp_name'], $target_path)) {
                        
                        $targetDb = 0;
                        $sql = "SELECT target FROM campaign where id=".$_SESSION['idCampaign'].";";
                        $query=$this->db->query($sql);
                        foreach ($query->result() as $row)
                        {  
                            $targetDb = $row->target;
                        }
                        $target = ($price * $giftStock) + $targetDb;
                        
                        $targets = array(
                            'target' => $target
                        );
                        $this->db->where('id', $_SESSION['idCampaign']);
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
                        
                        echo "<script>alert('Saved data success!');</script>";

                        if(isset($_POST['addGift'])){
                            $this->load->model('MUser');
                            $this->MUser->add_gift_rupiahs($id_campaign);
                            redirect('add-gift','refresh');
                        }else{
                            $this->load->model('MUser');
                            $this->MUser->add_gift_rupiahs($id_campaign);
                            redirect('home','refresh');
                        }
                    } else{
                        echo "<script>alert('Failed to save data!');</script>";
                        redirect('add-gift','refresh');
                    }
                }
        }
    }

    public function add_gift_rupiahs($id_campaign){
        $this->db->where('package_name', 'No Package');
        $this->db->where('id_campaign', $id_campaign);
        $this->db->from('gift');

        $query = $this->db->count_all_results();
        if($query != 1)
        {
            $datas = array(
                'id_campaign' => $id_campaign,
                'image' => 'keripik_kentang.jpg',
                'price' => '0',
                'package_name' => 'No Package',
                'detail' => 'Enter the rupiahs as you want',
                'gift_stock' => '100'
            );
            $this->db->insert('gift', $datas);
            
        }
    }

    public function dashboard(){
        error_reporting(0);
        $query = "SELECT * FROM campaign WHERE approval=1 AND id_user=".$_SESSION['idUser'].";";
        $data['campaign'] = $this->db->query($query);
        
        $query2 = "SELECT * FROM campaign JOIN transaction_ticket ON 
        campaign.id = transaction_ticket.id_campaign_transaction_ticket WHERE 
        transaction_ticket.id_user_transaction_ticket=".$_SESSION['idUser'].";";
        $data['ticket'] = $this->db->query($query2);
        
        $query3 = "SELECT * FROM campaign JOIN transaction_gift ON 
        campaign.id = transaction_gift.id_campaign_transaction_gift WHERE 
        transaction_gift.id_user_transaction_gift=".$_SESSION['idUser'].";";
        $data['gift'] = $this->db->query($query3);

        $this->load->view('dashboard', $data);
    }
    
    public function pay(){
        
        error_reporting(0);
        $data = array(
            'status_code_transaction_gift' => $_POST['status_code'],
            'transaction_status_transaction_gift' => $_POST['transaction_status'],
        );
        $this->db->where('order_id_transaction_gift', $_POST['order_id']);
        $this->db->update('transaction_gift', $data);
        redirect('http://kolektiva1.000webhostapp.com/handle_notification.php');
    }
}
?>

<?php
?>
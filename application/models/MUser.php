<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {

    public function contribute($id=""){
        error_reporting(0);
        $query = "SELECT * FROM campaign where id='".$id."';";
        $data['content'] = $this->db->query($query);
        $this->load->view('contribute', $data);
    }

    public function event_list(){
        error_reporting(0);
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
        if(isset($_POST['submit']) || isset($_POST['addGift']))
            {
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
                $target = $_POST['target'];
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
                    $target_path = "assets//uploads//campaign//";    
                    $target_path = $target_path . basename( $_FILES['imgInp']['name']); 
                    $file_type=$_FILES['pdfProposal']['type'];

                    $target_path_ktp = "assets//uploads//ktp//";    
                    $target_path_ktp = $target_path_ktp . basename( $_FILES['imgKtp']['name']); 
                    $file_type_ktp=$_FILES['pdfProposal']['type'];

                    $target_path_proposal = "assets//uploads//proposal//";    
                    $target_path_proposal = $target_path_proposal . basename( $_FILES['pdfProposal']['name']); 
                    $file_type_proposal=$_FILES['pdfProposal']['type'];

                    if ($file_type_proposal=="application/pdf" || $file_type_ktp=="image/jpeg/png" || $file_type=="image/jpeg/png") {
                        if(move_uploaded_file($_FILES['imgInp']['tmp_name'], $target_path) &&
                        move_uploaded_file($_FILES['imgKtp']['tmp_name'], $target_path_ktp) &&
                        move_uploaded_file($_FILES['pdfProposal']['tmp_name'], $target_path_proposal)) {                           
                            if(isset($_POST['addGift'])){
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
                                    'target' => $target,
                                    'detail' => $detail,
                                    'approval' => 0,
                                    'gift' => 1
                                );
                                $this->db->insert('campaign', $data);

                                echo "<script>alert('Saved data success!');</script>";
                                redirect('add-gift','refresh');
                            }else{
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
                                    'target' => $target,
                                    'detail' => $detail,
                                    'approval' => 0,
                                    'gift' => 0
                                );
                                $this->db->insert('campaign', $data);
    
                                echo "<script>alert('Saved data success!');</script>";
                                redirect('home','refresh');
                            }
                        } else{
                            echo "<script>alert('Failed to upload!');</script>";
                            redirect('add-campaign','refresh');
                        }
                    }else{
                        echo "<script>alert('You may only upload PDFs, PNGs or JPEGs files!');</script>";
                        redirect('add-campaign','refresh');
                    }
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
                            redirect('add-gift','refresh');
                        }else{
                            redirect('home','refresh');
                        }
                    } else{
                        echo "<script>alert('Failed to save data!');</script>";
                        redirect('add-gift','refresh');
                    }
                }
        }
    }
}
?>

<?php
?>
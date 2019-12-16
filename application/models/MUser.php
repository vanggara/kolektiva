<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {

    
    public function add_campaign(){
        // session_start();
        error_reporting(0);
        $query = "SELECT * FROM category";
        $data['content'] = $this->db->query($query);
        $this->load->view('add_campaign', $data);
    }

    public function action_add_campaign(){
        // session_start();
        error_reporting(0);
        // $_SESSION['login']='login';
        if(isset($_POST['submit']))
            {
                $category = $_POST['category'];
                $eventName = $_POST['eventName'];
                $eventDate = $_POST['eventDate'];

                $image = $_FILES['imgInp']['name'];
                $instagram = $_POST['instagram'];
                $campaigner = $_POST['campaigner'];
                $dueDate = $_POST['dueDate'];
                $venue = $_POST['venue'];
                $target = $_POST['target'];
                $detail = $_POST['detail'];
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
                    $data = array(
                            'id_user' => $idUser,
                            'category' => $category,
                            'eventName' => $eventName,
                            'eventDate' => $eventDate,
                            'image' => $image,
                            'instagram' => $instagram,
                            'campaigner' => $campaigner,
                            'dueDate' => $dueDate,
                            'venue' => $venue,
                            'target' => $target,
                            'detail' => $detail,
                            'approval' => 0
                        );

                        $this->db->insert('campaign', $data);
                        
                        $target_path = "assets//uploads//";    
                        $target_path = $target_path . basename( $_FILES['imgInp']['name']); 
                    
                        if(move_uploaded_file($_FILES['imgInp']['tmp_name'], $target_path)) {
                            echo "<script>alert('Saved data success!');</script>";
                        } else{
                            echo "<script>alert('Failed to data success!');</script>";
                        }

                        redirect('home','refresh');
                }
        }
    }
}
?>

<?php
?>
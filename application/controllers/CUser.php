<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class CUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-MLjIjEnWi4KYmrC0HKtNfYeR', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }
    
	public function home()
	{
            $query = "SELECT * FROM campaign WHERE approval=1";
            $data['content'] = $this->db->query($query);
            $this->load->view('home', $data);
    }

	public function contact()
	{
        // if(isset($_SESSION['login'])){
            $this->load->view('contact');
        // }else{
        //     redirect('404_override');
        // }
    }
    
	public function register()
	{
            $this->load->view('register');
    }

	public function action_register()
	{
            $this->load->model('MSign');
            $this->MSign->register();
    }
    
	public function action_login()
	{
        $this->load->model('MSign');
        $this->MSign->login();
    }
    
	public function logout()
	{
        session_unset();
        session_destroy();
        redirect('home', 'refresh');
    }

    public function dashboard()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->dashboard();
            $this->load->view('dashboard');
        }else{
            redirect('404_override');
        }
    }
    
    public function contribute($id)
	{
        // if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->contribute($id);
        // }else{
        //     redirect('404_override');
        // }
    }
    
    public function contribute2($id)
	{
        // if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->contribute2($id);
        // }else{
        //     redirect('404_override');
        // }
    }

    public function add_campaign()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->add_campaign();
        }else{
            redirect('404_override');
        }
    }    

	public function action_add_campaign()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->action_add_campaign();
        }else{
            redirect('404_override');
        }
    }
    
	public function add_gift()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->add_gift();
        }else{
            redirect('404_override');
        }
    }
    
	public function action_add_gift()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->action_add_gift();
        }else{
            redirect('404_override');
        }
    }
    public function save_ticket_transaction()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->save_ticket_transaction();
        }else{
            redirect('404_override');
        }
    }
    
    public function save_ticket_transaction2()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->save_ticket_transaction2();
        }else{
            redirect('404_override');
        }
    }

    public function pay()
	{
        if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $this->MUser->pay();
        }else{
            redirect('404_override');
        }
    }
    
    public function campaign()
	{
        // if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $data['content'] = $this->MUser->campaign();
            $this->load->view('event2', $data);
        // }else{
        //     redirect('404_override');
        // }
    }
    
    public function crownfunding()
	{
        // if(isset($_SESSION['login'])){
            $this->load->model('MUser');
            $data['content'] = $this->MUser->crownfunding();
            $this->load->view('event', $data);
        // }else{
        //     redirect('404_override');
        // }
    }

    public function token2()
    {
        if(empty($_POST['id_gift3'])){
            $id = "T1";
        }else{
            $id = $_SESSION['idCampaign'];
        }
        $name = str_replace('Harap Jawab', '', $_POST['name3']);
		// Required
		$transaction_details = array(
		  'order_id' => $_POST['order_id3'],
		  'gross_amount' => $_POST['gross_amount3'], // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
            'id' =>$id,
            'price' => $_POST['price3'],
            'quantity' => $_POST['quantity3'],
            'name' => $name
		);

		// Optional
		// $item2_details = array(
		//   'id' => 'a2',
		//   'price' => 20000,
		//   'quantity' => 2,
		//   'name' => "Orange"
		// );

		// Optional
		$item_details = array ($item1_details);

		// Optional
		$billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $_POST['first_name3'],
		//   'last_name'     => "Litani",
		  'email'         => $_POST['emailRsvp3']
		//   'phone'         => "081122334455",
		//   'billing_address'  => $billing_address,
		//   'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card
            // 'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }
    
    public function token()
    {
        if(empty($_POST['id_gift'])){
            $id = "T1";
        }else{
            $id = $_SESSION['idCampaign'];
        }
        
        $PecahStr = explode(" ", $_POST['name']);
        if($PecahStr[2]=='Jawab'){
            $name = str_replace('Harap Jawab', '', $_POST['name']);
        }else if($PecahStr[2]=='Dijawab'){
            $name = str_replace('Harap Dijawab', '', $_POST['name']);
        }
		// Required
		$transaction_details = array(
		  'order_id' => $_POST['order_id'],
		  'gross_amount' => $_POST['gross_amount'], // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
            'id' =>$id,
            'price' => $_POST['price2'],
            'quantity' => $_POST['quantity'],
            'name' => $name
		);

		// Optional
		// $item2_details = array(
		//   'id' => 'a2',
		//   'price' => 20000,
		//   'quantity' => 2,
		//   'name' => "Orange"
		// );

		// Optional
		$item_details = array ($item1_details);

		// Optional
		$billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => $_POST['first_name'],
		//   'last_name'     => "Litani",
		  'email'         => $_POST['emailRsvp2']
		//   'phone'         => "081122334455",
		//   'billing_address'  => $billing_address,
		//   'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card
            // 'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }
}
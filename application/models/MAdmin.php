<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {

    public function home(){
        $query = "SELECT * FROM campaign;";
        return $this->db->query($query);
    }
}
?>
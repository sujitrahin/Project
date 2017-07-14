<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model{

    public function get_product_list(){
        $result = $this->db->get('product')->result_array();
        return $result;
    }

    public function get_product_details($product_id){
        $result = $this->db->select('*')
        ->where('product_id',$product_id)
        ->from('product')
        ->get()
        ->result_array();
        // echo print_r($result);
		// exit();
        return $result;
    }

}

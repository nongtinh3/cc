<?php
 
class Capcha_model extends CI_Model{
 function __construct()
 {
	 parent::__construct();
 }
 
function getSubscriber($id){
    $this->db->where('id',$id);
    $this->db->limit(1);
    $Q = $this->db->getwhere('subscribers');
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
    }
 
    $Q->free_result();
    return $data;
 }
 
 function getAllSubscribers(){
     $data = array();
     $Q = $this->db->get('subscribers');
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
         $data[] = $row;
       }
    }
    $Q->free_result();
    return $data;
 }
 
 function createSubscriber(){
    $this->db->where('email', $_POST['txtemail']);
    $this->db->from('subscribers');
    $ct = $this->db->count_all_results();
 
    if ($ct == 0){
        $data = array(
            'name' => $_POST['txtemail'],
            'email' => $_POST['txtpass']
        );
 
        $this->db->insert('subscribers', $data);
    }
 }
 
 function updateSubscriber(){
    $data = array(
        'name' => $_POST['txtemail'],
        'email' => $_POST['txtpass']
 
    );
 
    $this->db->where('id', $_POST['id']);
    $this->db->update('subscribers', $data); 
 
 }
 
 function removeSubscriber($id){
    $this->db->where('id', $id);
    $this->db->delete('subscribers');
 
 }
 
}//end class
?>
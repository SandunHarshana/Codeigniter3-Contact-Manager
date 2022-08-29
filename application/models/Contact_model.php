<?php
class Contact_model extends CI_Model {
    function __construct()
    {
        //parent::__construct();
        $this->load->library('session');
    }

    public function addContact($formData){
    	$this->db->insert('contact', $formData);
      $insertId = $this->db->insert_id();
      return  $insertId;
    }

    public function updateContact($formData, $contact_id){
    	$this->db->set($formData);
      $this->db->where('contact_id',$contact_id);
      $update = $this->db->update('contact');
    }

    public function deleteContact($contact_id){
      $this->db->where('contact_id', $contact_id);
      $this->db->delete('contact');
    }

    public function getContacts($filterData = array()){
        $sql = "SELECT * ";
        $sql .= " FROM Contact ";
        if ($filterData['filter_firstname']) {
          $sql .= " WHERE firstname LIKE '%".$filterData['filter_firstname']."%'";
        }
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getContactById($contact_id){
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('contact_id', $contact_id);
        $query=$this->db->get();
        return $query->row();
    }

}

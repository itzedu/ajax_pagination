<?php
class Lead extends CI_Model{
  public function all_leads() 
  {
    $query = "SELECT * FROM leads";
    return $this->db->query($query)->result_array();
  }

  public function get_leads($info)
  {
    if(!empty($info["name"]))
    {
      $query = "SELECT * FROM leads WHERE first_name LIKE ?";
      $value = array("%".$info["name"]."%");
      return $this->db->query($query, $value)->result_array();  
    }
    else 
    {
      $query = "SELECT * FROM leads WHERE created_at between ? and ? ORDER BY created_at ASC";
      $values = array($info["from"], $info["to"]);
      return $this->db->query($query, $values)->result_array();
    }
  }


  // public function get_leads_by_date($dates) 
  // {
  //   $query = "SELECT * FROM leads WHERE created_at between ? and ? ORDER BY created_at ASC";
  //   $values = array($dates["from"], $dates["to"]);
  //   return $this->db->query($query, $value)->result_array();
  // }
}
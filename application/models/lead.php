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
      $query = "SELECT * FROM leads WHERE first_name LIKE ? LIMIT ?, 10";
      $value = array("%".$info["name"]."%", (intval($info["page_number"])-1)*10);
      return $this->db->query($query, $value)->result_array();
    }
    if(!empty($info["page_number"]) && !empty($info["name"]))
    {
      $query = "SELECT * FROM leads WHERE first_name LIKE ? LIMIT ?, 10";
      $values = array("%".$info["name"]."%", (intval($info["page_number"])-1)*10);
      return $this->db->query($query, $values)->result_array();
    }
    if(!empty($info["page_number"]) && !empty($info["from"]))
    {
      $query = "SELECT * FROM leads WHERE created_at between ? and ? ORDER BY created_at ASC LIMIT ?, 10";
      $values = array($info["from"], $info["to"], (intval($info["page_number"])-1)*10);
      return $this->db->query($query, $values)->result_array();
    }
  }

  public function leads_count($info)
  {
    if(!empty($info["name"]))
    {
      $query = "SELECT * FROM leads WHERE first_name LIKE ?";
      $value = array("%".$info["name"]."%");
      return $this->db->query($query, $value)->result_array();
    }
    else
    {
      $query = "SELECT * FROM leads WHERE created_at between ? and ? ORDER BY created_at";
      $values = array($info["from"], $info["to"]);
      return $this->db->query($query, $values)->result_array();
    }
  }
}
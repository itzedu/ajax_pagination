<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leads extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Lead');
  }

	public function index()
	{
    $data["leads"] = $this->Lead->all_leads();
    $data["total"] = count($this->Lead->all_leads());
		$this->load->view('leads', $data);
	}

  public function get_leads() {
    $info = $this->input->post();
    if(empty($info["page_number"]))
    {
      $data["leads"] = $this->Lead->leads_count($info);
      $data["total"] = count($this->Lead->leads_count($info));

    }
    if(empty($info["page_number"]) && !empty($info["name"]))
    {
      $data["leads"] = $this->Lead->leads_count($info);
      $data["total"] = count($this->Lead->leads_count($info));
    }
    if(!empty($info["page_number"]) && !empty($info["name"]))
    {
      $data["leads"] = $this->Lead->get_leads($info);
      $data["total"] = count($this->Lead->leads_count($info));
    }
    if(!empty($info["page_number"]) && !empty($info["from"]))
    {
      $data["leads"] = $this->Lead->get_leads($info);
      $data["total"] = count($this->Lead->leads_count($info));
    }
    $this->load->view("/partials/table", $data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
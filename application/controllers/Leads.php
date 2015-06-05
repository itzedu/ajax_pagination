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
		$this->load->view('leads', $data);
	}

  public function get_leads() {
    $info = $this->input->post();
    $data["leads"] = $this->Lead->get_leads($info);
    $this->load->view("/partials/table", $data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
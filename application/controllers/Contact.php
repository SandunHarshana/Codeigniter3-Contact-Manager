<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		// Initialization of class
    parent::__construct();
    //load models
    $this->load->model('Contact_model');
    // load form_validation library
    $this->load->library('form_validation');

	}

	public function index()
	{
		$this->getList();
	}

	public function advance()
	{
		$this->getAdvanceList();
	}

	public function add()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('firstname','First Name','required');
      $this->form_validation->set_rules('lastname','Last Name','required');
      $this->form_validation->set_rules('mobile','Mobile','required');
			$this->form_validation->set_rules('email','Email','valid_email');
			if ($this->form_validation->run() == TRUE){
				$formData = array(
      		'firstname' => $this->input->post("firstname"),
      		'lastname' => $this->input->post("lastname"),
          'mobile' => $this->input->post("mobile"),
          'email' => $this->input->post("email"),
          'post_code' => $this->input->post("post_code"),
					'date_added' => date("Y-m-d h:i:s"),
		    );
		 	  $this->Contact_model->addContact($formData);
				$this->session->set_flashdata('success',"Successfully inserted contact!");
				redirect('contact');
			}
		}
		$this->getForm();
  }

  public function update()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->form_validation->set_rules('firstname','First Name','required');
      $this->form_validation->set_rules('lastname','Last Name','required');
      $this->form_validation->set_rules('mobile','Mobile','required');
			$this->form_validation->set_rules('email','Email','valid_email');
			if ($this->form_validation->run() == TRUE){
					$formData = array(
						'firstname' => $this->input->post("firstname"),
	      		'lastname' => $this->input->post("lastname"),
	          'mobile' => $this->input->post("mobile"),
	          'email' => $this->input->post("email"),
	          'post_code' => $this->input->post("post_code")
          );
		 	  $this->Contact_model->updateContact($formData,$this->input->get('contact_id'));
				$this->session->set_flashdata('success',"Successfully updated contact !");
				redirect('contact');
			}
		}
		$this->getUpdateForm();
	}

	public function delete()
	{
		$this->Contact_model->deleteContact($this->input->get('contact_id'));
		$this->session->set_flashdata('success',"Successfully deleted contact !");
		$this->getList();
	}

	public function getForm()
	{
		$this->load->view('common/header');
		$this->load->view('contact/contact_form');
		$this->load->view('common/footer');
  }

  public function getUpdateForm()
	{
    $data['contact_details'] = $this->Contact_model->getContactById($this->input->get('contact_id'));
		$this->load->view('common/header');
		$this->load->view('contact/contact_update_form',$data);
		$this->load->view('common/footer');
	}

	public function getList()
	{
		$filterData = array(
			'filter_firstname' => $this->input->get('filter_firstname'),
		);
		$data['contacts'] = $this->Contact_model->getContacts($filterData);
		$data['filter_firstname'] = $this->input->get('filter_firstname');
		$this->load->view('common/header');
		$this->load->view('contact/contact_list',$data);
		$this->load->view('common/footer');
	}

	public function getAdvanceList()
	{
		$filterData = array(
			'filter_firstname' => $this->input->get('filter_firstname'),
		);
		$data['contacts'] = $this->Contact_model->getContacts($filterData);
		$data['filter_firstname'] = $this->input->get('filter_firstname');
		$this->load->view('common/header');
		$this->load->view('contact/contact_list_advance',$data);
		$this->load->view('common/footer');
	}


	public function autocomplete()
	{
		$filterData = array(
			'filter_firstname' => $this->input->get('filter_firstname'),
		);
		$contacts = $this->Contact_model->getContacts($filterData);
		echo (json_encode($contacts));
	}

}

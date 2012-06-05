<?php
class Search extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('search_view');
	}

	function validate() {
		$this->load->library('form_validation');
		$this->load->model('search_model');
		// Make sure that the page is not loaded without having any search query
		if($this->input->post('lookup')) {
			$this->form_validation->set_rules('lookup','Search','trim|required');
			if($this->form_validation->run() == FALSE){
				// Validation fails, so display the default view
				$this->load->view('search_view');
			} else {
				// Validates successfully
				$lookup_text = $this->input->post('lookup');
				$data['lookup_results'] = $this->search_model->search_results($lookup_text);
				$data['searched'] = TRUE;
				$this->load->view('search_view', $data);
			}
		} else {
			// The lookup variable has not been set
			$this->load->view('search_view');
		}
	}
}
?>
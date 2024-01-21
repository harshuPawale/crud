<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['student_detils'] = $this->task_model->getAllStuddetails();

		$this->load->view('templates/navbar');
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer');
	}

	public function studentDetail(){

		echo 'hey';
		// $this->form_validation->set_rules('name','Student Name', 'trim|required');
		// $this->form_validation->set_rules('collage_name','Collage Name', 'trim|required');
		// $this->form_validation->set_rules('email','Email ', 'trim|required');
		// $this->form_validation->set_rules('password','Password', 'trim|required');
		// $this->form_validation->set_rules('phone_num','Student Phone_num', 'trim|required');
		// $this->form_validation->set_rules('adress','Student Address', 'trim|required');
		// $this->form_validation->set_rules('radiogroup1','Student gender', 'trim|required');

	// 	if($this->form_validation->run() == false)
	// 	{
	// 		$data_error = [
	// 			'error' => validation_errors()
	// 		];

	// 		$this->session->set_flashdata($data_error);
	// 	}

	// 	redirect('Welcome');

	// }
	}
}
?>
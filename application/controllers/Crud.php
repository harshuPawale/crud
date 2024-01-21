<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
		$data['student_detils'] = $this->task_model->getAllStuddetails();

		$this->load->view('templates/navbar');
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer');
       
	}

    // insert data

	public function studentDetail(){

	
		$this->form_validation->set_rules('name','Student Name', 'trim|required');
		$this->form_validation->set_rules('collage_name','Collage Name', 'trim|required');
		$this->form_validation->set_rules('email','Email ', 'trim|required');
		$this->form_validation->set_rules('password','Password', 'trim|required');
		$this->form_validation->set_rules('phone_num','Student Phone_num', 'trim|required');
		$this->form_validation->set_rules('adress','Student Address', 'trim|required');
		$this->form_validation->set_rules('radiogroup1','Student gender', 'trim|required');

		if($this->form_validation->run() == false)
		{
			$data_error = [
				'error' => validation_errors()
			];

			$this->session->set_flashdata($data_error);
		}
        else{
        $result = $this->task_model->insertStuddet([
        'student_name' => $this->input->post('name'),
        'collage_name' => $this->input->post('collage_name'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'phone_num' => $this->input->post('phone_num'),
        'address' => $this->input->post('adress'),
        'gender' => $this->input->post('radiogroup1')

    ]);
    if($result){
        $this->session->set_flashdata('inserted' , 'you data has been sucessfully add');
        $data['student_detils'] = $this->task_model->getAllStuddetails();
        $this->load->view('student_detilview.php',$data);
    }
}
		// redirect('Crud');

	}
    // public function studentDdetilview(){
    //     $data['student_detils'] = $this->task_model->getAllStuddetails();
    //     $this->load->view('student_detilview.php');
        
    // }

    // edit function for student details

    public function editstudDetail($stud_id){
        // echo $stud_id;
        $data['studDetails'] = $this->task_model->getstudDetails($stud_id);
        $this->load->view('student_detiledit.php' , $data);
    }

// update the data
    public function studDetailupdate($stud_id){
        // echo $stud_id;

        $this->form_validation->set_rules('name','Student Name', 'trim|required');
		$this->form_validation->set_rules('collage_name','Collage Name', 'trim|required');
		$this->form_validation->set_rules('email','Email ', 'trim|required');
		$this->form_validation->set_rules('phone_num','Student Phone_num', 'trim|required');
		$this->form_validation->set_rules('adress','Student Address', 'trim|required');
		$this->form_validation->set_rules('radiogroup1','Student gender', 'trim|required');

		if($this->form_validation->run() == false)
		{
			$data_error = [
				'error' => validation_error()
			];

			$this->session->set_flashdata($data_error);
		}
        else{
        $result = $this->task_model->updateStuddet([
        'student_name' => $this->input->post('name'),
        'collage_name' => $this->input->post('collage_name'),
        'email' => $this->input->post('email'),
        'phone_num' => $this->input->post('phone_num'),
        'address' => $this->input->post('adress'),
        'gender' => $this->input->post('radiogroup1')

    ], $stud_id);
    if($result){
        $this->session->set_flashdata('updated');
        $data['student_detils'] = $this->task_model->getAllStuddetails();
        $this->load->view('student_detilview.php',$data);
    }
}
		// redirect('Crud');
    }

    // delet student data

    public function deletstudDetail($stud_id){
        // echo $stud_id;
       $result = $this->task_model->deletSdetail($stud_id);

       if($result == true){
        $this->session->set_flashdata('deleted', 'the student data has been deleted');
        $data['student_detils'] = $this->task_model->getAllStuddetails();
        $this->load->view('student_detilview.php',$data);
       }

    //    redirect('crud');
    }
}
?>
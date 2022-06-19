<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller{


	public function index(){

		$this->load->model('PatientModel');
		$this->load->library('pagination');
		$config['base_url'] = base_url('patient/index');
		$config['per_page'] = 10;
		$config['total_rows'] = $this->PatientModel->getTotalRows();
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';



		$this->pagination->initialize($config);

		$data = array();

		$data['patients'] = $this->PatientModel->fetch_all($config['per_page'], $this->uri->segment(3));
		$data['links'] = $this->pagination->create_links();
		$this->load->view("Patient/index",$data);

	}


	public function create(){

		$this->load->model("PatientModel");
		$this->form_validation->set_rules('p_id_proof','ID Proof','required');
		// $this->form_validation->set_rules('p_id_no','ID No','required');
		$this->form_validation->set_rules('p_name','Name','required');
		$this->form_validation->set_rules('p_gender','Gender','required');
		$this->form_validation->set_rules('p_age','Age','required');
		$this->form_validation->set_rules('p_mobile','Mobile','required|max_length[10]');
		$this->form_validation->set_rules('p_address','Address','required');
		$this->form_validation->set_rules('p_zip','Zip Code','required|max_length[6]');
		$this->form_validation->set_rules('p_height','Height','required');
		$this->form_validation->set_rules('p_weight','Weight','required');
		// $this->form_validation->set_rules('p_bp','BP','required');
		// $this->form_validation->set_rules('p_pulse','Pulse','required');
		// $this->form_validation->set_rules('p_spo','SPO2','required');
		$this->form_validation->set_rules('p_source','Source','required');
		$this->form_validation->set_rules('p_check_list[]','Check List','required');
		
		if ($this->form_validation->run() == false){

			$this->load->view("Patient/create");

		}else{

			$data = array();
			$data['p_sl_no'] 	= $this->input->post('p_sl_no');
			$data['p_date'] 	= $this->input->post('p_date');
			$data['p_time'] 	= $this->input->post('p_time');
			$data['p_id_proof'] = $this->input->post('p_id_proof');
			$data['p_id_no'] 	= $this->input->post('p_id_no');
			$data['p_name'] 	= $this->input->post('p_name');
			$data['p_gender'] 	= $this->input->post('p_gender');
			$data['p_age'] 		= $this->input->post('p_age');
			$data['p_mobile'] 	= $this->input->post('p_mobile');
			$data['p_email'] 	= $this->input->post('p_email');
			$data['p_address'] 	= $this->input->post('p_address');
			$data['p_city'] 	= $this->input->post('p_city');
			$data['p_zip'] 		= $this->input->post('p_zip');
			$data['p_height'] 	= $this->input->post('p_height');
			$data['p_weight'] 	= $this->input->post('p_weight');
			$data['p_bmi'] 		= $this->input->post('p_bmi');
			$data['p_bp'] 		= $this->input->post('p_bp');
			$data['p_pulse'] 	= $this->input->post('p_pulse');
			$data['p_spo'] 		= $this->input->post('p_spo');
			$data['p_check_list'] = implode(",",$this->input->post('p_check_list'));
			$data['p_source'] 	= $this->input->post('p_source');

			
			$this->PatientModel->create($data);
			$this->session->set_flashdata('success','Patient has been added successfully!');
			redirect(base_url().'patient/index');
			
		}	
	}

	public function edit($id){

		$this->load->model('PatientModel');
		$patient = $this->PatientModel->getPatient($id);
		$data = array();
		$data['patient'] = $patient;

		$this->form_validation->set_rules('p_id_proof','ID Proof','required');
		// $this->form_validation->set_rules('p_id_no','ID No','required');
		$this->form_validation->set_rules('p_name','Name','required');
		$this->form_validation->set_rules('p_gender','Gender','required');
		$this->form_validation->set_rules('p_age','Age','required');
		$this->form_validation->set_rules('p_mobile','Mobile','required|max_length[10]');
		$this->form_validation->set_rules('p_address','Address','required');
		$this->form_validation->set_rules('p_zip','Zip Code','required|max_length[6]');
		$this->form_validation->set_rules('p_height','Height','required');
		$this->form_validation->set_rules('p_weight','Weight','required');
		// $this->form_validation->set_rules('p_bp','BP','required');
		// $this->form_validation->set_rules('p_pulse','Pulse','required');
		// $this->form_validation->set_rules('p_spo','SPO2','required');
		$this->form_validation->set_rules('p_check_list[]','Check List','required');
		$this->form_validation->set_rules('p_source','Source','required');



		if ($this->form_validation->run() == false){

			$this->load->view("patient/edit",$data);

		}else{

			$data = array();
			$data['p_sl_no'] 	= $this->input->post('p_sl_no');
			$data['p_date'] 	= $this->input->post('p_date');
			$data['p_time'] 	= $this->input->post('p_time');
			$data['p_id_proof'] = $this->input->post('p_id_proof');
			$data['p_id_no'] 	= $this->input->post('p_id_no');
			$data['p_name'] 	= $this->input->post('p_name');
			$data['p_gender'] 	= $this->input->post('p_gender');
			$data['p_age'] 		= $this->input->post('p_age');
			$data['p_mobile'] 	= $this->input->post('p_mobile');
			$data['p_email'] 	= $this->input->post('p_email');
			$data['p_address'] 	= $this->input->post('p_address');
			$data['p_city'] 	= $this->input->post('p_city');
			$data['p_zip'] 		= $this->input->post('p_zip');
			$data['p_height'] 	= $this->input->post('p_height');
			$data['p_weight'] 	= $this->input->post('p_weight');
			$data['p_bmi'] 		= $this->input->post('p_bmi');
			$data['p_bp'] 		= $this->input->post('p_bp');
			$data['p_pulse'] 	= $this->input->post('p_pulse');
			$data['p_spo'] 		= $this->input->post('p_spo');
			$data['p_check_list'] = implode(",",$this->input->post('p_check_list'));
			$data['p_source'] 	= $this->input->post('p_source');
			$data['p_status'] 	= $this->input->post('p_status');

			
			$this->PatientModel->update($data,$id);
			$this->session->set_flashdata('success','Patient has been updated successfully!');
			redirect(base_url().'patient/index');
		}
		
	}

	public function view($id){

		$this->load->model('PatientModel');
		$patient = $this->PatientModel->getPatient($id);
		$data = array();
		$data['patient'] = $patient;
		$this->load->view('patient/view',$data);

	}

	public function downloadPDF($id){

		$this->load->library('pdf');
		$this->load->model('PatientModel');
		$patient = $this->PatientModel->getPatient($id);
		$data = array();
		$data['patient'] = $patient;
		$p_name = $patient['p_name'];
		$html = $this->load->view('patient/download',$data,true);
		$this->pdf->createPDF($html,$p_name,true);

	}


}

?>
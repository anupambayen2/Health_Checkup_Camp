<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class PatientModel extends CI_Model
{


	public function fetch_all($limit,$offset){

		$this->db->order_by("id","desc");
		$this->db->limit($limit,$offset);
		$result = $this->db->get('patient')->result_array();

		return $result;
	}


	public function list(){

		$query = $this->db->select(['id','p_sl_no','p_date','p_time','p_id_proof','p_id_no','p_name','p_gender','p_age','p_mobile','p_email','p_address','p_city','p_zip','p_height','p_weight','p_bmi','p_bp','p_pulse','p_spo','p_check_list','p_source','p_status'])
				->from('patient')
				->get();

		return $query->result();

	}

	public function getPatient($id){

		$this->db->where('id',$id);
		$result = $this->db->get('patient')->row_array();
		return $result;

	}
	
	public function create($data){

		$this->db->insert('patient',$data);
	}

	public function update($data,$id){

		$this->db->where('id',$id);
		$this->db->update('patient',$data);
	}


	public function getTotalRows(){

		$query = $this->db->get('patient');

		return $query->num_rows();

	}



}

 ?>
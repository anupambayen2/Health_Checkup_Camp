<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller{



	public function index(){

		$this->load->view('report/index');
	}

	public function CreateExcel(){

		$this->load->model("PatientModel");
		$this->load->library('excel');
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("Sl No","Patient Id","Enrolled Date","Enrolled Time","ID Proof","ID Number","Name","Gender","Age","Mobile Number","Email Id","Address","City","Zip Code","Height","Weight","BMI","BP","Pulse","SPO2","Check List","Source Type","Status");

		$column =0;

		foreach ($table_columns as $field){

			$object->getActiveSheet()->setCellValueByColumnAndRow($column,1,$field);

			$column ++;
		}

		$patients = $this->PatientModel->list();

		$excel_row = 2;

		foreach ($patients as $row){
      

			$object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$row->id);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$row->p_sl_no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$row->p_date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,$row->p_time);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,$row->p_id_proof);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,$row->p_id_no);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,$row->p_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,$row->p_gender);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,$row->p_age);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,$row->p_mobile);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,$row->p_email);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,$row->p_address);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,$row->p_city);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,$row->p_zip);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,$row->p_height);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,$row->p_weight);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,$row->p_bmi);
			$object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,$row->p_bp);
			$object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,$row->p_pulse);
			$object->getActiveSheet()->setCellValueByColumnAndRow(19,$excel_row,$row->p_spo);
			$object->getActiveSheet()->setCellValueByColumnAndRow(20,$excel_row,$row->p_check_list);
			$object->getActiveSheet()->setCellValueByColumnAndRow(21,$excel_row,$row->p_source);

			if ($row->p_status==1) {

				$object->getActiveSheet()->setCellValueByColumnAndRow(22,$excel_row,'Enrolled');

			}else {

				$object->getActiveSheet()->setCellValueByColumnAndRow(22,$excel_row,'Cancelled');

			}

			$excel_row ++;

		}

		$object_writer = PHPExcel_IOFactory::createWriter($object,'Excel2007');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Report.xlsx"');
		$object_writer->save('php://output');


	}

	
}


 ?>
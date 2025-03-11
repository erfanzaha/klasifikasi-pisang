<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTesting extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		isAuth();
	}

	public function index(){
        $data['title']      = "Data Testing";
		$data['subTitle']   = "Data Testing";	
		$data['active']     = "data testing";
		$this->themes->Def('data-testing/index',$data);
	}

	public function original(){
		
		/*if (!$this->m_data_testing->o()){
			$err = $this->m_data_testing->display_errors();
			echo json_encode($err);
		}else{
			$data = $this->m_data_testing->editGambar();
			echo json_encode($data);	
		}*/
		
		$data = $this->m_data_testing->original();
		echo json_encode($data);
	}

	public function grayscale(){
		$data = $this->m_data_testing->grayscale();
		echo json_encode($data);
	}

	public function zoom(){
		$data = $this->m_data_testing->zoom();
		echo json_encode($data);
	}

	public function edge(){
		$data = $this->m_data_testing->edge();
		echo json_encode($data);
	}

	public function medianfilter(){
		$data = $this->m_data_testing->medianfilter();
		echo json_encode($data);
	}

	public function slider(){
		$data = $this->m_data_testing->slider();
		echo json_encode($data);
	}

}
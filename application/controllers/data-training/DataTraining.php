<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTraining extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
        isAuth();
	}

    public function index(){
        $data['title']      = "Data Training";
		$data['subTitle']   = "Data Training";	
		$data['active']     = "data training";
		$this->themes->Def('data-training/index',$data);
	}
    
    public function imageCheck(){

        $data = $this->M_data_training->imageCheck();
        echo json_encode($data);
        
    }
}
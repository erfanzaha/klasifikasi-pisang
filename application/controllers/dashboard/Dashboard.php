<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		isAuth();
	}

	public function index(){
		$data['title']      = "Login";
		$data['subTitle']   = "Login";	
		$data['active']     = "login";
		$this->themes->Def('dashboard/index',$data);
	}

}

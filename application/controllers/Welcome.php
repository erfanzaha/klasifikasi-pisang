<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");

	}

	public function index(){
        $uri = $this->uri->segment(1);
        is_logged();
        $data['title']      = "Login";
        $this->themes->Auth('auth/login',$data);
    }
}

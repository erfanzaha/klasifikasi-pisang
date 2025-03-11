<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_data_training extends CI_Model{
  
    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    //cek gambar ada atau tidak
    public function imageCheck(){
        // It create the size of image or blank image. 
        $image = imagecreatetruecolor(500, 300); 
     
        // Set the background color of image. 
        $bg = imagecolorallocate($image, 205, 220, 200); 
     
        // Fill background with above selected color. 
        imagefill($image, 0, 0, $bg); 
    
        // Set the color of an ellipse. 
        $col_ellipse = imagecolorallocate($image, 0, 102, 0); 
     
        // Function to draw the filled ellipse. 
        imagefilledellipse($image, 250, 150, 400, 250, $col_ellipse); 
  
        // Use imagescale() function to scale the image
        $img = imagescale ( $image, 700, 500 );
  
        // Output image in the browser 
        

    }

    //scaling
    public function scaling(){

    }

    //



}
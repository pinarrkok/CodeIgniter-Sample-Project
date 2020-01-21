<?php

class formIslem extends CI_Controller {

    public function index(){

        $this->load->view("forms");
        
    }

    public function kaydet(){
      
        $name = $this->input->post("name");
        echo $name;
        
    }
}
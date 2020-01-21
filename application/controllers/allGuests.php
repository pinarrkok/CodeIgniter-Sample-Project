<?php

class allGuests extends CI_Controller {

    public function index(){

        //tüm sonuçları getirmek için;
        $rows = $this->db->get("guest")->result();
        
        $viewData = array("rows" => $rows);
        $this->load->view("allGuests", $viewData);


    }

    // public function where(){

    //     $where = array(
    //         "firstname" => "pinar",
    //         "lastname"  => "kok"
    //     );


    //     $rows = $this->db
    //     ->where($where)->get("guest")
    //     ->result();     
        
    //     $viewData = array("rows" => $rows);
    //     $this->load->view("dbIslem", $viewData);
    // }

}
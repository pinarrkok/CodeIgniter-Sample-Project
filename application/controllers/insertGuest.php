<?php

class insertGuest extends CI_Controller {

    public function index(){
    
        //$this->load->view("newReservation");
    }
    
    public function check(){

        session_start();
        
        $server = "localhost";
        $database = "lab";
        $username = "root";
        $password = "";
        
        $errors = array();
        
        $conn = new mysqli($server, $username, $password, $database);
        
        header('Access-Control-Allow-Origin: *');
         
        if(isset($_POST['identitynumber'])){
        
            $identitynumber = mysqli_real_escape_string($conn, $_POST["identitynumber"]);
          
            $check = "SELECT * FROM guest WHERE identitynumber = '$identitynumber'";
            $result = mysqli_query($conn, $check);
          
            if(mysqli_num_rows($result) == 0){
          
             echo json_encode(0);
              
            }
          
            if(mysqli_num_rows($result) == 1){
          
               echo json_encode(1);
              $query = "SELECT * FROM guest WHERE identitynumber = '$identitynumber'";
              $result = mysqli_query($conn, $query);
            }
          }    
    }
    public function insert(){

        $identitynumber = $this->input->post("identitynumber");
        $firstname      = $this->input->post("firstname");
        $lastname       = $this->input->post("lastname");
        $tel            = $this->input->post("tel");
        $gender         = $this->input->post("gender");

        $data = array(

            "identitynumber" => $identitynumber,
            "firstname"      => $firstname,
            "lastname"       => $lastname,
            "tel"            => $tel,
            "gender"         => $gender
        );

        if ($guestInsert = $this->db->insert("guest", $data)) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
<?php

class newReservation extends CI_Controller {

    public function index(){

    
        $this->load->view("newReservation");
    
        $guestQuery  = $this->db->select("guest_id");
                       $this->db->from("guest");
                       $this->db->where("identitynumber", 1);
        $guestIDQuery = $this->db->get()->row()->guest_id;
        //echo $guestIDQuery;
    }
    
    public function insertReservation(){
        

        $identitynumber   = $this->input->post("identitynumber");+
        $identitynumber2  = $this->input->post("identitynumber2");
        $identitynumber3  = $this->input->post("identitynumber3");
        $identitynumber4  = $this->input->post("identitynumber4");
        $room_name        = $this->input->post("room_name");
        $checkin_date     = $this->input->post("checkin_date");
        $checkout_date    = $this->input->post("checkout_date");
        $payment          = $this->input->post("payment");
        $username         = $this->input->post("username");
        $reservation_date = date("Y-m-d");

            $guestQuery  = $this->db->select("guest_id");
                        $this->db->from("guest");
                        $this->db->where("identitynumber", $identitynumber);               
            $guestIDQuery = $this->db->get()->row()->guest_id;

        if($identitynumber2 != null){
                
            $guestQuery2  = $this->db->select("guest_id");
                            $this->db->from("guest");
                            $this->db->where("identitynumber", $identitynumber2);
            $guestIDQuery2 = $this->db->get()->row()->guest_id;
        }

        if($identitynumber3!= null){
            
            $guestQuery3  = $this->db->select("guest_id");
                            $this->db->from("guest");
                            $this->db->where("identitynumber", $identitynumber3);
            $guestIDQuery3 = $this->db->get()->row()->guest_id;
        }

        if($identitynumber4!= null){
        
            $guestQuery4  = $this->db->select("guest_id");
                            $this->db->from("guest");
                            $this->db->where("identitynumber", $identitynumber4);
            $guestIDQuery4 = $this->db->get()->row()->guest_id;
        }
        

        $roomQuery   = $this->db->select("room_id");
                       $this->db->from("room");
                       $this->db->where("room_name", $room_name);
        $roomIDQuery = $this->db->get()->row()->room_id;
                                    
        $userQuery   = $this->db->select("user_id");
                       $this->db->from("users");
                       $this->db->where("username", $username);
        $userIDQuery = $this->db->get()->row()->user_id;

        $data = array(
            "checkin_date" => $checkin_date,
            "checkout_date" => $checkout_date,
            "reservation_date" => $reservation_date,
            "user_id" => $userIDQuery,
            "payment" => $payment,
            "room_id" => $roomIDQuery
        );
        
        if($insert = $this->db->insert("stay", $data)){
            $insert_id = $this->db->insert_id();
            $stay_id = $insert_id;

            $guestxstay = array(
                "allguest_id" => $guestIDQuery,
                "stay_id" => $stay_id
            );
            $guestxstayQuery = $this->db->insert("guestxstay", $guestxstay);

            if($identitynumber2!= null){
            $guestxstay2 = array(
                "allguest_id" => $guestIDQuery2,
                "stay_id" => $stay_id
            );
            $guestxstayQuery2 = $this->db->insert("guestxstay", $guestxstay2);
            }
            
            if($identitynumber3!= null){
            $guestxstay3 = array(
                "allguest_id" => $guestIDQuery3,
                "stay_id" => $stay_id
            );
            $guestxstayQuery3 = $this->db->insert("guestxstay", $guestxstay3);
            }

            if($identitynumber4!= null){
            $guestxstay4 = array(
                "allguest_id" => $guestIDQuery4,
                "stay_id" => $stay_id
            );
            $guestxstayQuery4 = $this->db->insert("guestxstay", $guestxstay4);
            }
        }
        
        
        else {
            echo $db->error;
        }

        $this->load->view("welcome_message");
          
    }
}
<?php

class allReservations extends CI_Controller {

    public function index(){
        
        $this->db->select('*');
        $this->db->from('stay');
        $this->db->join('guestxstay', 'stay.stay_id = guestxstay.stay_id', 'inner');
        $this->db->join('room', 'stay.room_id = room.room_id', 'inner');
        $this->db->join('guest', 'guest.guest_id = guestxstay.allguest_id');
        $allReservations = $this->db->get()->result();
        $viewData = array("allReservations" => $allReservations);
        $this->load->view("allReservations", $viewData);
    }
}
<?php

class deleteReservation extends CI_Controller {

    public function delete(){
    
        $stay_id = $this->input->post("stay_id");
        $guestxstay_id = $this->input->post("guestxstay_id");

        if ($deleteStay = $this->db->where("stay_id", $stay_id)->delete("stay")) {
            $deleteGuestxStay = $this->db->where("guestxstay_id", $guestxstay_id)->delete("guestxstay");
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
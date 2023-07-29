<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_pendonor extends CI_Model {

    public function SemuaData(){
        return $this->db->get('pendonor')->result_array();
    }
}

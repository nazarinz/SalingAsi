<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_penerima extends CI_Model {

    public function SemuaDataPenerima(){
        return $this->db->get('penerima')->result_array();
    }
}

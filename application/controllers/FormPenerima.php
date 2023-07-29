<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormPenerima extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database(); // Load the database library
    }

    public function index() {
        $this->session->unset_userdata('data_page1'); // Clear data_page1 when starting a new form
        $this->session->unset_userdata('data_page2'); // Clear data_page2 when starting a new form
        $this->load->view('formpenerima/formpenerima1');
    }

    public function savepagepenerima1() {
        $data = array(
            'no_kk' => $this->input->post('no_kk'),
            'nama_ibu_penerima' => $this->input->post('nama_ibu_penerima'),
            'agama_ibu_penerima' => $this->input->post('agama_ibu_penerima'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat')
        );

        // Save data to the database
        $this->db->insert('penerima', $data);

        // Set data_page1 session variable
        $this->session->set_userdata('data_page1', $data);

        $this->load->view('formpenerima/formpenerima2');
    }

    public function savepagepenerima2() {
        // Get data from the session or variable in the controller
        $data_page1 = $this->session->userdata('data_page1');

        if ($data_page1) {
            $data_page1['nama_bayi'] = $this->input->post('nama_bayi');
            $tanggal_lahir = date('Y-m-d', strtotime($this->input->post('tanggal_lahir')));
            $data_page1['tanggal_lahir'] = $tanggal_lahir;
            $data_page1['jenis_kelamin'] = $this->input->post('jenis_kelamin');
            $data_page1['bayi_adopsi'] = $this->input->post('bayi_adopsi');

            // Update the data in the database
            $this->db->where('no_kk', $data_page1['no_kk']);
            $this->db->update('penerima', $data_page1);

            // Set data_page2 session variable
            $this->session->set_userdata('data_page2', $data_page1);
        }

        // Continue to the next page (page3) or any other page as needed
        $this->load->view('formpenerima/formpenerima3');
    }

    public function savepagepenerima3() {
        // Get data from the session or variable in the controller
        $data_page2 = $this->session->userdata('data_page2');

        if ($data_page2) {
            // Add the new fields to the existing data
            $data_page2['berat_badan_anak'] = $this->input->post('berat_badan_anak');
            $data_page2['jumlah_asi'] = $this->input->post('jumlah_asi');
            $data_page2['alasan'] = $this->input->post('alasan');

            // Update the data in the database
            $this->db->where('no_kk', $data_page2['no_kk']);
            $this->db->update('penerima', $data_page2);
        }

        // Continue to the next page (page4) or any other page as needed
        $this->load->view('formpenerima/formpenerima4');
    }

    public function savepagepenerima4() {
        // Get data from the session or variable in the controller
        $data_page2 = $this->session->userdata('data_page2');

        if ($data_page2) {
            // Add the new fields to the existing data
            $data_page2['bayi_prematur'] = $this->input->post('bayi_prematur');
            $data_page2['bayi_giziburuk'] = $this->input->post('bayi_giziburuk');
            $data_page2['bayi_kelainan'] = $this->input->post('bayi_kelainan');
            $data_page2['bayi_sakitberat'] = $this->input->post('bayi_sakitberat');

            // Update the data in the database
            $this->db->where('no_kk', $data_page2['no_kk']);
            $this->db->update('penerima', $data_page2);

        }

        // Continue to the next page (page5) or any other page as needed
        $this->load->view('formpenerima/formpenerima5');
    }

    public function savepagepenerima5() {
        // Get data from the session or variable in the controller
        $data_page2 = $this->session->userdata('data_page2');

        if ($data_page2) {
            // Add the new fields from page5 to the existing data
            $data_page2['ibu_sadar'] = $this->input->post('ibu_sadar');
            $data_page2['ibu_terpisah'] = $this->input->post('ibu_terpisah');
            $data_page2['ibu_meninggal'] = $this->input->post('ibu_meninggal');
            $data_page2['ibu_gangguanmental'] = $this->input->post('ibu_gangguanmental');
            $data_page2['ibu_infeksimenular'] = $this->input->post('ibu_infeksimenular');
            $data_page2['ibu_hormon'] = $this->input->post('ibu_hormon');
            // Add more additional fields as needed...

            // Update the data in the database
            $this->db->where('no_kk', $data_page2['no_kk']);
            $this->db->update('penerima', $data_page2);

            // Data saving is complete, remove the session variable
            $this->session->unset_userdata('data_page2');
        }
        $this->load->view('formpenerima/formpenerima6');

    }
}

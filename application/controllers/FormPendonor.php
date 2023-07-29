<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormPendonor extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('formpendonor/formpendonor1');
	}

	
public function savepagependonor1()
{
    $data = array(
        'no_kk' => $this->input->post('no_kk'),
        'nama' => $this->input->post('nama'),
        'agama' => $this->input->post('agama'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'no_hp' => $this->input->post('no_hp'),
        'alamat' => $this->input->post('alamat')
    );

    // Save data to the database
    $this->db->insert('pendonor', $data);

    // Set data_page1 session variable
    $this->session->set_userdata('data_page1', $data);

    // Continue to the next page (page2)
    $this->load->view('formpendonor/formpendonor2');
}

public function savepagependonor2()
{
    // Get data from the session or variable in the controller
    $data_page1 = $this->session->userdata('data_page1');

    if ($data_page1) {
        // Add the new fields to the existing data
        $data_page1['q_kelebihanasi'] = $this->input->post('q_kelebihanasi');
        $data_page1['q_andasehat'] = $this->input->post('q_andasehat');
        $data_page1['q_andaperokok'] = $this->input->post('q_andaperokok');
        $data_page1['q_andaalkohol'] = $this->input->post('q_andaalkohol');
        $data_page1['q_andavege'] = $this->input->post('q_andavege');
        $data_page1['q_andaseks'] = $this->input->post('q_andaseks');
        $data_page1['q_andanarkoba'] = $this->input->post('q_andanarkoba');
        $data_page1['q_andatato'] = $this->input->post('q_andatato');

        // Update the data in the database
        $this->db->where('no_kk', $data_page1['no_kk']);
        $this->db->update('pendonor', $data_page1);

        // Set data_page2 session variable
        $this->session->set_userdata('data_page2', $data_page1);
    }

    // Continue to the next page (page3) or any other page as needed
    $this->load->view('formpendonor/formpendonor3');
}

public function savepagependonor3()
{
    // Get data from the session or variable in the controller
    $data_page2 = $this->session->userdata('data_page2');

    if ($data_page2) {
        // Add the new fields to the existing data
        $data_page2['q_andahivaids'] = $this->input->post('q_andahivaids');
        $data_page2['q_andahepatitis'] = $this->input->post('q_andahepatitis');
        $data_page2['q_andahepatitisc'] = $this->input->post('q_andahepatitisc');
        $data_page2['q_andasifilis'] = $this->input->post('q_andasifilis');
        $data_page2['q_andahpv'] = $this->input->post('q_andahpv');
        $data_page2['q_andakanker'] = $this->input->post('q_andakanker');
        $data_page2['q_andatbc'] = $this->input->post('q_andatbc');
        $data_page2['q_andaepilepsy'] = $this->input->post('q_andaepilepsy');
        $data_page2['q_andainfeksipayudara'] = $this->input->post('q_andainfeksipayudara');

        // Update the data in the database
        $this->db->where('no_kk', $data_page2['no_kk']);
        $this->db->update('pendonor', $data_page2);

        // Remove the data_page2 session variable since it's no longer needed
        $this->session->unset_userdata('data_page2');
        $this->session->unset_userdata('data_page1');

    }

    // Continue to the next page (page4) or any other page as needed
    $this->load->view('formpendonor/formpendonor4');
}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('P_penerima');
		$this->load->library('session');

    }
	
	public function index()
	{
		// $data['pendonor'] = $this->P_pendonor->SemuaData();
		$this->load->view('admin/login');
		// $this->load->view('admin/dashboard', $data);
	}

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->admin_model->authenticate($username, $password);
        if ($admin) {
            // Jika autentikasi berhasil, simpan data admin ke sesi
            $this->session->set_userdata('admin', $admin);
            redirect('admin/dashboard'); // Arahkan ke halaman admin setelah login berhasil
        } else {
            // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
            $data['error_message'] = 'Username or password is incorrect.';
            $this->load->view('admin/login', $data);
        }
    }

    public function dashboard() {
        // Ambil data dari model pendonor dan penerima
        $datapendonor['pendonor'] = $this->P_pendonor->SemuaData();
        $datapenerima['penerima'] = $this->P_penerima->SemuaDataPenerima();
    
        // Gabungkan data-data tersebut menjadi satu array
        $data['pendonor'] = $datapendonor['pendonor'];
        $data['penerima'] = $datapenerima['penerima'];
    
        // Load view dashboard dengan data yang telah digabungkan
        $this->load->view('admin/dashboard', $data);
    }
    


}

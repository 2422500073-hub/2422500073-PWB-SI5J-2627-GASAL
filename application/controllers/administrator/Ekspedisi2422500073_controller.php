<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspedisi2422500073_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ekspedisi2422500073_model');
    }

    // Tampilkan Data Ekspedisi
    public function index() {
        $data['ekspedisi'] = $this->Ekspedisi2422500073_model->get_data()->result();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/Ekspedisi2422500073/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    // Form Tambah Data Ekspedisi
    public function tambah() {
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/Ekspedisi2422500073/tambah_Ekspedisi');
        $this->load->view('administrator/templates/footer');
    }

    // Process Simpan Data Ekspedisi
    public function tambah_aksi() {
        $data = array(
            'nama_ekspedisi2422500073' => $this->input->post('nama_ekspedisi2422500073'),
            'jenis_layanan2422500073'  => $this->input->post('jenis_layanan2422500073'),
            'tarif_per_kg2422500073'   => $this->input->post('tarif_per_kg2422500073'),
            'status2422500073'         => $this->input->post('status2422500073')
        );

        $this->Ekspedisi2422500073_model->insert_data($data);
        redirect('admin/Ekspedisi');
    }

    // Form Edit Data Ekspedisi (Memanggil view ubah_ekspedisi)
    public function edit($id) {
        $data['ekspedisi'] = $this->Ekspedisi2422500073_model->get_by_id($id);
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/Ekspedisi2422500073/ubah_ekspedisi', $data);
        $this->load->view('administrator/templates/footer');
    }

    // Process Update Data Ekspedisi
    public function update_aksi() {
        $id = $this->input->post('id_ekspedisi2422500073');
        $data = array(
            'nama_ekspedisi2422500073' => $this->input->post('nama_ekspedisi2422500073'),
            'jenis_layanan2422500073'  => $this->input->post('jenis_layanan2422500073'),
            'tarif_per_kg2422500073'   => $this->input->post('tarif_per_kg2422500073'),
            'status2422500073'         => $this->input->post('status2422500073')
        );

        $this->Ekspedisi2422500073_model->update_data($id, $data);
        redirect('admin/Ekspedisi');
    }

    // Process Hapus Data Ekspedisi
    public function hapus($id) {
        $this->Ekspedisi2422500073_model->delete_data($id);
        redirect('admin/Ekspedisi');
    }

}
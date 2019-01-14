<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["Karyawan"] = $this->karyawan_model->getAll();
        $this->load->view("admin/Karyawan/list", $data);
    }

    public function add()
    {
        $Karyawan = $this->karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($Karyawan->rules());

        if ($validation->run()) {
            $Karyawan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/Karyawan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/Karyawan');

        $Karyawan = $this->karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($Karyawan->rules());

        if ($validation->run()) {
            $Karyawan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["Karyawan"] = $Karyawan->getById($id);
        if (!$data["Karyawan"]) show_404();

        $this->load->view("admin/Karyawan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->karyawan_model->delete($id)) {
            redirect(site_url('admin/karyawan'));
        }
    }
}
?>

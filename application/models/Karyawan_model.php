<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "tb_karyawan";

    public $id_karyawan;
    public $nama_karyawan;
    public $alamat_karyawan;
    public $no_tlp;

    public function rules()
    {
        return [
            ['field' => 'id_karyawan',
            'label' => 'id',
            'rules' => 'numeric'],

            ['field' => 'nama_karyawan',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'alamat_karyawan',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'no_telp',
            'label' => 'telepon',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_karyawan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_karyawan = uniqid();
        $this->nama_karyawan = $post["name"];
        $this->alamat_karyawan = $post["address"];
        $this->no_tlp = $post["no.telepon"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_karyawan = $post["id"];
        $this->nama_karyawan= $post["name"];
        $this->alamat_karyawan = $post["address"];
        $this->no_tlp = $post["no.telepon"];
        $this->db->update($this->_table, $this, array('id_karyawan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_karyawan" => $id));
    }
}
?>

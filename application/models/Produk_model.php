<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "produk";

    public $produk_id;
    public $nama;
    public $harga;
    public $gambar = "default.jpg";
    public $deskripsi;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["produk_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->produk_id = uniqid();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->produk_id = $post["id "];
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->update($this->_table, $this, array('produk_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("produk_id" => $id));
    }
}

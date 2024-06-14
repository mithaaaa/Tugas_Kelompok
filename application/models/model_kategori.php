<?php

class Model_Kategori extends CI_Model{
    public function data_bouqet(){
      return $this->db->get_where("tb_barang", array('kategori' => 'bouqet'));
    }

    public function data_decoration(){
      return $this->db->get_where("tb_barang", array('kategori' => 'decoration'));
    }

    public function data_greetings(){
      return $this->db->get_where("tb_barang", array('kategori' => 'greetings'));
    }

    public function data_standing(){
      return $this->db->get_where("tb_barang", array('kategori' => 'standing'));
    }
}
<?php

class Kategori extends CI_Controller{
    public function Bouqet()
    {
        $data['bouqet'] = $this->model_kategori->data_bouqet()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bouqet', $data);
        $this->load->view('templates/footer');
    }

    public function Decoration()
    {
        $data['decoration'] = $this->model_kategori->data_decoration()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('decoration', $data);
        $this->load->view('templates/footer');
    }

    public function Greetings()
    {
        $data['greetings'] = $this->model_kategori->data_greetings()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('greetings', $data);
        $this->load->view('templates/footer');
    }

    public function Standing()
    {
        $data['standing'] = $this->model_kategori->data_standing()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('standing', $data);
        $this->load->view('templates/footer');
    }
}
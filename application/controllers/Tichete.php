<?php
class Tichete extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_tichete');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['tichete'] = $this->model_tichete->get_tichet();
        $data['title'] = 'Arhiva Tichete';

        $this->load->view('templates/header', $data);
        // $this->load->view('tichete/create');
        $this->load->view('tichete/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['tichete'] = $this->model_tichete->get_tichet();

        $data['title'] = 'Adauga un tichet nou';

        $this->form_validation->set_rules('title', 'Denumire', 'required');
        $this->form_validation->set_rules('descriere', 'Descriere', 'required');
        $this->form_validation->set_rules('data', 'Data', 'required');
        $this->form_validation->set_rules('poza', 'Poza', 'required');
        $this->form_validation->set_rules('parinte', 'Parinte', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('tichete/create');
            $this->load->view('templates/footer');
        } else {
            $this->model_tichete->adaugare_tichet();
            $this->index();
        }
    }
    public function deletedata($id)
    {
        $this->load->model('model_tichete');
        $this->model_tichete->delete($id);
        $this->index();
    }
    public function edit($id)
    {
        $row = $this->model_tichete->get_by_id($id);
        $data['tichet'] = $row;
        if (!isset($_POST['update'])) {
            $this->load->view('templates/header');
            $this->load->view('tichete/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_tichete->update_tichet($id);
            $this->index();
        }
    }
}

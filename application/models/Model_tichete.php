<?php
class Model_tichete extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function get_tichet()
    {
        $this->db->order_by('data', 'DESC');
        $query = $this->db->get('tichete');
        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tichete');
        return $query->row();
    }

    public function adaugare_tichet()
    {
        $this->load->helper('url');

        $data = array(
            'title' => $this->input->post('title'),
            'descriere' => $this->input->post('descriere'),
            'data' => $this->input->post('data'),
            'poza' => $this->input->post('poza'),
            'parinte' => $this->input->post('parinte')
        );

        return $this->db->insert('tichete', $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tichete');
    }
    public function update_tichet($id)
    {
        $this->load->helper('url');

        $id = $this->input->post('id');

        $data = array(
            'title' => $this->input->post('title'),
            'descriere' => $this->input->post('descriere'),
            'data' => $this->input->post('data'),
            'poza' => $this->input->post('poza'),
            'parinte' => $this->input->post('parinte')
        );

        $this->db->where('id', $id);
        return $this->db->update('tichete', $data);
    }
}

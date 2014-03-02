<?php
class Pagination extends CI_Controller {

public function index()
{
    $this->load->library('pagination');
    $this->load->library('table');
    $config['base_url'] =     'http://localhost:8888/pagination/index.php/site/index/';
    $config['total_rows'] = $this->db->get('program')->num_rows();
    $config['per_page'] = 2;

    $this->pagination->initialize($config);

    $query = $this->db->get('program', $config['per_page'], $this->uri->segment(3));
    $data['records'] = $query->result();

    $query->free_result();

    $this->load->view('data_view',$data);
}
}
?>
<?php 
class Matakuliah extends CI_Controller 
{ 
    public function index()
    { 
        $this->load->view('view-form-matakuliah');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah',  'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',  'min_lenght' => 'Kode terlalu pendek'
        ]);
            
        $this->form_validation->set_rules('namaMTK', 'Nama Matakuliah',  'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',  'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas',  'required|min_length[3]', [
            'required' => 'kelas Harus diisi',  'min_lenght' => 'Kelas Salah'
        ]);
        $this->form_validation->set_rules('nama', 'Nama',  'required|min_length[3]', [
            'required' => 'Nama Harus diisi',  'min_lenght' => 'Nama Mahasiwa salah'
        ]);
            
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
            'kode' => $this->input->post('kode'),
            'namaMTK' => $this->input->post('namaMTK'),  
            'kelas' => $this->input->post('kelas'),
            'nama' => $this->input->post('nama')
            ]; 
            
            $this->load->view('view-data-matakuliah', $data);
        } 
    }
}



<?php
class Daftar extends CI_Controller
{

    public function index()
    {

         $this->load->view('view-form-riwayathidup');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 
'required|min_length[3]', [
 'required' => 'NIM Mahasiswa Harus diisi',
 'min_lenght' => 'NIM terlalu pendek'
 ]);
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 
'required|min_length[3]', [
 'required' => 'Nama Mahasiswa Harus diisi',
 'min_lenght' => 'Nama terlalu pendek'
 ]);
        $this->form_validation->set_rules('tglLahir', 'Tanggal Lahir Mahasiswa', 
'required|min_length[3]', [
 'required' => 'Tanggal Lahir Mahasiswa Harus diisi',
 'min_lenght' => 'Tanggal Lahir terlalu pendek'
 ]);
        $this->form_validation->set_rules('tptLahir', 'Tempat Lahir Mahasiswa', 
'required|min_length[3]', [
 'required' => 'Tempat Lahir Mahasiswa Harus diisi',
 'min_lenght' => 'Tempat Lahir terlalu pendek'
 ]);
        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 
'required|min_length[3]', [
 'required' => 'Alamat Mahasiswa Harus diisi',
 'min_lenght' => 'Alamat terlalu pendek'
 ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-riwayathidup');
        } else {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'tglLahir' => $this->input->post('tglLahir'),
                'tptLahir' => $this->input->post('tptLahir'),
                'alamat' => $this->input->post('alamat')
            ];

            $this->load->view('view-data-riwayathidup', $data);
        }
    }
}
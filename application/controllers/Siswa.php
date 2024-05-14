<?php
class Siswa extends CI_Controller
{

    public function index()
    {

         $this->load->view('view-form-siswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa',
'required|min_length[3]', [
 'required' => 'Nama Siswa Harus diisi',
 'min_lenght' => 'Nama terlalu pendek'
 ]);
        $this->form_validation->set_rules('nis', 'NIS Siwa', 
'required|min_length[3]', [
 'required' => 'NIS Siswa Harus diisi',
 'min_lenght' => 'NIS terlalu pendek'
 ]);
        $this->form_validation->set_rules('kelas', 'Kelas Siwa', 
'required|min_length[3]', [
 'required' => 'Kelas Siswa Harus diisi',
 'min_lenght' => 'Kelas terlalu pendek'
 ]);
        $this->form_validation->set_rules('tglLahir', 'Tanggal Lahir Siwa', 
'required|min_length[3]', [
 'required' => 'Tanggal lahir Siswa Harus diisi',
 'min_lenght' => 'Tanggal Lahir terlalu pendek'
 ]);
        $this->form_validation->set_rules('tptLahir', 'Tempat Lahir Siwa', 
'required|min_length[3]', [
 'required' => 'Tempat Lahir Siswa Harus diisi',
 'min_lenght' => 'Tempat Lahir terlalu pendek'
 ]);
        $this->form_validation->set_rules('alamat', 'Alamat Siwa', 
'required|min_length[3]', [
 'required' => 'Alamat Siswa Harus diisi',
 'min_lenght' => 'Alamat terlalu pendek'
 ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-siswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tglLahir' => $this->input->post('tglLahir'),
                'tptLahir' => $this->input->post('tptLahir'),
                'alamat' => $this->input->post('alamat'),
                'jnsKelamin' => $this->input->post('jnsKelamin'),
                'agama' => $this->input->post('agama')
            ];

            $this->load->view('view-data-siswa', $data);
        }
    }
}
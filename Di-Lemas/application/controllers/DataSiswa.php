<?php
class DataSiswa extends CI_Controller
{
public function index()
{
$this->load->view('form_input');
}
public function cetak()
{
    $data = [
        'nama' => $this->input->post('nama'),
        'nis' => $this->input->post('nis'),
        'kelas' => $this->input->post('kelas'),
        'tgl' => $this->input->post('tgl'),
        'tempat' => $this->input->post('tempat'),
        'alamat' => $this->input->post('alamat'),
        'gender' => $this->input->post('gender'),
        'agama' => $this->input->post('agama')
        ];
        $this->load->view('form_output', $data);
        }
        }
<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class anggota extends CI_Controller
{

    function __construct(){
                 parent::__construct();
                 // cek login
                 if($this->session->userdata('status') != "login"){
                 $alert=$this->session->set_flashdata('alert', 'Anda belum Login');
                 redirect(base_url());
                 }
            }

    function index(){
        $data['anggota'] = $this->M_perpus->get_data('anggota')->result();
        $data['buku'] = $this->M_perpus->get_data('buku')->result();
        $data['header'] = 'Katalog anggota';
    }

    public function katalog_detail(){
        $id = $this->uri->segment(3);
        $buku = $this->db->query('select*from buku b, kategori k where b.id_kategori=k.id_kategori and b.id_buku='.$id)->result();
    
            foreach ($buku as $fields){
                $data['anggota'] = $fields->judul_anggota;
                $data['id_anggota'] = $fields->id_anggota;
                $data['nama_anggota'] = $fields->nama_anggota;
                $data['gender'] = $fields->gender;
                $data['no_telp'] = $fields->no_telp;
                $data['alamat'] = $fields->alamat;
                $data['email'] = $fields->email;
                $data['password'] = $id;
            }
            $this->load->view('desain');
            $this->load->view('toplayout');
            $this->load->view('detail_anggota',$data);           
            }        
        }
?>
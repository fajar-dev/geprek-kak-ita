<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['buku'] =  $this->Model_admin->semua('tbl_produk')->num_rows();
		$data['pinjam'] =  $this->Model_admin->semua('tbl_pesanan')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/dashboard');
    $this->load->view('admin/footer');
	} 

	public function menu(){
		$data['hasil']= $this->Model_admin->tampil('tbl_produk')->result();
		$data['title'] = 'Menu Ayam Geprek';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/menu');
    $this->load->view('admin/footer');
	}

	public function pesanan(){
		$data['hasil']= $this->Model_admin->tampil('tbl_pesanan')->result();
		$data['title'] = 'Pemesan';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/pesanan');
    $this->load->view('admin/footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Menu';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/tambah');
    $this->load->view('admin/footer');
	}

	public function tambah_proses()
	{
		$config['upload_path']          = './assets/gambar';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg';
		$config['max_size']             = 10000000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
					 $error = array('error' => $this->upload->display_errors());
					 $this->session->set_flashdata('msg', 'Hanya Boleh foto dengan format gambar');
				 	redirect(base_url('admin/tambah'));
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
					 'nama_produk' => $this->input->post('nama'),
					 'harga' => $this->input->post('harga'),
					 'foto' => $hasil,
				 );

				 $this->db->insert('tbl_produk',$data);
				 $this->session->set_flashdata('msg',
				 '<div class="alert alert-success alert-has-icon">
				 <div class="alert-icon"><i class="fas fa-check"></i></div>
				 <div class="alert-body">
					 <div class="alert-title">Success</div>
					 Data barang berhasil diinput
				 </div>
				 </div>'
				 );
				 redirect(base_url('admin/menu'));
		}
	}

	function hapus_menu($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_produk',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			produk Berhasi Dihapus
		</div>
		</div>'
		);
		redirect(base_url('admin/menu'));
	}

	function hapus_pesanan($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_pesanan',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Pesanan Berhasil Dihapus
		</div>
		</div>'
		);
		redirect(base_url('admin/pesanan'));
	}
}
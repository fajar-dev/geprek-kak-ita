<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
	}
	
	public function index(){
		$data['hasil']= $this->Model_page->tampil('tbl_produk')->result();
    $this->load->view('home', $data);
	} 

	public function tambah()
	{
		$tgl = $tgl = date("Y-m-d h:i:sa");
		$produk = $_POST['produk'];
		$nama = $_POST['nama'];
		$hp = $_POST['hp'];
		$alamat= $_POST['alamat'];
		$data = array(
			'tgl_pesan'=>$tgl,
			'nama_produk'=>$produk,
			'nama_pelanggan'=>$nama,
			'alamat'=>$alamat,
			'no_hp'=>$hp
			);
		$this->Model_page->tambah('tbl_pesanan',$data);
		echo $this->session->set_flashdata('msg','tambah');
		redirect("https://api.whatsapp.com/send?phone=6282217524238&text=saya ingin membeli%0A$produk%0A%0Acatatan pesanan:%0ANama: $nama%0AAlamat: $alamat%0ANo.HP:$hp");
	}

}
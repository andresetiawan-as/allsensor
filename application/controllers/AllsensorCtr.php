<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllsensorCtr extends CI_Controller {

    /** 
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct(){
		parent::__construct();
		$this->load->model('AllsensorModel');
		// $this->load->library('excel');
	}
	
	// public function include(){
	// 	$data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
	// 	$data['script']=$this->load->view('include/script/script.php',NULL,TRUE);
	// }
    
    public function index(){
		$data['index_script']=$this->load->view('include/script/index_script.php',NULL,TRUE);
		$data['index_style']=$this->load->view('include/style/index_style.php',NULL,TRUE);
		$data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
		$data['script']=$this->load->view('include/script/script.php',NULL,TRUE);
		$this->load->view('page/index.php', $data);

		// $data['script_dashboard']=$this->load->view('include/script_dashboard.php',NULL,TRUE);
		
		// $data['sidebar']=$this->load->view('template/sidebar.php',NULL,TRUE);
		// $data['header']=$this->load->view('template/header.php',NULL,TRUE);
		// $data['modal']=$this->load->view('template/modal.php',NULL,TRUE);
		// $data['flashdata']=$this->load->view('template/flashdata.php',NULL,TRUE);

		// // $data['transaksi']=$this->PartyGagaModel->transaksi();
		// $data['transaksi'] = $this->PartyGagaModel->trans_group();
		// $data['jumlah_trans'] = sizeof($data['transaksi']);

		// $data['kategori'] = $this->PartyGagaModel->kategori();
		// $data['jumlah_kat'] = sizeof($data['kategori']);
		// $this->load->view('page/home.php', $data);
	}
	
	public function blog(){
		$data['blog_script'] = $this->load->view('include/script/blog_script.php',NULL,TRUE);
		$data['blog_style'] = $this->load->view('include/style/blog_style.php',NULL,TRUE);
		$data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
		$data['script']=$this->load->view('include/script/script.php',NULL,TRUE);
		$this->load->view('page/blog.php', $data);
	}

	public function cart(){
		$data['cart_script'] = $this->load->view('include/script/cart_script.php',NULL,TRUE);
		$data['cart_style'] = $this->load->view('include/style/cart_style.php',NULL,TRUE);
		$data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
		$data['script']=$this->load->view('include/script/script.php',NULL,TRUE);
		$this->load->view('page/cart.php', $data);
	}

	public function categories(){
		$data['categories_script'] = $this->load->view('include/script/categories_script.php',NULL,TRUE);
		$data['categories_style'] = $this->load->view('include/style/categories_style.php',NULL,TRUE);
		$data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
		$data['script']=$this->load->view('include/script/script.php',NULL,TRUE);
		$this->load->view('page/categories.php', $data);
	}

	public function checkout(){
		$data['checkout_script'] = $this->load->view('include/script/checkout_script.php',NULL,TRUE);
		$data['checkout_style'] = $this->load->view('include/style/checkout_style.php',NULL,TRUE);
		$data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
		$data['script']=$this->load->view('include/script/script.php',NULL,TRUE);
		$this->load->view('page/checkout.php', $data);
	}

	public function product(){
		$data['product_style'] = $this->load->view('include/style/product_style.php',NULL,TRUE);
		$data['product_script'] = $this->load->view('include/script/product_script.php',NULL,TRUE);
		$data['imageZoom_style'] = $this->load->view('include/style/imageZoom_style.php',NULL,TRUE);
		$data['imageZoom_script'] = $this->load->view('include/script/imageZoom_script.php',NULL,TRUE);
		$data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
		$data['script']=$this->load->view('include/script/script.php',NULL,TRUE);
		$this->load->view('page/product.php', $data);
	}
}
?>
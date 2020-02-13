<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllsensorModel extends CI_Model{
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
	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('')
    // } 
    
    public function index(){
        // $data['index_style'] = $this->load->view('include/style/index_style', NULL, TRUE);
		// $data['index_script'] = $this->load->view('include/script/index_script', NULL, TRUE);
		// $data['style']=$this->load->view('include/style/style.php',NULL,TRUE);
		// $data['script']=$this->load->view('include/style/script.php',NULL,TRUE);
		// $data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		// $data['navbar'] = $this->load->view('template/header', NULL, TRUE);


        // $this->load->view('page/index.php', null);
	}
	
	public function blog(){
		// $this->load->view('page/blog.php', $data);
	}

	public function cart(){
		// $this->load->view('page/cart.php', $data);
	}

	public function categories(){
		// $this->load->view('page/categories.php', $data);
	}

	public function checkout(){
		// $this->load->view('page/checkout.php', $data);
	}

	public function product(){
		// $this->load->view('page/product.php', $data);
	}

}
?>
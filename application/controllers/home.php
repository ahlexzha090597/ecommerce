<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct(){
		parent::__construct();

		$this->load->model('m_shop', 'm');

	}

	public function index()
	{
		$data['sql1'] = $this->m->getshop();
		$this->load->view('header');
		$this->load->view('shop', $data);
		$this->load->view('footer');
	}

	public function add(){
		
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');

	}

	public function save(){
		
		
		$prdct_name = $this->input->post('prdct_name');
		$prdct_code = $this->input->post('prdct_code');
		$uploadimage = $this->input->post('uploadimage');
		$stock = $this->input->post('stock');
		$price = $this->input->post('price');

		$data = array(
			'prdct_name' => $prdct_name,
			'prdct_code' => $prdct_code,
			'uploadimage' => $uploadimage,
			'stock' => $stock,
			'price' => $price
			 );
		
			$this->m->save($data);
		
		
		redirect('home');
	}


	public function edit($id){
		$data['op']= 'edit';
		$data['sql1'] = $this->m->edit($id);
		$this->load->view('header');
		$this->load->view('shop', $data);
		$this->load->view('footer');
	}


	public function remove($id){
		$this->m->remove($id);	
		redirect('home');
	}


}


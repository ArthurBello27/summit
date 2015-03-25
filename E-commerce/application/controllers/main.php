<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function create() {
		$data = $this->input->post();
		$this->load->model('process');
		$this->process->insert($data);
	}

	public function home()
	{
		$this->load->model('process');
		$query = $this->process->get_products();
		$query2 = $this->process->get_categories();
		$this->load->view('home', array('products' => $query, 'categories' => $query2));
	}

	public function index()
	{
		$this->load->view('index');
		
	}

	public function item($id)
	{
		$this->load->model('process');
		$query = $this->process->get_item($id);
		$query2 = $this->process->get_item_category($query->result()[0]->categories_id);
		$this->load->view('item_page', array('item_details' => $query, 'item_category' => $query2));
		
	}
	
	public function add_cart()
	{
		$thepost = $this->input->post();
		$this->load->model('process');
		$query = $this->process->add_cart($thepost);
		redirect('/main/cart');
		
	}	

	public function process_login()
	{
		$thepost = $this->input->post();
		$this->load->model('process');
		$this->process->compare_login($thepost);
		redirect('/main/home');
		
	}
	

	public function cart()
	{
		$this->load->model('process');
		$query = $this->process->cart();
		$this->load->view('cart', array('query'=>$query->result())); 
	}
	
	public function process_registration()
	{		
		$thepost = $this->input->post();	
		$this->load->model('process');
		$this->process->compare_registration($thepost);
		redirect('/');
		
	}

	public function update()
	{
		$thepost = $this->input->post();
		$this->load->model('process');
		$query = $this->process->update($thepost);
		redirect('/main/cart');
	}
	
	public function out()
	{

		$this->session->sess_destroy();
		redirect('/');
		
	}
	
}
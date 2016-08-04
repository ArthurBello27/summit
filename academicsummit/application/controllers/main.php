<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('process');
	    $query = $this->process->get_event();
		$this->load->view('home', array('query'=>$query->result()));
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function gallery()
	{
		$this->load->model('process');
        $query = $this->process->get_gallery();
		$this->load->view('gallery', array('query'=>$query->result()));
	}
	public function update_gallery()
	{
		$thepost = $this->input->post();
		$this->load->model('process');
	    $this->process->update_gallery($thepost);
		header("Location: /");
	}
	public function admin()
	{
		$thepost = $this->input->post();
		if ($thepost['pin'] == 1994){
			$this->load->model('process');
	        $query = $this->process->get_event();
			$this->load->view('admin', array('query'=>$query->result()));
		}
		else {
			header("Location: /");
		}
	}
	
	public function update_event()
	{
		$thepost = $this->input->post();
		$this->load->model('process');
	    $this->process->update_event($thepost);
		header("Location: /");
	}
	public function add_speaker()
	{
		$thepost = $this->input->post();
		$this->load->model('process');
	    $this->process->add_speaker($thepost);
		header("Location: /");
	}
	public function admin_passage()
	{
		$this->load->view('admin_passage');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function speakers()
	{
		$this->load->model('process');
        $query = $this->process->get_speakers();
		$this->load->view('speakers', array('query'=>$query->result()));
	}
	

	public function new_user()
	{
		$thepost = $this->input->post();
		$this->load->library("email");
        $this->email->set_newline("\r\n");
        $this->email->to("theacademicsummit@gmail.com");
        $this->email->from($thepost["email"], "Academic Summit!");
        $this->email->subject("New user on academic summit!");
        $this->email->message("Name: ".$thepost["name"]." Email: ".$thepost["email"]." Number: ".$thepost["number"]." School: ".$thepost["school"]);
        if($this->email->send())
        {
               
        }
        else
        {
            echo $this->email->print_debugger();    
        }
		$this->load->model('process');
        $this->process->register_user($thepost);
        $this->load->view('successful_registration');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
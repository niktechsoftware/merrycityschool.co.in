<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	public function aboutUs()
	{
		$this->load->view('aboutUs');
	}
	public function vision()
	{
		$this->load->view('vision');
	}
	public function objective()
	{
		$this->load->view('objective');
	}
	public function medical()
	{
		$this->load->view('medical');
	}
	
	public function transpotation()
	{
		$this->load->view('transpotation');
	}
	public function classRoom()
	{
		$this->load->view('classRoom');
	}
	public function playGround()
	{
		$this->load->view('playGround');
	}
	public function computerLab()
	{
		$this->load->view('computerLab');
	}
	public function library()
	{
		$this->load->view('library');
	}
	public function cctv()
	{
		$this->load->view('cctv');
	}
	public function Mmessage()
	{
		$this->load->view('Mmessage');
	}
	public function Cmessage()
	{
		$this->load->view('Cmessage');
	}
	public function Pmessage()
	{
		$this->load->view('Pmessage');
	}
	public function generalRule()
	{
		$this->load->view('generalRule');
	}
	public function parentsRule()
	{
		$this->load->view('parentsRule');
	}
	public function feeRule()
	{
		$this->load->view('feeRule');
	}
	public function uniformRule()
	{
		$this->load->view('uniformRule');
	}
	public function examRule()
	{
		$this->load->view('examRule');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	} 

	public function mdt(){
		$this->load->view('mdt');
	}
	public function aircraft(){
		$this->load->view('aircraft');
	}
	public function sportYoga(){
		$this->load->view('sportYoga');
	}
	public function perDev(){
		$this->load->view('perDev');
	}
	public function HouseActivity(){
		$this->load->view('HouseActivity');
	}
	public function clubSocieties(){
		$this->load->view('clubSocieties');
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
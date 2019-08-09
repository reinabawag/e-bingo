<?php
use JasperPHP\JasperPHP as JasperPHP;

class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('pages/index');
	}

	public function insert_result()
	{
		$this->load->model('result_model');
		$number = $this->input->post('number');
		$session = $this->input->post('session');

		$bool = $this->result_model->insert_result($session, $number);
		echo json_encode(['status', $bool, $number]);
	}

	public function get_results()
	{
		$this->load->model('result_model');

		echo json_encode($this->result_model->get_results());
	}

	public function generateResult($session)
	{
		$jasper = new JasperPHP;
		$this->load->helper('path');

		$jasper->compile('report/report1.jrxml')->execute();
	}

	public function fibonacci()
	{
		$max = 10;		
		$tmp = 0;
		$x = 0;
		$y = 1;

		echo "$x, ";
		echo "$y, ";

		for ($i=1; $i < $max; $i++) {
			$temp = $x + $y;			
			$x = $y;
			$y = $temp;

			echo "$temp, ";
		}
	}
}
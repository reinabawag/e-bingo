<?php
/**
 * Main Controller of E-Bingo
 */
class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index_()
	{
		$num = str_pad(rand(1, 75), 2, '0', STR_PAD_LEFT) ;
		// echo $num.'<br>';
		if ($num >= 1 && $num <= 15) {
			echo 'B '.$num;
		} else if ($num >= 16 && $num <= 30) {
			echo 'I '.$num;
		}
		else if ($num >= 31 && $num <= 45) {
			echo 'N '.$num;
		}
		else if ($num >= 46 && $num <= 60) {
			echo 'G '.$num;
		} else {
			echo 'O '.$num;
		}		
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

	public function test()
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
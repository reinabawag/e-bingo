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
		$this->load->model('employee_model');
		$this->load->helper(['url', 'html', 'form']);
		$emp_ = [];

		foreach ($this->employee_model->get_all_empcode(false) as $emp)
		{
	        array_push($emp_, $emp['name']);
		}

		$data['employee'] = $emp_;
		$this->load->view('pages/index', $data);
	}

	public function get_all_emp()
	{
		$this->load->model('employee_model');
		$emp_ = array();
		foreach ($this->employee_model->get_all_empcode(false) as $emp)
		{
	        array_push($emp_, $emp['name']);
		}

		echo json_encode($emp_);
	}

	public function get_all_emp_true()
	{
		$this->load->model('employee_model');
		$emp_ = array();
		foreach ($this->employee_model->get_all_empcode(true) as $emp)
		{
	        array_push($emp_, $emp['name']);
		}

		echo json_encode($emp_);
	}

	public function update_emp_status()
	{
		$this->load->model('employee_model');		
		$number = $this->input->post('number');
		if ($this->employee_model->update_emp_status($number))
			echo json_encode(['status' => true]);
		else 
			echo json_encode(['status' => false]);
	}

	public function import_from_excel($file_path)
	{
		$this->load->model('employee_model');

		if ($this->employee_model->empty_table('emp')) {
			$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
			$reader->setReadDataOnly(TRUE);
			$spreadsheet = $reader->load($file_path);

			$worksheet = $spreadsheet->getActiveSheet();
			// Get the highest row and column numbers referenced in the worksheet
			$highestRow = $worksheet->getHighestRow(); // e.g. 10
			$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
			$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5

			for ($row = 1; $row <= $highestRow; ++$row) {
			    for ($col = 1; $col <= $highestColumnIndex; ++$col) {
			        $empcode = $row;
			        $name = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
			    }
			    // echo "$empcode - $name </br>";
			    $this->employee_model->insert($empcode, $name);
			}
		} else {
			echo('ERROR');
		}
	}

	public function upload_excel()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xlsx|xls';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());

			echo json_encode($error);
		} else {
			$this->import_from_excel($this->upload->data('full_path'));
			echo json_encode(['status' => true]);
		}		
	}
}
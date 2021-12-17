<?php
/**
 * 
 */
class employee_model extends CI_Model
{
	public $code;
	public $name;
	public $status;

	public function insert($empcode, $name)
	{
		$this->load->database();

		$this->code = $empcode;
		$this->name = $name;
		$this->status = false;

		if ( ! is_null($empcode)) {
			return $this->db->insert('emp', $this);
		}
	}

	public function get_all_empcode($stat)
	{
		$this->load->database();

		$this->db->select(['code', 'name']);
		$this->db->order_by('name', 'ASC');
		$this->db->where('status', $stat);
		$result = $this->db->get('emp');

		return $result->result_array();
	}

	public function update_emp_status($code)
	{
		$this->load->database();
		
		$this->db->set('status', true);
		$this->db->where('name', $code);
		return $this->db->update('emp');
	}

	public function empty_table($table_name)
	{
		$this->load->database();

		return $this->db->empty_table($table_name);
	}
}
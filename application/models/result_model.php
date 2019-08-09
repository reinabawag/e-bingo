<?php

class result_model extends CI_Model
{
	public function insert_result($session, $result)
	{
		$this->load->database();

		return $this->db->insert('result', ['session' => $session, 'number' => $result]);
	}

	public function get_results($session)
	{
		$this->load->database();
		$query = $this->db->query(
			"SELECT
			session,
			CASE WHEN number BETWEEN '1' AND '15' THEN number END B,
			CASE WHEN number BETWEEN '16' AND '30' THEN number  END I,
			CASE WHEN number BETWEEN '31' AND '45' THEN number  END N,
			CASE WHEN number BETWEEN '46' AND '60' THEN number  END G,
			CASE WHEN number BETWEEN '61' AND '75' THEN number  END O
			FROM `result` WHERE session = '$session'"
		);

		return $query->result_array();
	}
}
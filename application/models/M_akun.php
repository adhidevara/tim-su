<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_akun extends CI_Model
{
	public function getAkun($table, $col_com, $val_com)
	{
		$this->db->from($table);
		$this->db->where($col_com, $val_com);
		return $this->db->get()->result();
	}

	public function createAkun($table, $data)
	{
		$this->db->insert($table, $data);
	}
}

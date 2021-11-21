<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_mentor extends CI_Model
{
	public function insertMateri($data)
	{
		$this->db->insert('materi', $data);
	}

	public function getTimByID($id_tim)
	{
		$this->db->from('tims');
		$this->db->where('id_tim', $id_tim);
		return $this->db->get()->result();
	}

	public function updateTim($id_tim, $data)
	{
		$this->db->where('id_tim', $id_tim);
		$this->db->update('tims', $data);
	}

	public function allTim($id_mentor)
	{
		$this->db->from('tims');
		$this->db->where('id_mentor != '.$id_mentor.' OR id_mentor IS NULL');
		return $this->db->get()->result();
	}

	public function getTimbyMentor($id_mentor)
	{
		$this->db->from('tims');
		$this->db->where('id_mentor', $id_mentor);
		return $this->db->get()->result();
	}

	public function getTaskUnreviewed($id_mentor)
	{
		$this->db->from('tasks');
		$this->db->where("id_mentor = ".$id_mentor." AND review = 'Belum Direview'");
		return $this->db->get()->result();
	}

	public function getTaskReviewed($id_mentor)
	{
		$this->db->from('tasks');
		$this->db->where("id_mentor = ".$id_mentor." AND review = 'Sudah Direview'");
		return $this->db->get()->result();
	}

	public function getProgressChecked($id_mentor)
	{
		$this->db->from('progresses');
		$this->db->where("id_mentor = ".$id_mentor." AND status = 'sudah dicek'");
		return $this->db->get()->result();
	}

	public function getProgressNeedChecked($id_mentor)
	{
		$this->db->from('progresses');
		$this->db->where("id_mentor = ".$id_mentor." AND status = 'sedang dicek'");
		return $this->db->get()->result();
	}

	public function getTasks($id_mentor)
	{
		$this->db->from('tasks');
		$this->db->where('id_mentor', $id_mentor);
		$this->db->order_by('jawaban', 'asc');
		return $this->db->get()->result();
	}

	public function createTasks($data)
	{
		$this->db->insert('tasks', $data);
	}

	public function getProgress($id_mentor)
	{
		$this->db->from('progresses');
		$this->db->where('id_mentor', $id_mentor);
		$this->db->order_by('id_progresses', 'desc');
		return $this->db->get()->result();
	}
}

<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_tim extends CI_Model
{
	public function getMonthlyProgress($id_tim)
	{
		$this->db->select('*, SUM(presentase_target)/COUNT(id_progresses) as jml_presentase_target, SUM(presentase_progress)/COUNT(id_progresses) as jml_presentase_progress');
		$this->db->from('progresses');
		$this->db->where('MONTH(bulan) = MONTH(NOW()) AND YEAR(bulan) = YEAR(NOW())');
		$this->db->where('id_tim', $id_tim);
		$this->db->order_by('id_progresses', 'desc');
		return $this->db->get()->result();
	}

	public function cntAllTask($id_tim)
	{
		$this->db->select('*, COUNT(id_task) as jmlTask');
		$this->db->from('tasks');
		$this->db->where('id_tim', $id_tim);
		return $this->db->get()->result();
	}

	public function jmlTaskSelesai($id_tim)
	{
		$this->db->select('COUNT(id_task) as jmlTask');
		$this->db->from('tasks');
		$this->db->where('jawaban IS NOT NULL AND attachment IS NOT NULL AND review IS NOT NULL');
		$this->db->where('id_tim', $id_tim);
		return $this->db->get()->result();
	}

	public function getProgressSelesai($id_tim)
	{
		$this->db->select('COUNT(id_progresses) as jmlProgressSelesai');
		$this->db->from('progresses');
		$this->db->where('MONTH(bulan) = MONTH(NOW()) AND YEAR(bulan) = YEAR(NOW()) AND presentase_target = presentase_progress');
		$this->db->where('id_tim', $id_tim);
		return $this->db->get()->result();
	}

	public function getMyMentor($id_mentor)
	{
		$this->db->from('mentors');
		$this->db->where('id_mentor', $id_mentor);
		return $this->db->get()->result();
	}

	public function getNews()
	{
		$this->db->select('n.*, a.nama as author');
		$this->db->from('news n');
		$this->db->join('admins a', 'n.id_admin = a.id_admin');
		$this->db->order_by('n.id_news', 'desc');
		return $this->db->get()->result();
	}

	public function getEvent()
	{
		$this->db->select('e.*, a.nama as author');
		$this->db->from('events e');
		$this->db->join('admins a', 'a.id_admin = a.id_admin');
		$this->db->order_by('e.id_event', 'desc');
		return $this->db->get()->result();
	}

	public function getMateri()
	{
		$this->db->select('ma.*, m.nama as author');
		$this->db->from('materi ma');
		$this->db->join('mentors m', 'm.id_mentor = m.id_mentor');
		$this->db->order_by('ma.id_materi', 'desc');
		return $this->db->get()->result();
	}

	public function getTasks($id_tim)
	{
		$this->db->from('tasks');
		$this->db->where('id_tim', $id_tim);
		$this->db->order_by('jawaban', 'asc');
		return $this->db->get()->result();
	}

	public function uploadAttachment($id_task, $data)
	{
		$this->db->where('id_task', $id_task);
		$this->db->update('tasks', $data);
	}

	public function getProgress($id_tim)
	{
		$this->db->from('progresses');
		$this->db->where('id_tim', $id_tim);
		$this->db->order_by('id_progresses', 'desc');
		return $this->db->get()->result();
	}

	public function createProgress($data)
	{
		$this->db->insert('progresses', $data);
	}

	public function updateProgress($data, $id)
	{
		$this->db->where('id_progresses', $id);
		$this->db->update('progresses', $data);
	}

	public function createDiscussion($data)
	{
		$this->db->insert('diskusi', $data);
	}

	public function getDiskusi()
	{
		$this->db->select('*');
		$this->db->from('diskusi d');
		$this->db->join('users u', 'd.id_user = u.id_user', 'left');
		$this->db->where('d.is_verified', 'verified');
		$this->db->order_by('d.created_at', 'desc');
		return $this->db->get()->result();
	}

	public function getDiskusiById($id_diskusi)
	{
		$this->db->select('*, d.is_verified as dis_verified');
		$this->db->from('diskusi d');
		$this->db->join('users u', 'd.id_user = u.id_user', 'left');
		$this->db->where('d.is_verified', 'verified');
		$this->db->where('d.id_diskusi', $id_diskusi);
		return $this->db->get()->result();
	}

	public function getDetailDiskusi($id_diskusi)
	{
		$this->db->from('detail_diskusi d');
		$this->db->join('users u', 'd.id_user = u.id_user', 'left');
		$this->db->where('d.is_verified', 'verified');
		$this->db->where('id_diskusi', $id_diskusi);
		$this->db->order_by('id_detail_diskusi', 'desc');
		return $this->db->get()->result();
	}

	public function createReply($data)
	{
		$this->db->insert('detail_diskusi', $data);
	}

	public function getMentorByIDU($id_user)
	{
		$this->db->from('mentors');
		$this->db->where('id_user', $id_user);
		return $this->db->get()->result();
	}

	public function getTimByIDU($id_user)
	{
		$this->db->from('tims');
		$this->db->where('id_user', $id_user);
		return $this->db->get()->result();
	}
}

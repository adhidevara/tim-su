<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function getTim()
	{
		$this->db->from('tims');
		return $this->db->get()->result();
	}

	public function getMentor()
	{
		$this->db->from('mentors');
		return $this->db->get()->result();
	}

	public function getMyProfile($id_admin)
	{
		$this->db->from('admins');
		$this->db->where('id_admin', $id_admin);
		return $this->db->get()->result();
	}

	public function getTasks()
	{
		$this->db->select('t.*, tm.nama as nama_tim, tm.foto as foto_tim, m.nama as nama_mentor, m.foto as foto_mentor');
		$this->db->from('tasks t');
		$this->db->join('tims tm', 'tm.id_tim = t.id_tim');
		$this->db->join('mentors m', 'm.id_mentor = t.id_mentor');
		return $this->db->get()->result();
	}

	public function getProgress()
	{
		$this->db->select('p.*, tm.nama as nama_tim, tm.foto as foto_tim, m.nama as nama_mentor, m.foto as foto_mentor');
		$this->db->from('progresses p');
		$this->db->join('tims tm', 'tm.id_tim = p.id_tim');
		$this->db->join('mentors m', 'm.id_mentor = p.id_mentor');
		return $this->db->get()->result();
	}

	public function updateDiskusi($id_diskusi, $data)
	{
		$this->db->where('id_diskusi', $id_diskusi);
		$this->db->update('diskusi', $data);
	}

	public function getDiskusi()
	{
		$this->db->select('*');
		$this->db->from('diskusi d');
		$this->db->join('users u', 'd.id_user = u.id_user', 'left');
		$this->db->where('d.is_verified', 'unverified');
		$this->db->order_by('d.created_at', 'desc');
		return $this->db->get()->result();
	}

	public function getDetailDiskusi($id_diskusi)
	{
		$this->db->from('detail_diskusi d');
		$this->db->join('users u', 'd.id_user = u.id_user', 'left');
		$this->db->where('d.is_verified', 'unverified');
		$this->db->where('id_diskusi', $id_diskusi);
		$this->db->order_by('id_detail_diskusi', 'desc');
		return $this->db->get()->result();
	}

	public function getDiskusiById($id_diskusi)
	{
		$this->db->select('*, d.is_verified as dis_verified');
		$this->db->from('diskusi d');
		$this->db->join('users u', 'd.id_user = u.id_user', 'left');
		$this->db->where('d.is_verified', 'unverified');
		$this->db->where('d.id_diskusi', $id_diskusi);
		return $this->db->get()->result();
	}

	public function insert($tb, $data)
	{
		$this->db->insert($tb, $data);
	}

	public function update($id, $id_val, $tb, $data)
	{
		$this->db->where($id, $id_val);
		$this->db->update($tb, $data);
	}

	public function jmlTimTerdaftar()
	{
		$this->db->from('tims');
		return $this->db->get()->result();
	}

	public function jmlMentorAktif()
	{
		$this->db->select('m.*');
		$this->db->distinct();
		$this->db->from('mentors m');
		$this->db->join('tims t', 'm.id_mentor = t.id_mentor');
		return $this->db->get()->result();
	}

	public function jmlAdmin()
	{
		$this->db->from('admins');
		return $this->db->get()->result();
	}

	public function jmlDiskusi()
	{
		$this->db->from('diskusi');
		return $this->db->get()->result();
	}

	public function getMateri()
	{
		$this->db->from('materi');
		return $this->db->get()->result();
	}

}

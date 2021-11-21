<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('userdata')){
			redirect("/");
		}
		else{
			if ($this->session->userdata['userdata']['role'] !== 'admin'){
				redirect("/");
			}
		}
		$this->load->model('M_akun');
		$this->load->model('M_tim');
		$this->load->model('M_mentor');
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data['getMyProfile']		= $this->M_admin->getMyProfile($this->session->all_userdata()['userdata']['id_admin']);
		$data['getNews'] 			= $this->M_tim->getNews();
		$data['getEvent']			= $this->M_tim->getEvent();
		$data['getMateri']			= $this->M_tim->getMateri();
		$this->load->view('dash_admin/index', $data);
	}

	public function vUsers()
	{
		$data['getTim'] = $this->M_admin->getTim();
		$data['getMentor'] = $this->M_admin->getMentor();
		$this->load->view('dash_admin/users', $data);
	}

	public function vTasks()
	{
		$data['tasks'] = $this->M_admin->getTasks();
		$this->load->view('dash_admin/tasks', $data);
	}

	public function updateTaskStatus($id_task)
	{
		$input = $this->input->post();

		if ($input['review'] == "0"){
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Form harus di Isi',
						text: 'Ups, mungkin anda belum mengisi form nya',
					}).then(function() {
						window.location = '<?= base_url("manage-tasks") ?>';
					});
				});
			</script>
			<?php
		}else{
			$data = [
				'review' => $input['review']
			];
			$this->M_tim->uploadAttachment($id_task, $data);
			redirect('manage-tasks');
		}
	}

	public function vProgress()
	{
		$data['progress'] = $this->M_admin->getProgress();
		$this->load->view('dash_admin/progress', $data);
	}

	public function updateProgressStatus($id_progresses)
	{
		$input = $this->input->post();

		if ($input['status'] == "0"){
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Form harus di Isi',
						text: 'Ups, mungkin anda belum mengisi form nya',
					}).then(function() {
						window.location = '<?= base_url("manage-progress") ?>';
					});
				});
			</script>
			<?php
		}else{
			$data = [
				'status' => $input['status']
			];
			$this->M_tim->updateProgress($data, $id_progresses);
			redirect('manage-progress');
		}
	}

	public function isUnverif($id, $case)
	{
		if ($case == 'tasks'){
			$data = [
				'is_verified' => '0'
			];
			$this->M_admin->update('id_task', $id, $case, $data);
			redirect('manage-tasks');
		}
		elseif ($case == 'progresses'){
			$data = [
				'is_verified' => '0'
			];
			$this->M_admin->update('id_progresses', $id, $case, $data);
			redirect('manage-progress');
		}
		elseif ($case == 'tims'){
			$data = [
				'is_verified' => 'unverified'
			];
			$this->M_admin->update('id_tim', $id, $case, $data);
			redirect('manage-user');
		}
		elseif ($case == 'mentors'){
			$data = [
				'is_verified' => 'unverified'
			];
			$this->M_admin->update('id_mentor', $id, $case, $data);
			redirect('manage-user');
		}
	}

	public function isVerif($id, $case)
	{
		if ($case == 'tasks'){
			$data = [
				'is_verified' => '1'
			];
			$this->M_admin->update('id_task', $id, $case, $data);
			redirect('manage-tasks');
		}
		elseif ($case == 'progresses'){
			$data = [
				'is_verified' => '1'
			];
			$this->M_admin->update('id_progresses', $id, $case, $data);
			redirect('manage-progress');
		}
		elseif ($case == 'tims'){
			$data = [
				'is_verified' => 'verified'
			];
			$this->M_admin->update('id_tim', $id, $case, $data);
			redirect('manage-user');
		}
		elseif ($case == 'mentors'){
			$data = [
				'is_verified' => 'verified'
			];
			$this->M_admin->update('id_mentor', $id, $case, $data);
			redirect('manage-user');
		}
	}

	public function proCreateDiscussion()
	{
		$input = $this->input->post();
		$data = [
			'id_user'		=> $this->session->all_userdata()['userdata']['id_user'],
			'judul'			=> $input['judul'],
			'isi'			=> $input['isi'],
		];
		$this->M_tim->createDiscussion($data);
		redirect('manage-discussion');
	}

	public function vDiscussion()
	{
		$diskusi = $this->M_tim->getDiskusi();
		$data = [];
		foreach ($diskusi as $ds){
			$jmlDetailDiskusi = count($this->M_tim->getDetailDiskusi($ds->id_diskusi));
			$data['diskusi'][] = [
				$ds,
				'jml'		 => $jmlDetailDiskusi
			];
		}

		$diskusinon = $this->M_admin->getDiskusi();
		foreach ($diskusinon as $dsn){
			$jmlDetailDiskusin = count($this->M_admin->getDetailDiskusi($dsn->id_diskusi));
			$data['diskusinon'][] = [
				$dsn,
				'jml'		 => $jmlDetailDiskusin
			];
		}

		$this->load->view('dash_admin/diskusi', $data);
	}

	public function vDetailDiscussion($id)
	{
		$diskusi = $this->M_tim->getDiskusiById($id);
		$data = [];
		foreach ($diskusi as $ds){
			$jmlDetailDiskusi = count($this->M_tim->getDetailDiskusi($ds->id_diskusi));
			$data['diskusi'][] = [
				$ds,
				'jml'		 => $jmlDetailDiskusi
			];
		}
		$data['detailDiskusi'] = $this->M_tim->getDetailDiskusi($id);
		if (count($data['diskusi']) == 0){
			redirect(base_url('manage-discussion'));
		}
		else{
			$this->load->view('dash_admin/detail-diskusi', $data);
		}
	}

	public function vDetailDiscussionNon($id)
	{
		$diskusi = $this->M_admin->getDiskusiById($id);
		$data = [];
		foreach ($diskusi as $ds){
			$jmlDetailDiskusi = count($this->M_admin->getDetailDiskusi($ds->id_diskusi));
			$data['diskusi'][] = [
				$ds,
				'jml'		 => $jmlDetailDiskusi
			];
		}
		$data['detailDiskusi'] = $this->M_admin->getDetailDiskusi($id);
		if (count($data['diskusi']) == 0){
			redirect(base_url('manage-discussion'));
		}
		else{
			$this->load->view('dash_admin/detail-diskusi', $data);
		}
	}

	public function replyDiskusi($id)
	{
		$input = $this->input->post();
		$data = [
			'id_diskusi'	=> $id,
			'id_user'		=> $this->session->all_userdata()['userdata']['id_user'],
			'isi'			=> $input['balas'],
			'is_verified'	=> 'verified',
		];
		$this->M_tim->createReply($data);
		redirect('manage-detail-discussion/'.$id);
	}

	public function deletePost($id_diskusi)
	{
		$data = [
			'is_verified'	=> 'unverified'
		];
		$this->M_admin->updateDiskusi($id_diskusi, $data);
		redirect('manage-discussion');
	}

	public function updatePost($id_diskusi)
	{
		$data = [
			'is_verified'	=> 'verified'
		];
		$this->M_admin->updateDiskusi($id_diskusi, $data);
		redirect('manage-discussion');
	}

	public function vMNE()
	{
		$data['materi'] = $this->M_tim->getMateri();
		$data['news'] = $this->M_tim->getNews();
		$data['event'] = $this->M_tim->getEvent();
		$this->load->view('dash_admin/materi-news-event', $data);
	}

	public function addMateri()
	{
		$input = $this->input->post();
		$config['file_name'] = $input['id_materi'].$this->session->all_userdata()['userdata']['id_admin']."-".$input['judul']."-".date("Y-m-d H-i-s");
		$config['upload_path'] = './assets/materiFoto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '10000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: '<?php echo $error['error']; ?>',
					}).then(function() {
						window.location = '<?= base_url("/manage-materi-news-event-mentor") ?>';
					});
				});
			</script>
			<?php
		}
		else{
			$data 	= $this->upload->data();
			$data = array(
				'foto'		=> base_url().'assets/materiFoto/'.$data['file_name'],
				'judul'		=> $input['judul'],
				'url' 		=> $input['url'],
			);
			$this->M_mentor->insertMateri($data);
			redirect(base_url().'manage-materi-news-event-mentor', 'refresh');
		}
	}

	public function addNews()
	{
		$input = $this->input->post();
		$config['file_name'] = $input['id_news'].$this->session->all_userdata()['userdata']['id_admin']."-".$input['judul']."-".date("Y-m-d H-i-s");
		$config['upload_path'] = './assets/newsFoto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '10000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: '<?php echo $error['error']; ?>',
					}).then(function() {
						window.location = '<?= base_url("/manage-materi-news-event-mentor") ?>';
					});
				});
			</script>
			<?php
		}
		else{
			$data 	= $this->upload->data();
			$data = array(
				'id_admin'	=> $this->session->all_userdata()['userdata']['id_admin'],
				'foto'		=> base_url().'assets/newsFoto/'.$data['file_name'],
				'judul'		=> $input['judul'],
				'link' 		=> $input['link'],
			);
			$this->M_admin->insert('news', $data);
			redirect(base_url().'manage-materi-news-event-mentor', 'refresh');
		}
	}

	public function addEvent()
	{
		$input = $this->input->post();
		$config['file_name'] = $input['id_event'].$this->session->all_userdata()['userdata']['id_admin']."-".$input['judul']."-".date("Y-m-d H-i-s");
		$config['upload_path'] = './assets/eventFoto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '10000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: '<?php echo $error['error']; ?>',
					}).then(function() {
						window.location = '<?= base_url("/manage-materi-news-event-mentor") ?>';
					});
				});
			</script>
			<?php
		}
		else{
			$data 	= $this->upload->data();
			$data = array(
				'id_admin'	=> $this->session->all_userdata()['userdata']['id_admin'],
				'foto'		=> base_url().'assets/eventFoto/'.$data['file_name'],
				'judul'		=> $input['judul'],
				'deskripsi'	=> $input['deskripsi'],
				'tanggal'	=> $input['tanggal']
			);
			$this->M_admin->insert('events', $data);
			redirect(base_url().'manage-materi-news-event-mentor', 'refresh');
		}

	}

}

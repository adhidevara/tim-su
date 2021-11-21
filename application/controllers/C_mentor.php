<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_mentor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('userdata')){
			redirect("/");
		}
		else{
			if ($this->session->userdata['userdata']['role'] !== 'mentor'){
				redirect("/");
			}
		}
		$this->load->model('M_akun');
		$this->load->model('M_tim');
		$this->load->model('M_mentor');
	}

	public function index()
	{
		$data['getJmlTim'] 				= count($this->M_mentor->getTimbyMentor($this->session->all_userdata()['userdata']['id_mentor']));
		$data['getTim']		 			= $this->M_mentor->getTimbyMentor($this->session->all_userdata()['userdata']['id_mentor']);
		$data['getTaskUnreviewed'] 		= count($this->M_mentor->getTaskUnreviewed($this->session->all_userdata()['userdata']['id_mentor']));
		$data['getTaskReviewed'] 		= count($this->M_mentor->getTaskReviewed($this->session->all_userdata()['userdata']['id_mentor']));
		$data['getProgressNeedChecked']	= count($this->M_mentor->getProgressNeedChecked($this->session->all_userdata()['userdata']['id_mentor']));
		$data['getProgressChecked'] 	= count($this->M_mentor->getProgressChecked($this->session->all_userdata()['userdata']['id_mentor']));
		$data['getEvent']				= $this->M_tim->getEvent();
		$data['getNews'] 				= $this->M_tim->getNews();
		$data['getMateri']				= $this->M_tim->getMateri();

		$this->load->view('dash_mentor/index', $data);
	}

	public function vPickTims()
	{
		$data['allTim'] = $this->M_mentor->allTim($this->session->all_userdata()['userdata']['id_mentor']);
		$data['myTim']	= $this->M_mentor->getTimbyMentor($this->session->all_userdata()['userdata']['id_mentor']);
		$this->load->view('dash_mentor/pickTims', $data);
	}

	public function pickTim($id_tim)
	{
		$tim = $this->M_mentor->getTimByID($id_tim);

		if (count($tim) == 0){
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Tim Tidak Ditemukan',
						text: 'Ups, mungkin tim yang anda pilih tidak ada',
					}).then(function() {
						window.location = '<?= base_url("pick-tim") ?>';
					});
				});
			</script>
			<?php
		}else{
			$myTim	= $this->M_mentor->getTimbyMentor($this->session->all_userdata()['userdata']['id_mentor']);
			if (count($myTim) >= 3){
				?>
				<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
				<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function() {
						Swal.fire({
							icon: 'error',
							title: 'Tim yang anda pilih lebih dari 3',
							text: 'Ups, mungkin tim yang anda pilih sudah mencapai maksimal pemilihan',
						}).then(function() {
							window.location = '<?= base_url("pick-tim") ?>';
						});
					});
				</script>
				<?php
			}else{
				$data = [
					'id_mentor'	=> $this->session->all_userdata()['userdata']['id_mentor']
				];
				$this->M_mentor->updateTim($id_tim, $data);
				redirect('pick-tim');
			}
		}
	}

	public function vTasks()
	{
		$data['tasks'] = $this->M_mentor->getTasks($this->session->all_userdata()['userdata']['id_mentor']);
		$this->load->view('dash_mentor/tasks', $data);
	}

	public function submitTask()
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
						title: 'Form Harus diisi',
						text: 'Ups, mungkin form anda masih kosong',
					}).then(function() {
						window.location = '<?= base_url("/review-tasks") ?>';
					});
				});
			</script>
			<?php
		}else{
			$data = array(
				'review' 		=> $input['review'],
			);
			$this->M_tim->uploadAttachment($input['id_task'], $data);
			redirect(base_url().'review-tasks', 'refresh');
		}
	}

	public function vProgress()
	{
		$bg = ['info', 'danger', 'dark', 'primary', 'blue-dark', 'blue', 'blue-light', 'secondary', 'danger'];
		$progress = $this->M_mentor->getProgress($this->session->all_userdata()['userdata']['id_mentor']);
		$data = [];
		foreach ($progress as $pro){
			$getData = [
				'id_progresses' 		=> $pro->id_progresses,
				'id_tim'				=> $pro->id_tim,
				'id_mentor'				=> $pro->id_mentor,
				'judul'					=> $pro->judul,
				'presentase_target'		=> $pro->presentase_target,
				'presentase_progress'	=> $pro->presentase_progress,
				'bulan'					=> $pro->bulan,
				'minggu_ke'				=> $pro->minggu_ke,
				'deskripsi'				=> $pro->deskripsi,
				'status'				=> $pro->status,
				'created_at'			=> $pro->created_at,
				'bg'  					=> $bg_rand = $bg[array_rand($bg)]
			];
			$data['progress'][] = $getData;
		}
		$this->load->view('dash_mentor/progress', $data);
	}

	public function updateProgress($id)
	{
		$input = $this->input->post();
		$data = [
			'status' => $input['status'],
		];
		$this->M_tim->updateProgress($data, $id);
		redirect(base_url('cek-progress'));
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
		redirect('discussion-mentor');
	}

	public function vCreateTask()
	{
		$data['tim'] = $this->M_mentor->getTimByMentor($this->session->all_userdata()['userdata']['id_mentor']);
		$this->load->view('dash_mentor/createTask', $data);
	}

	public function proCreateTask()
	{
		$input = $this->input->post();

		if ($input['judul'] == "" || $input['id_tim'] == 0 || $input['deskripsi'] == ""){
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Form Harus Diisi',
						text: 'Ups, semua form harus diisi yah!',
					}).then(function() {
						window.location = '<?= base_url("/create-task")?>';
					});
				});
			</script>
			<?php
		}else{
			$data = [
				'id_tim'				=> $input['id_tim'],
				'id_mentor'				=> $this->session->all_userdata()['userdata']['id_mentor'],
				'judul'					=> $input['judul'],
				'deskripsi'				=> $input['deskripsi']
			];
			$this->M_mentor->createTasks($data);
			redirect(base_url('review-tasks'));
		}
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
		$this->load->view('dash_mentor/diskusi', $data);
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
			redirect(base_url('discussion-mentor'));
		}
		else{
			$this->load->view('dash_mentor/detail-diskusi', $data);
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
		redirect('detail-discussion-mentor/'.$id);
	}

	public function vMNE()
	{
		$data['materi'] = $this->M_tim->getMateri();
		$data['news'] = $this->M_tim->getNews();
		$data['event'] = $this->M_tim->getEvent();
		$this->load->view('dash_mentor/materi-news-event', $data);
	}

	public function addMateri()
	{
		$input = $this->input->post();
		$config['file_name'] = $input['id_materi'].$this->session->all_userdata()['userdata']['id_mentor']."-".$input['judul']."-".date("Y-m-d H-i-s");
		$config['upload_path'] = './assets/materiFoto';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '10000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: '<?php echo $error['error']; ?>',
					}).then(function() {
						window.location = '<?= base_url() ?>materi-news-event-mentor';
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
			redirect(base_url().'materi-news-event-mentor', 'refresh');
		}
	}
}

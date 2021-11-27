<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_tim extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('userdata')){
			redirect("/");
		}
		else{
			if ($this->session->userdata['userdata']['role'] !== 'tim-su'){
				redirect("/");
			}
		}
		$this->load->model('M_akun');
		$this->load->model('M_tim');
	}

	public function index()
	{
		$data['getMonthlyProgress'] = $this->M_tim->getMonthlyProgress($this->session->all_userdata()['userdata']['id_tim']);
		$data['cntAllTask'] 		= $this->M_tim->cntAllTask($this->session->all_userdata()['userdata']['id_tim']);
		$data['jmlTaskSelesai'] 	= $this->M_tim->jmlTaskSelesai($this->session->all_userdata()['userdata']['id_tim']);
		$data['getProgressSelesai'] = $this->M_tim->getProgressSelesai($this->session->all_userdata()['userdata']['id_tim']);
		$data['getMyMentor']		= $this->M_tim->getMyMentor($this->session->all_userdata()['userdata']['id_mentor']);
		$data['getNews'] 			= $this->M_tim->getNews();
		$data['getEvent']			= $this->M_tim->getEvent();
		$data['getMateri']			= $this->M_tim->getMateri();

		$this->load->view('dash_tim/index', $data);
	}

	public function vTasks()
	{
		$data['tasks'] = $this->M_tim->getTasks($this->session->all_userdata()['userdata']['id_tim']);
		$this->load->view('dash_tim/tasks', $data);
	}

	public function submitTask()
	{
		$input = $this->input->post();
		$config['file_name'] = $input['id_task']."-".$input['id_tim']."-".$input['nama']."-".$input['tgl'];
		$config['upload_path'] = './assets/taskFiles';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '10000';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('attachment')){
			$data = array(
				'attachment'	=> '#',
				'jawaban'		=> $input['jawaban'],
				'review' 		=> 'Belum Direview',
			);
			$this->M_tim->uploadAttachment($input['id_task'], $data);
			redirect(base_url().'tasks', 'refresh');
		}
		else{
			$data 	= $this->upload->data();
			$data = array(
				'attachment'	=> base_url().'assets/taskFiles/'.$data['file_name'],
				'jawaban'		=> $input['jawaban'],
				'review' 		=> 'Belum Direview',
			);
			$this->M_tim->uploadAttachment($input['id_task'], $data);
			redirect(base_url().'tasks', 'refresh');
		}
	}

	public function vProgress()
	{
		$bg = ['info', 'danger', 'dark', 'primary', 'blue-dark', 'blue', 'blue-light', 'secondary', 'danger'];
		$progress = $this->M_tim->getProgress($this->session->all_userdata()['userdata']['id_tim']);
		if (count($progress) == 0){
			$getData = [
				'id_progresses' 		=> 0,
				'id_tim'				=> 0,
				'id_mentor'				=> 0,
				'judul'					=> '',
				'presentase_target'		=> '',
				'presentase_progress'	=> '',
				'bulan'					=> '',
				'minggu_ke'				=> '',
				'deskripsi'				=> '',
				'note_tim'				=> '',
				'note_mentor'			=> '',
				'status'				=> '',
				'created_at'			=> '',
				'bg'  					=> $bg_rand = $bg[array_rand($bg)]
			];
			$data['progress'][] = $getData;
		}else{
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
					'note_tim'				=> $pro->note_tim,
					'note_mentor'			=> $pro->note_mentor,
					'status'				=> $pro->status,
					'created_at'			=> $pro->created_at,
					'bg'  					=> $bg_rand = $bg[array_rand($bg)]
				];
				$data['progress'][] = $getData;
			}
		}
		$this->load->view('dash_tim/progress', $data);
	}

	public function vCreateProgress()
	{
		$this->load->view('dash_tim/createProgress');
	}

	public function updateProgress($id)
	{
		$input = $this->input->post();
		$data = [
			'presentase_progress' => $input['presentase_progress'],
			'status'			  => 'sedang dicek',
			'note_tim'			  => $input['note_tim']
		];
		$this->M_tim->updateProgress($data, $id);
		redirect(base_url('progress'));
	}

	public function proCreateProgress()
	{
		$input = $this->input->post();

		if ($input['judul'] == "" || $input['bulan'] == 0 || $input['minggu_ke'] == 0  || $input['presentase_target'] == "" || $input['deskripsi'] == ""){
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
						window.location = '<?= base_url("/create-progress")?>';
					});
				});
			</script>
			<?php
		}else{
			$data = [
				'id_tim'				=> $this->session->all_userdata()['userdata']['id_tim'],
				'id_mentor'				=> $this->session->all_userdata()['userdata']['id_mentor'],
				'judul'					=> $input['judul'],
				'bulan'					=> $input['bulan'],
				'minggu_ke'				=> $input['minggu_ke'],
				'presentase_target'		=> $input['presentase_target'],
				'presentase_progress'	=> '0',
				'status'				=> 'belum dicek',
				'deskripsi'				=> $input['deskripsi']
			];
			$this->M_tim->createProgress($data);
			redirect(base_url('progress'));
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
		redirect('discussion');
	}

	public function vDiscussion()
	{
		error_reporting(0);
		$diskusi = $this->M_tim->getDiskusi();
		$data = [];
		foreach ($diskusi as $ds){
			$jmlDetailDiskusi = count($this->M_tim->getDetailDiskusi($ds->id_diskusi));
			$data['diskusi'][] = [
				$ds,
				'jml'		 => $jmlDetailDiskusi
			];
		}
		$this->load->view('dash_tim/diskusi', $data);
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
			redirect(base_url('discussion'));
		}
		else{
			$this->load->view('dash_tim/detail-diskusi', $data);
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
		redirect('detail-discussion/'.$id);
	}

	public function vMNE()
	{
		$data['materi'] = $this->M_tim->getMateri();
		$data['news'] = $this->M_tim->getNews();
		$data['event'] = $this->M_tim->getEvent();
		$this->load->view('dash_tim/materi-news-event', $data);
	}
}

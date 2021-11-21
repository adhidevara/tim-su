<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_akun');
	}

	public function index()
	{
		$this->load->view('page-main');
	}

	public function login()
	{
		$input = $this->input->get();

		if ($input['usercontext'] == md5('tim-su') || $input['usercontext'] == md5('mentor') || $input['usercontext'] == md5('admin')){
			$this->load->view('page-login', $input);
		}
		else{
			redirect("/");
		}
	}

	public function proLogin()
	{
		$input = $this->input->post();

		if ($input['role'] == md5('tim-su')){
			$cekAkun = $this->M_akun->getAkun('tims', 'email', $input['email']);
			$role = 'tim-su';
			$redirectTo = "dashboard-tim";
			$userdata = array(
				'role'			=> $role,
				'id_tim' 		=> $cekAkun[0]->id_tim,
				'id_user' 		=> $cekAkun[0]->id_user,
				'id_mentor' 	=> $cekAkun[0]->id_mentor,
				'nama' 			=> $cekAkun[0]->nama,
				'email' 		=> $cekAkun[0]->email,
				'password' 		=> $cekAkun[0]->password,
				'notelp' 		=> $cekAkun[0]->notelp,
				'nama_ketua' 	=> $cekAkun[0]->nama_ketua,
				'email_ketua' 	=> $cekAkun[0]->email_ketua,
				'notelp_ketua' 	=> $cekAkun[0]->notelp_ketua,
				'foto'			=> $cekAkun[0]->foto,
				'is_verified' 	=> $cekAkun[0]->is_verified,
				'created_at' 	=> $cekAkun[0]->created_at,
			);
		}
		elseif ($input['role'] == md5('mentor')){
			$cekAkun = $this->M_akun->getAkun('mentors', 'email', $input['email']);
			$role = 'mentor';
			$redirectTo = "dashboard-mentor";
			$userdata = array(
				'role'			=> $role,
				'id_mentor' 	=> $cekAkun[0]->id_mentor,
				'id_user' 		=> $cekAkun[0]->id_user,
				'nama' 			=> $cekAkun[0]->nama,
				'email' 		=> $cekAkun[0]->email,
				'password' 		=> $cekAkun[0]->password,
				'notelp' 		=> $cekAkun[0]->notelp,
				'foto'			=> $cekAkun[0]->foto,
				'is_verified' 	=> $cekAkun[0]->is_verified,
				'created_at' 	=> $cekAkun[0]->created_at,
			);
		}
		elseif ($input['role'] == md5('admin')){
			$cekAkun = $this->M_akun->getAkun('admins', 'email', $input['email']);
			$role = 'admin';
			$redirectTo = "dashboard-admin";
			$userdata = array(
				'role'			=> $role,
				'id_admin' 		=> $cekAkun[0]->id_admin,
				'id_user' 		=> $cekAkun[0]->id_user,
				'nama' 			=> $cekAkun[0]->nama,
				'email' 		=> $cekAkun[0]->email,
				'password' 		=> $cekAkun[0]->password,
				'notelp' 		=> $cekAkun[0]->notelp,
				'foto'			=> $cekAkun[0]->foto,
				'created_at' 	=> $cekAkun[0]->created_at,
			);
		}

		if (count($cekAkun) !== 0 && count($cekAkun) == 1){
			if ($input['password'] == $this->encryption->decrypt($cekAkun[0]->password)){
				$this->session->set_userdata('userdata', $userdata);
				redirect($redirectTo."?preload=1");
			}
			else{
				?>
				<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
				<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function() {
						Swal.fire({
							icon: 'error',
							title: 'Password Salah',
							text: 'Ups, mungkin password anda tidak sesuai',
						}).then(function() {
							window.location = '<?= base_url("/login?usercontext=".md5($role)) ?>';
						});
					});
				</script>
				<?php
			}
		}
		else{
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Akun Tidak Ditemukan',
						text: 'Ups, mungkin akun anda belum terdaftar',
					}).then(function() {
						window.location = '<?= base_url("/login?usercontext=".md5($role)) ?>';
					});
				});
			</script>
			<?php
		}
	}

	public function regist_tim()
	{
		$this->load->view('page-register');
	}

	public function proRegist()
	{
		$input = $this->input->post();
		$cekTim = $this->M_akun->getAkun('tims', 'email', $input['email-tim']);

		if (count($cekTim) == 0){
			if ($input['email-tim'] == "" || $input['password'] == "" || $input['nama-tim'] == "" || $input['password'] == "" ||
				$input['notelp-tim'] == "" || $input['nama-ketua'] == "" || $input['email-ketua'] == "" || $input['notelp-ketua'] == ""){
				?>
				<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
				<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function() {
						Swal.fire({
							icon: 'error',
							title: 'Form Belum Lengkap',
							text: 'Ups, mungkin form ada yang belum diisi',
						}).then(function() {
							window.location = '<?= base_url() ?>admin/regisadmin?err=passmiss';
						});
					});
				</script>
				<?php
			}
			else{
				if ($input['password'] == $input['re-password']){
					$this->M_akun->createAkun('users', [
						'nama'		=> $input['nama-tim'],
						'email' 	=> $input['email-tim'],
						'role'		=> 'Tim-su',
						'password'	=> $this->encryption->encrypt($input['password']),
					]);
					$getUser = $this->M_akun->getAkun('users', 'email', $input['email-tim']);
					$this->M_akun->createAkun('tims', [
						'id_user'		=> $getUser[0]->id_user,
						'nama'		=> $input['nama-tim'],
						'email'		=> $input['email-tim'],
						'password'	=> $this->encryption->encrypt($input['password']),
						'notelp'	=> $input['notelp-tim'],
						'nama_ketua'	=> $input['nama-ketua'],
						'email_ketua'	=> $input['email-ketua'],
						'notelp_ketua'	=> $input['notelp-ketua'],
					]);
					redirect("/login?usercontext=".md5('tim-su'));
				}
				else{
					?>
					<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
					<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
					<script type="text/javascript">
						$(document).ready(function() {
							Swal.fire({
								icon: 'error',
								title: 'Password Tidak Sama',
								text: 'Ups, mungkin password anda tidak sama',
							}).then(function() {
								window.location = '<?= base_url() ?>';
							});
						});
					</script>
					<?php
				}
			}
		}
		else{
			?>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			<script src="<?php echo base_url('assets') ?>/js/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					Swal.fire({
						icon: 'error',
						title: 'Akun Sudah Ada',
						text: 'Ups, mungkin akun anda sudah terdaftar',
					}).then(function() {
						window.location = '<?= base_url() ?>';
					});
				});
			</script>
			<?php
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}

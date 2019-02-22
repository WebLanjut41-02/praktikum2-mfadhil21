<?php  
	/**
	 * 
	 */
	class login extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_data');		
		}

		function index()
		{
			$this->load->view('V_login');
		}
		function act_log()
		{
			$nama = $this->input->post('nama');
			$nip = $this->input->post('nip');

			$where = array(
					'nama' => $nama,
					'nip'  => $nip
				);
			$cek = $this->M_data->cek_login("karyawan", $where)->num_rows();
			if($cek >0){
				$data_session = array(
								'nama' => $nama ,
								'status' => 'login'
								 );
			$this->session->set_userdata( $data_session );

			redirect(base_url("admin"));
			
			}else{
				echo "nama dan nip anda salah";
			}

			function logout(){
				$this->session->sess_destroy();
				redirect(base_url('C_login'))
			}
			
		}
	}
?>
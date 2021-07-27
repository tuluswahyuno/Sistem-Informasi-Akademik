<?php 

/**
 * 
 */
class Nilai extends CI_Controller
{
	
	public function index()
	{
		$data = array (

			'nim' => set_value('nim'),
			'id_thn_ak' => set_value('id_thn_ak')

		);


		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/masuk_khs',$data);
		$this->load->view('templates_administrator/footer');
	}


	public function nilai_aksi()
	{
		$this->_rulesKHS();

		if($this->form_validation->run() == FALSE )
			{
				$this->index();
			}else{
				$nim = $this->input->post('nim', TRUE);
				$id_thn_ak = $this->input->post('id_thn_ak', TRUE);

				$query = "SELECT krs.id_thn_ak,krs.kode_matakuliah,matakuliah.nama_matakuliah,matakuliah.sks,krs.nilai
					FROM
						krs
					INNER JOIN matakuliah
					ON (krs.kode_matakuliah = matakuliah.kode_matakuliah) WHERE krs.nim=$nim AND krs.id_thn_ak=$id_thn_ak";

				$sql = $this->db->query($query)->result();

				$smt = $this->db->select('tahun_akademik,semester')
					->from('tahun_akademik')
					->where(array('id_thn_ak'=>$id_thn_ak))->get()->row();

				$query_str = "SELECT mahasiswa.nim,
							 mahasiswa.nama_lengkap,
							 prodi.nama_prodi
							 FROM
							 	mahasiswa
							 INNER JOIN prodi
							 ON (mahasiswa.nama_prodi = prodi.nama_prodi);";

				$mhs = $this->db->query($query_str)->row();

				if($smt->semester == 'Ganjil')
					{
						$tampilSemester = "Ganjil";
					}else{
						$tampilSemester = "Genap";
				}

				$data = array (

					'mhs_data' => $sql,
					'mhs_nim' => $nim,
					'mhs_nama' => $mhs->nama_lengkap,
					'mhs_prodi' => $mhs->nama_prodi,
					'id_thn_ak' => $smt->tahun_akademik."(".$tampilSemester.")"
				);


		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/khs',$data);
		$this->load->view('templates_administrator/footer');

		}
	}


	public function _rulesKHS()
	{
		$this->form_validation->set_rules('nim','nim','required');
		$this->form_validation->set_rules('id_thn_ak','id_thn_ak','required');
	}







}


 ?>
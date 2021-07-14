<?php 

/**
 * 
 */
class Login_model extends CI_Model
{
	private $_table = "user";
	
	public function cek_login($username,$password)
	{
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		return $this->db->get('user');
	}

	public function getLoginData($user,$pass)
	{
		$u = $user;
		$p = MD5($pass);

		$query_cekLogin = $this->db->get_where('user', array('username' => $u, 'password' => $p));

		if (count($query_cekLogin->result()) > 0)
		{
			foreach ($query_cekLogin->result() as $qck)
			{
				foreach ($query_cekLogin->result() as $ck)
				{
					$sess_data ['logged_in'] = TRUE;
					$sess_data ['username'] = $ck->username;
					$sess_data ['password'] = $ck->password;
					$sess_data ['level'] 	= $ck->level;
					/*$this->session->set_userdata(['user_logged' => $user]);*/
					$this->session->set_userdata($sess_data);



				}
				redirect('administrator/dashboard');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
							username atau Password Anda Salah !
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
			redirect('administrator/auth');
		}

	}

	public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }


    private function _updateLastLogin($id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id={$id}";
        $this->db->query($sql);
    }
}

 ?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simple_login
{

	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI = &get_instance();
	}

	// Login
	public function login($username, $password)
	{
		// Query untuk pencocokan data
		$query = $this->CI->db->get_where('user', array(
			'username' => $username,
			'password' => sha1($password)
		));

		// Jika ada hasilnya
		if ($query->num_rows() == 1) {
			$row 	= $this->CI->db->query('SELECT * FROM user WHERE username = "' . $username . '"');
			$admin 	= $row->row();
			$id 	= $admin->id;
			$name	= $admin->name;
			$akses_level	= $admin->akses_level;

			// $_SESSION['username'] = $username;
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('akses_level', $akses_level);
			$this->CI->session->set_userdata('name', $name);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $id);
			// Kalau benar di redirect			
			redirect(base_url('entri_baru'));
		} else {
			$this->CI->session->set_flashdata('sukses', 'Username/password salah');
			redirect(base_url() . 'login');
		}
		return false;
	}

	// Cek login
	public function cek_login()
	{
		if ($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses', 'Silahkan login dulu');
			redirect(base_url('login'));
		}
	}

	// Logout
	public function logout()
	{
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		$this->CI->session->unset_userdata('name');
		$this->CI->session->unset_userdata('id_login');
		//$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('sukses', 'Terimakasih, Anda berhasil logout');
		redirect(base_url() . 'login');
	}
}

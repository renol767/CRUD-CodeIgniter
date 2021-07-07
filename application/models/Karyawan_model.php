<?php

// Menbuat class Karyawan model yang mengextends CI_Model
class Karyawan_model extends CI_Model{

		// Construct untuk Meng-load Database
		public function __construct()
		{
			$this->load->database();
		}

		// Membuat Function get_karyawan untuk mengambil data dari mysql menggunakan query
		public function get_karyawan(){
			return $this->db->query("SELECT * FROM karyawan ORDER BY no_pegawai DESC")->result_array();
		}

		// Membuat function edit untuk mengambil 1 data yang akan di edit
		public function edit_data($where,$table){
			return $this->db->get_where($table,$where);
		}

		// Membuat function create data untuk menginputkan data ke mysql
		public function create_data(){
			// Membuat array inputan yang nantinya akan di inputkan
			$data = array(
                'no_pegawai' => $this->input->post('no_pegawai'),
                'nama' => $this->input->post('nama'),
                'jk' => $this->input->post('jk'),
                'status' => $this->input->post('status'),
                'tgllahir' => $this->input->post('tgllahir'),
                'alamat' => $this->input->post('alamat'),
				'nohp' => $this->input->post('nohp')
            );
			return $this->db->insert('karyawan', $data);
		}

		// Membuat function update untuk mengupdate data di mysql
		public function update($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		// Membuat function delete untuk menghapus data di mysql
		public function delete($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		// Membuat function get_keyword untuk mencari data yang ada di database
		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('karyawan');
			$this->db->like('no_pegawai', $keyword);
			// or like = ketika data tidak ada di kolom no_pegawai maka akan mencari di kolom yang lainnya
			$this->db->or_like('nama', $keyword);
			$this->db->or_like('jk', $keyword);
			$this->db->or_like('status', $keyword);
			$this->db->or_like('tgllahir', $keyword);
			$this->db->or_like('alamat', $keyword);
			$this->db->or_like('nohp', $keyword);
			return $this->db->get()->result_array();
		}

	}

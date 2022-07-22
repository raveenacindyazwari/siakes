<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model
{
    public function get($id = null, $id_bidang = null)
    {
        $this->db->select('data_siswa.*, bidang_keahlian.program_keahlian as program_keahlian, 
        kelas.kelas as kelas');
        $this->db->from('data_siswa');
        $this->db->join('bidang_keahlian', 'bidang_keahlian.id_bidang = data_siswa.id_bidang', 'left');
        $this->db->join('kelas', 'kelas.id_kelas = data_siswa.id_kelas', 'left');
        if ($id != null) {
            $this->db->where('id_siswa', $id);
        }
        if ($id_bidang != null) {
            $this->db->where('data_siswa.id_bidang', $id_bidang);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_jk($jk = null)
    {
        $this->db->select('count(id_siswa) as jumlah');
        $this->db->from('data_siswa');
        if ($jk != null) {
            $this->db->where('jenis_kelamin', $jk);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nisn' => $post['nisn'],
            'nik' => $post['nik'],
            'username' => $post['username'],
            'password' => md5($post['password']),
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'id_kelas' => $post['kelas'] == '' ? null : $post['kelas'],
            'nama_siswa' => $post['nama_siswa'],
            'asal_sekolah' => $post['asal_sekolah'],
            'tahun_masuk' => $post['tahun_masuk'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'agama' => $post['agama'],
            'nama_ayah' => $post['nama_ayah'],
            'nama_ibu' => $post['nama_ibu'],
            'pend_terakhir_ayah' => $post['pend_terakhir_ayah'],
            'pend_terakhir_ibu' => $post['pend_terakhir_ibu'],
            'pekerjaan_ayah' => $post['pekerjaan_ayah'],
            'pekerjaan_ibu' => $post['pekerjaan_ibu'],
            'alamat_orgtua' => $post['alamat_orgtua'],
            'nama_wali' => $post['nama_wali'],
            'pekerjaan_wali' => $post['pekerjaan_wali'],
            'alamat_wali' => $post['alamat_wali'],
            'no_telp_orgtua' => $post['no_telp_orgtua'],
        ];
        $this->db->insert('data_siswa', $params);
    }

    public function edit($post)
    {
        $params = [
            'nisn' => $post['nisn'],
            'nik' => $post['nik'],
            'id_bidang' => $post['keahlian'] == '' ? null : $post['keahlian'],
            'id_kelas' => $post['kelas'] == '' ? null : $post['kelas'],
            'nama_siswa' => $post['nama_siswa'],
            'asal_sekolah' => $post['asal_sekolah'],
            'tahun_masuk' => $post['tahun_masuk'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'agama' => $post['agama'],
            'nama_ayah' => $post['nama_ayah'],
            'nama_ibu' => $post['nama_ibu'],
            'pend_terakhir_ayah' => $post['pend_terakhir_ayah'],
            'pend_terakhir_ibu' => $post['pend_terakhir_ibu'],
            'pekerjaan_ayah' => $post['pekerjaan_ayah'],
            'pekerjaan_ibu' => $post['pekerjaan_ibu'],
            'alamat_orgtua' => $post['alamat_orgtua'],
            'nama_wali' => $post['nama_wali'],
            'pekerjaan_wali' => $post['pekerjaan_wali'],
            'alamat_wali' => $post['alamat_wali'],
            'no_telp_orgtua' => $post['no_telp_orgtua'],
        ];
        $this->db->where('id_siswa', $post['id']);
        $this->db->update('data_siswa', $params);
    }

    public function del($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('data_siswa');
    }
}

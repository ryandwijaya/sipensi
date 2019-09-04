<?php


class PendaftarController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
//        if (!parent::hasLogin())
//        {
//            redirect(site_url());
//        }else
//        {
//
//        }
        $this->load->model('PendaftarModel');
    }

    public function index()
    {
        $data['title'] = 'Data Seluruh Pendaftar';
        if ($this->session->userdata('sess_level')=='ortu'){
            $data['pendaftar'] = parent::model('PendaftarModel')->get_pendaftar_by_user($this->session->userdata('sess_id'));
        }else{
            $data['pendaftar'] = parent::model('PendaftarModel')->get_pendaftar();
        }
        parent::template('backend/pendaftar/index', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Data Seluruh Pendaftar';
        $data['pendaftar'] = parent::model('PendaftarModel')->get_single_pendaftar($id);

        parent::template('backend/pendaftar/detail', $data);
    }

    public function bayar($id)
    {
        if (isset($_POST['bayar'])){
            $config['upload_path'] = './assets/uploads/bukti/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('bukti')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                $foto = $this->upload->data('file_name');

                $pembayaran = array(
                    'pembayaran_pendaftaran' => $id,
                    'pembayaran_jumlah' => parent::post('jumlah'),
                    'pembayaran_tgl' => parent::post('tgl'),
                    'pembayaran_bank' => parent::post('bank'),
                    'pembayaran_nama' => parent::post('nama'),
                    'pembayaran_bukti' => $foto
                );

                $simpan = parent::model('PendaftarModel')->add_pembayaran($pembayaran);
                if ($simpan > 0) {
                    $this->session->set_flashdata('alert', 'success_upload');
                    redirect('pendaftar');
                } else {
                    $this->session->set_flashdata('alert', 'fail_upload');
                    redirect('pendaftar');
                }
            }


        }else{
            $data['title'] = 'Bukti Pembayaran Pendaftaran';
            $data['pendaftar'] = parent::model('PendaftarModel')->get_single_pendaftar($id);
            parent::template('backend/pendaftar/bayar', $data);
        }

    }

    public function konfirmasi($id)
    {
        if (isset($_POST['terima'])) {
            $data = array(
                'pendaftar_status' => 'diterima'
            );
            $simpan = parent::model('PendaftarModel')->ubah_pendaftar($id,$data);
            if ($simpan > 0) {
                $this->session->set_flashdata('alert', 'success_edit');
                redirect('pendaftar');
            } else {
                $this->session->set_flashdata('alert', 'fail_edit');
                redirect('pendaftar');
            }

        }
        else if (isset($_POST['tolak'])) {
            $data = array(
                'pendaftar_status' => 'ditolak'
        );
            $simpan = parent::model('PendaftarModel')->ubah_pendaftar($id,$data);
            if ($simpan > 0) {
                $this->session->set_flashdata('alert', 'success_edit');
                redirect('pendaftar');
            } else {
                $this->session->set_flashdata('alert', 'fail_edit');
                redirect('pendaftar');
            }

        }

    }
    public function daftar()
    {
        if (isset($_POST['daftar'])) {
            $nama_lengkap = parent::post('nama_lengkap');
            $nama_panggilan = parent::post('nama_panggilan');
            $jk = parent::post('jk');
            $tmpt_lahir = parent::post('tempat_lahir');
            $tgl_lahir = parent::post('tgl_lahir');
            $agama = parent::post('agama');
            $berat_badan = parent::post('berat_badan');
            $tinggi_badan = parent::post('tinggi_badan');
            $goldar = parent::post('goldar');
            $alamat = parent::post('alamat');
            $ayah = parent::post('nama_ayah');
            $ibu = parent::post('nama_ibu');
            $p_ibu = parent::post('pekerjaan_ibu');
            $p_ayah = parent::post('pekerjaan_ayah');
            $hubungan = parent::post('hubungan');

            $biodata = array(
                'pendaftar_nama' => $nama_lengkap,
                'pendaftaran_nama_panggilan' => $nama_panggilan,
                'pendaftar_jk' => $jk,
                'pendaftar_tempat_lahir' => $tmpt_lahir,
                'pendaftar_tgl_lahir' => $tgl_lahir,
                'pendaftar_agama' => $agama,
                'pendaftar_berat_badan' => $berat_badan,
                'pendaftar_tinggi_badan' => $tinggi_badan,
                'pendaftar_golongan_darah' => $goldar,
                'pendaftar_alamat' => $alamat,
                'pendaftar_ayah' => $ayah,
                'pendaftar_ibu' => $ibu,
                'pendaftar_p_ibu' => $p_ibu,
                'pendaftar_p_ayah' => $p_ayah,
                'pendaftar_hubungan' => $hubungan,
                'pendaftar_user' => $this->session->userdata('sess_id')
            );
            $insert = parent::model('PendaftarModel')->add_pendaftar($biodata);
            if ($insert > 0) {
                parent::alert('alert', 'insert');
                redirect('pendaftar');
            } else {
                parent::alert('alert', 'error');
                redirect('pendaftar');
            }
        } else {
            $data['title'] = 'Form Pendaftaran';
            parent::template('backend/pendaftar/daftar', $data);
        }

    }

    public function lengkapi($id)
    {
        if (isset($_POST['btn_kk'])) {
            $config['upload_path'] = './assets/uploads/kk/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('kk')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                $foto = $this->upload->data('file_name');

                $data = array(
                    'pendaftar_kk' => $foto,
                );

                $simpan = parent::model('PendaftarModel')->ubah_pendaftar($id, $data);
                if ($simpan > 0) {
                    $this->session->set_flashdata('alert', 'success_upload');
                    redirect('lengkapi/'.$id);
                } else {
                    $this->session->set_flashdata('alert', 'fail_upload');
                    redirect('lengkapi/'.$id);
                }
            }
        } elseif (isset($_POST['btn_ktp'])) {
            $config['upload_path'] = './assets/uploads/ktp/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('ktp')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                $foto = $this->upload->data('file_name');

                $data = array(
                    'pendaftar_ktp' => $foto,
                );

                $simpan = parent::model('PendaftarModel')->ubah_pendaftar($id, $data);
                if ($simpan > 0) {
                    $this->session->set_flashdata('alert', 'success_upload');
                    redirect('lengkapi/'.$id);
                } else {
                    $this->session->set_flashdata('alert', 'fail_upload');
                    redirect('lengkapi/'.$id);
                }
            }

        } elseif (isset($_POST['btn_akta'])) {
            $config['upload_path'] = './assets/uploads/akta/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('akta')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                $foto = $this->upload->data('file_name');

                $data = array(
                    'pendaftar_akta' => $foto,
                );

                $simpan = parent::model('PendaftarModel')->ubah_pendaftar($id, $data);
                if ($simpan > 0) {
                    $this->session->set_flashdata('alert', 'success_upload');
                    redirect('lengkapi/'.$id);
                } else {
                    $this->session->set_flashdata('alert', 'fail_upload');
                    redirect('lengkapi/'.$id);
                }
            }
        } else {
            $data['title'] = 'Form Pendaftaran';
            $data['pendaftar'] = parent::model('PendaftarModel')->get_single_pendaftar($id);

            parent::template('backend/pendaftar/lengkapi', $data);
        }

    }
}
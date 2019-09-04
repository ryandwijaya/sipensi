<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="javascript: history.go(-1)"><button class="btn btn-light text-black"><i class="fa fa-arrow-left"></i> Back</button></a>
                <h4 class="card-title text-primary float-right">Formulir Pendaftaran Peserta TK/KB Ceria Anak Mandiri</h4>
            </div>
            <div class="card-body">


                <form action="<?= base_url() ?>daftar" method="POST">
                    <h6>A. KETERANGAN ANAK DIDIK</h6>
                    <hr>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $pendaftar['pendaftar_nama'] ?>" name="nama_lengkap" readonly >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $pendaftar['pendaftaran_nama_panggilan'] ?>" name="nama_panggilan" readonly placeholder="Nama Panggilan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $pendaftar['pendaftar_jk'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat Tgl Lahir</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-4">

                                    <input type="text" class="form-control" readonly name="tempat_lahir" value="<?= $pendaftar['pendaftar_tempat_lahir'] ?>">
                                </div>
                                /
                                <div class="col-md-6">

                                    <input type="date" class="form-control" readonly name="tgl_lahir" value="<?= $pendaftar['pendaftar_tgl_lahir'] ?>">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $pendaftar['pendaftar_agama'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Berat Badan</label>
                        <div class="col-sm-9">
                            <input type="number" min="1" class="form-control"  name="berat_badan" value="<?= $pendaftar['pendaftar_berat_badan'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-9">
                            <input type="number" min="1" class="form-control"  name="tinggi_badan" value="<?= $pendaftar['pendaftar_tinggi_badan'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Golongan Darah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="goldar" value="<?= $pendaftar['pendaftar_golongan_darah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" rows="3" class="form-control" readonly><?= $pendaftar['pendaftar_alamat'] ?></textarea>
                        </div>
                    </div>

                    <h6>B. ORANG TUA / WALI</h6>
                    <hr>
                    <h7><b>Nama</b></h7>
                    <div class="form-group row ml-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Ayah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="nama_ayah" readonly placeholder="Nama Ayah" value="<?= $pendaftar['pendaftar_ayah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row ml-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Ibu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="nama_ibu" readonly value="<?= $pendaftar['pendaftar_ibu'] ?>">
                        </div>
                    </div>
                    <!--                    <h7><b>Pendidikan</b></h7>-->
                    <!--                    <div class="form-group row ml-3">-->
                    <!--                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Ayah</label>-->
                    <!--                        <div class="col-sm-9">-->
                    <!--                            <input type="text" class="form-control"  name="pendidikan_ayah" placeholder="Pendidikan Ayah">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group row ml-3">-->
                    <!--                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pendidikan Ibu</label>-->
                    <!--                        <div class="col-sm-9">-->
                    <!--                            <input type="text" class="form-control"  name="pendidikan_ibu" placeholder="Pendidikan Ibu">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <h7><b>Pekerjaan</b></h7>
                    <div class="form-group row ml-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="pekerjaan_ayah" readonly value="<?= $pendaftar['pendaftar_p_ayah'] ?>">
                        </div>
                    </div>
                    <div class="form-group row ml-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="pekerjaan_ibu" readonly value="<?= $pendaftar['pendaftar_p_ibu'] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row ml-3 mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Hubungan Terhadap Anak</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="hubungan" value="<?= $pendaftar['pendaftar_hubungan'] ?>">
                        </div>
                    </div>

                    <br><br>
                <div class="row mb-3">
                    <div class="col-md-4 border">
                        <label>KK :</label><br>
                        <img src="<?= base_url() ?>assets/uploads/kk/<?= $pendaftar['pendaftar_kk'] ?>" alt="" width="260" height="260">
                    </div>
                    <div class="col-md- border">
                        <label>KTP :</label><br>
                        <img src="<?= base_url() ?>assets/uploads/ktp/<?= $pendaftar['pendaftar_ktp'] ?>" alt="" width="260" height="260">
                    </div>
                    <div class="col-md-4 border">
                        <label>AKTA :</label><br>
                        <img src="<?= base_url() ?>assets/uploads/akta/<?= $pendaftar['pendaftar_akta'] ?>" alt="" width="260" height="260">
                    </div>
                </div>




                    <div class="form-group row">
                        <div class="col-sm-12">
                            <a href="<?= base_url() ?>pendaftar" class="btn btn-warning float-right"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="javascript: history.go(-1)"><button class="btn btn-light text-black"><i class="fa fa-arrow-left"></i> Back</button></a>
                <h4 class="card-title text-primary float-right">Formulir Pendaftaran Peserta PIAUD Ceria Anak Mandiri</h4>
            </div>
            <div class="card-body">


                <form action="<?= base_url() ?>daftar" method="POST">
                    <h6>A. KETERANGAN ANAK DIDIK</h6>
                    <hr>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_lengkap" required placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_panggilan" required placeholder="Nama Panggilan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <input type="radio"  name="jk" value="pria" required> Pria
                            <input type="radio" name="jk" class="ml-4" value="wanita" required> Wanita
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat Tgl Lahir</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-4">

                                    <input type="text" class="form-control" required name="tempat_lahir" placeholder="Tempat Lahir">
                                </div>
                                /
                                <div class="col-md-6">

                                    <input type="date" class="form-control" required name="tgl_lahir" placeholder="Tgl Lahir">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-9">
                            <select name="agama" id="" class="form-control" required>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="khatolik">Khatolik</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Berat Badan</label>
                        <div class="col-sm-9">
                            <input type="number" min="1" class="form-control"  name="berat_badan" placeholder="Berat Badan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-9">
                            <input type="number" min="1" class="form-control"  name="tinggi_badan" placeholder="Tinggi Badan">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Golongan Darah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="goldar" placeholder="Golongan Darah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>

                    <h6>B. ORANG TUA / WALI</h6>
                    <hr>
                    <h7><b>Nama</b></h7>
                    <div class="form-group row ml-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Ayah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="nama_ayah" required placeholder="Nama Ayah">
                        </div>
                    </div>
                    <div class="form-group row ml-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Ibu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="nama_ibu" placeholder="Nama Ibu">
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
                            <input type="text" class="form-control"  name="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
                        </div>
                    </div>
                    <div class="form-group row ml-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row ml-3 mt-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Hubungan Terhadap Anak</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="hubungan" placeholder="Kandung / Tiri / lainnya">
                        </div>
                    </div>
                    <br><br>





                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" name="daftar" class="btn btn-primary float-right">Daftar</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
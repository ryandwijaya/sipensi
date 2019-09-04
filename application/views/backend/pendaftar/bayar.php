<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <b><span>SILAHKAN MELAKUKAN PEMBAYARAN UANG PENDAFTARAN Rp. 500.000</span><br>
                <span>NO REK : 9910299102221</span> - (<strong>BRI</strong>)<br>
                <span>JIKA SUDAH MELAKUKAN PEMBAYARAN SILAHKAN UPLOAD BUKTI PEMBAYARAN DIBAWAH INI!</span></b>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <?= form_open('bayar/' . $pendaftar['pendaftar_id'], array('enctype' => 'multipart/form-data')) ?>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Atas Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" required placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Bank</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="bank" required placeholder="Bank">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Bayar</label>
                                <div class="col-sm-9">
                                    <input type="number" min="1" class="form-control" name="jumlah" required placeholder="Jumlah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Tgl Bayar</label>
                                <div class="col-sm-9">
                                    <input type="date"  class="form-control" name="tgl" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="bukti" required>
                                </div>
                            </div>
                            <button class="btn btn-success float-right btn-rounded" type="submit" name="bayar">Simpan</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-primary table-borderless">
                            <tr>
                                <td>Calon Siswa</td>
                                <td>:</td>
                                <td><?= $pendaftar['pendaftar_nama'] ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?= $pendaftar['pendaftar_jk'] ?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td><?= $pendaftar['pendaftar_agama'] ?></td>
                            </tr>
                            <tr>
                                <td>Ayah</td>
                                <td>:</td>
                                <td><?= $pendaftar['pendaftar_ayah'] ?></td>
                            </tr>
                            <tr>
                                <td>Ibu</td>
                                <td>:</td>
                                <td><?= $pendaftar['pendaftar_ibu'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
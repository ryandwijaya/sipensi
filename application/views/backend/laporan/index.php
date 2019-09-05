<div class="row mb-3">
    <div class="col-md-12">
        <div class="card border-light">
            <div class="card-header">
                Silahkan pilih status
            </div>
            <div class="card-body">
                <form action="<?= base_url() ?>laporan" method="POST">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select name="status" id="" class="form-control">
                                <option disabled selected>- Pilih Status -</option>
                                <option value="waiting">Belum Dikonfirmasi</option>
                                <option value="diterima">Diterima</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info w-100">Lihat</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border-light">
            <div class="card-header">
                <h5 class="float-left">List</h5>
                <button class="float-right btn btn-primary" onclick="printContent('print')"><i class="fa fa-print"></i>
                </button>
                <script>
                    function printContent(el) {
                        var restorepage = document.body.innerHTML;
                        var printcontent = document.getElementById(el).innerHTML;
                        document.body.innerHTML = printcontent;
                        window.print();
                        document.body.innerHTML = restorepage;
                    }
                </script>
            </div>
            <div id="print">
                <div class="card-body">
                    <h4 class="mb-5 text-black" style="text-align: center;">Laporan Pendaftar <?= $this->input->post('status'); ?></h4>
                    <table class="display table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>TTL</th>
                            <th>Agama</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($diterima as $res) { ?>

                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $res['pendaftar_nama'] ?></td>
                                <td><?= $res['pendaftar_jk'] ?></td>
                                <td><?= $res['pendaftar_tempat_lahir'] ?>, <?= $res['pendaftar_tgl_lahir'] ?></td>
                                <td><?= $res['pendaftar_agama'] ?></td>
                                <td><?= $res['pendaftar_status'] ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>



<div class="row">
    <div class="col-md-12">
        <div class="card border-light">
            <div class="card-header">
                <h5 class="float-left">List</h5>
                <?php if ($this->session->userdata('sess_level') == 'ortu') { ?>
                    <a href="<?= base_url() ?>daftar">
                        <button class="btn btn-primary btn-sm float-right">Daftar</button>
                    </a>
                <?php } ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="xp-default-datatable" class="display table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Jenis Kelamin</td>
                            <td>TTL</td>
                            <td>Agama</td>
                            <td class="text-center">Persyaratan</td>
                            <td>Status</td>
                            <td class="text-center">Aksi</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($pendaftar as $res) { ?>
                            <?php
                            $cek_bayar = $this->PendaftarModel->cek_pembayaran_user($res['pendaftar_id']);
                            ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $res['pendaftar_nama'] ?></td>
                                <td><?= $res['pendaftar_jk'] ?></td>
                                <td><?= $res['pendaftar_tempat_lahir'] ?>, <?= $res['pendaftar_tgl_lahir'] ?></td>
                                <td><?= $res['pendaftar_agama'] ?></td>
                                <td class="text-center">
                                    <?php if ($res['pendaftar_kk'] != NULL && $res['pendaftar_ktp'] != NULL && $res['pendaftar_akta'] != NULL) { ?>
                                        <?php
                                        if (count($cek_bayar) > 0) { ?>
                                            <span class="text-success">Lengkap</span>

                                        <?php } else { ?>
                                            <span class="text-warning animated fadeIn infinite">Belum melakukan pembayaran</span>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <span class="text-danger animated fadeIn infinite">Belum Lengkap</span>

                                    <?php } ?>
                                </td>
                                <td><?= $res['pendaftar_status'] ?></td>
                                <td class="text-center">
                                    <?php if ($this->session->userdata('sess_level') == 'ortu') { ?>
                                        <?php if ($res['pendaftar_kk'] != NULL && $res['pendaftar_ktp'] != NULL && $res['pendaftar_akta'] != NULL) { ?>
                                            <a href="<?= base_url() ?>pendaftar/lihat/<?= $res['pendaftar_id'] ?>">
                                                <button class="btn btn-info btn-sm btn-rounded" data-toggle="tooltip"
                                                        data-placement="right" title="Lihat Detail"><i
                                                            class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <?php
                                            if (count($cek_bayar) > 0) { ?>

                                            <?php } else { ?>

                                                <a href="<?= base_url() ?>bayar/<?= $res['pendaftar_id'] ?>">
                                                    <button class="btn btn-success btn-sm btn-rounded"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Bayar Pendaftaran"><i
                                                                class="mdi mdi-credit-card-multiple"></i>
                                                    </button>
                                                </a>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <a href="<?= base_url() ?>lengkapi/<?= $res['pendaftar_id'] ?>">
                                                <button class="btn btn-primary btn-sm btn-rounded" data-toggle="tooltip"
                                                        data-placement="right" title="Lengkapi Persyaratan"><i
                                                            class="fa fa-cloud-upload"></i>
                                                </button>
                                            </a>

                                        <?php } ?>
                                    <?php } ?>
                                    <?php if ($this->session->userdata('sess_level') == 'psb') { ?>
                                        <?php if ($res['pendaftar_kk'] != NULL && $res['pendaftar_ktp'] != NULL && $res['pendaftar_akta'] != NULL) { ?>
                                            <a href="<?= base_url() ?>pendaftar/lihat/<?= $res['pendaftar_id'] ?>"
                                               data-toggle="tooltip" data-placement="right" title="Lihat Detail">
                                                <button class="btn btn-info btn-sm btn-rounded"><i
                                                            class="fa fa-eye"></i>
                                                </button>
                                            </a>
                                            <?php if ($res['pendaftar_status'] == 'waiting') { ?>
                                                <form action="<?= base_url() ?>pendaftar/konfirmasi/<?= $res['pendaftar_id'] ?>"
                                                      method="POST">
                                                    <button class="btn btn-success btn-sm btn-rounded" type="submit"
                                                            name="terima" data-toggle="tooltip" data-placement="right"
                                                            title="Terima"
                                                            onclick="return confirm('Yakin ingin menerima ?')"><i
                                                                class="fa fa-check"></i>
                                                    </button>


                                                    <button class="btn btn-danger btn-sm btn-rounded" type="submit"
                                                            name="tolak" data-toggle="tooltip" data-placement="right"
                                                            title="Tolak"
                                                            onclick="return confirm('Yakin ingin menolak ?')"><i
                                                                class="fa fa-close"></i>
                                                    </button>
                                                </form>
                                            <?php } ?>

                                        <?php } else { ?>
                                            <a href="<?= base_url() ?>pendaftar/lihat/<?= $res['pendaftar_id'] ?>"
                                               data-toggle="tooltip" data-placement="right" title="Lihat Detail">
                                                <button class="btn btn-info btn-rounded btn-sm"><i
                                                            class="fa fa-eye"></i>
                                                </button>
                                            </a>

                                        <?php } ?>
                                    <?php } ?>
                                </td>
                            </tr>


                            <?php
                            $no++;
                        } ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


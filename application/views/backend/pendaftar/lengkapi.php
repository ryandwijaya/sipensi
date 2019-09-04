<div class="card">
    <div class="card-header">
        <a href="<?= base_url() ?>pendaftar"><button class="btn btn-light text-black"><i class="fa fa-arrow-left"></i> Back</button></a>
    </div>
    <div class="card-body">
        <h6 style="text-align: center">Persyaratan</h6>
        <hr>
        <?php
        if ($pendaftar['pendaftar_kk']!=NULL){ ?>
            <h7 class="pl-4 text-success">KK <i class="fa fa-check"></i></h7>
            <hr>
        <?php }else{ ?>
            <?= form_open('lengkapi/' . $pendaftar['pendaftar_id'], array('enctype' => 'multipart/form-data')) ?>
            <div class="form-group row ml-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">KK</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control"  name="kk" required placeholder="">
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary btn-rounded" type="submit" name="btn_kk">Upload</button>
                </div>
            </div>
            <?= form_close() ?>
        <?php } ?>


        <?php
        if ($pendaftar['pendaftar_akta']!=NULL){ ?>
            <h7 class="pl-4 text-success">AKTA <i class="fa fa-check"></i></h7>
            <hr>
        <?php }else{ ?>
        <?= form_open('lengkapi/' . $pendaftar['pendaftar_id'], array('enctype' => 'multipart/form-data')) ?>
        <div class="form-group row ml-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">AKTA</label>
            <div class="col-sm-7">
                <input type="file" class="form-control"  name="akta" required placeholder="">
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary btn-rounded" type="submit" name="btn_akta">Upload</button>
            </div>
        </div>
        <?= form_close() ?>
        <?php } ?>


        <?php
        if ($pendaftar['pendaftar_ktp']!=NULL){ ?>
            <h7 class="pl-4 text-success">KTP <i class="fa fa-check"></i></h7>
            <hr>
        <?php }else{ ?>
        <?= form_open('lengkapi/' . $pendaftar['pendaftar_id'], array('enctype' => 'multipart/form-data')) ?>
        <div class="form-group row ml-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">KTP</label>
            <div class="col-sm-7">
                <input type="file" class="form-control"  name="ktp" required placeholder="">
            </div>
            <div class="col-sm-2">
                <button class="btn btn-primary btn-rounded" type="submit" name="btn_ktp">Upload</button>
            </div>
        </div>
            <?= form_close() ?>
        <?php } ?>
    </div>
</div>

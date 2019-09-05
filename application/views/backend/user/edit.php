<div class="card">
    <div class="card-header">
        <a href="javascript: history.go(-1)"><button class="btn btn-light text-black"><i class="fa fa-arrow-left"></i> Back</button></a>
    </div>
    <div class="card-body">
        <form action="<?= base_url() ?>user/edit/<?= $user['user_id'] ?>" class="p-2" method="post">
            <div class="from-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $user['user_nama'] ?>">
            </div>
            <div class="from-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" value="<?= $user['user_username'] ?>">
            </div>

            <div class="from-group">
                <label>Nomor HP</label>
                <input type="text" class="form-control" name="nope" value="<?= $user['user_nope'] ?>">
            </div>
            <div class="from-group">
                <label>Level</label>
                <select name="level" class="form-control">
                    <option value="<?= $user['user_level'] ?>"><?= $user['user_level'] ?></option>
                    <option value="psb">PSB</option>
                    <option value="kepsek">Kepala Sekolah</option>
                    <option value="ortu">Orang Tua</option>
                </select>
            </div>
            <button type="submit" name="edit" class="btn btn-primary mt-4 float-right">Simpan</button>

    </div>
    </form>
    </div>
</div>

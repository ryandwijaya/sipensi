<div class="row">
    <div class="col-md-12">
        <div class="card border-light">
            <div class="card-header">
                <h5 class="float-left">List</h5>
                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal-user">Tambah User</button>


            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="xp-default-datatable" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Username</td>
                                <td class="text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($users as $val){ ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $val['user_nama'] ?></td>
                                <td><?= $val['user_username'] ?></td>
                                <td class="text-center">  <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button> | <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button> </td>
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

    <!-- Modal -->
    <div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="p-2">
                        <div class="from-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="from-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="from-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="from-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="psb">PSB</option>
                                <option value="kepsek">Kepala Sekolah</option>
                                <option value="ortu">Orang Tua</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-4">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="xp-widget-box">
                    <div class="float-left">
                        <h4 class="xp-counter text-primary"><?= count($pendaftar) ?></h4>
                        <p class="mb-0 text-muted">Total Pendaftar</p>
                    </div>
                    <div class="float-right">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary">
                            <i class="mdi mdi-account-multiple font-30 text-white"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="xp-widget-box">
                    <div class="float-left">
                        <h4 class="xp-counter text-success"><?= count($diterima) ?></h4>
                        <p class="mb-0 text-muted">Total Diterima</p>
                    </div>
                    <div class="float-right">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-success">
                            <i class="mdi mdi-account-check font-30 text-white"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="xp-widget-box">
                    <div class="float-left">
                        <h4 class="xp-counter text-danger"><?= count($ditolak) ?></h4>
                        <p class="mb-0 text-muted">Total Ditolak</p>
                    </div>
                    <div class="float-right">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger">
                            <i class="mdi mdi-account-alert font-30 text-white"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
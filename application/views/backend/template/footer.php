</div>

<!-- Start XP Footerbar -->
<div class="xp-footerbar">
    <footer class="footer">
        <p class="mb-0">© 2019 Digtive - All Rights Reserved.</p>
    </footer>
</div>
<!-- End XP Footerbar -->

</div>
<!-- End XP Rightbar -->

</div>
<!-- End XP Container -->

<!-- Start JS -->
<!--<script src="--><?//= base_url() ?><!--assets/js/jquery.min.js"></script>-->
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/modernizr.min.js"></script>
<script src="<?= base_url() ?>assets/js/detect.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>assets/js/sidebar-menu.js"></script>



<!-- To Do List JS -->
<script src="<?= base_url() ?>assets/js/init/to-do-list-init.js"></script>

<!-- Datepicker JS -->
<script src="<?= base_url() ?>assets/plugins/datepicker/datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datepicker/i18n/datepicker.en.js"></script>

<!-- Dashboard JS -->
<script src="<?= base_url() ?>assets/js/init/dashborad.js"></script>

<!-- Required Datatable JS -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive Examples -->
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init JS -->
<script src="<?= base_url() ?>assets/js/init/table-datatable-init.js"></script>



<!-- Main JS -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<!-- End JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
<?php if ($this->session->flashdata('alert') == 'insert') { ?>
    <script>
        Swal.fire({
            position: 'center',
            type: 'success',
            title: 'Daftar berhasil',
            showConfirmButton: false,
            timer: 1800
        })
    </script>
<?php } ?>
<?php if ($this->session->flashdata('alert') == 'error') { ?>
    <script>
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Sepertinya terjadi kesalahan, silahkan coba lagi!'
        })
    </script>
<?php } ?>
</body>

</html>
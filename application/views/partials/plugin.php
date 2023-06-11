    <script src="<?= site_url('assets/assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?= site_url('assets/dist/js/app-style-switcher.js') ?>"></script>
    <script src="<?= site_url('assets/dist/js/feather.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
    <script src="<?= site_url('assets/dist/js/sidebarmenu.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= site_url('assets/dist/js/custom.min.js') ?>"></script>
    <!--This page JavaScript -->
    <script src="<?= site_url('assets/assets/extra-libs/c3/d3.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/extra-libs/c3/c3.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/libs/chartist/dist/chartist.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') ?>"></script>
    <script src="<?= site_url('assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?= site_url('assets/dist/js/pages/dashboards/dashboard1.js') ?>"></script>
    <script src="<?= site_url('assets/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <!-- <script src="<?= site_url('assets/dist/js/pages/datatable/datatable-basic.init.js') ?>"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.4/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/datatables.min.js"></script>

    <script>
        $('#zero_config').DataTable();
        $(".preloader ").fadeOut();
        $(".mt-alerts").fadeTo(2000, 500).slideUp(500, function(){
            $(".mt-alerts").slideUp(500);
        });
    </script>
    <?php
        if (!empty($js)) {
            $this->load->view('js/'.$js);
        }
    ?> 
</body>

</html>
<script>
    $(document).ready(function () {
        $('#body-data-supplier').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama_supplier = $(this).attr('data-name');
            var no_telp = $(this).attr('data-no_telp');
            var alamat = $(this).attr('data-alamat');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_supplier_update"]').val(nama_supplier);
            $('[name="no_telp_update"]').val(no_telp);
            $('[name="alamat_update"]').val(alamat);
        });
    });
</script>
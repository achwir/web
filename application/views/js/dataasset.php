<script>
    $(document).ready(function () {
        $('#body-data-asset').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var tempat = $(this).attr('data-tempat');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_asset_update"]').val(nama);
            $('[name="tempat_update"]').val(tempat);
        });
    });
</script>
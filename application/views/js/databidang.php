<script>
    $(document).ready(function () {
        $('#body-data-bidang').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_bidang_update"]').val(nama);
        });
    });
</script>
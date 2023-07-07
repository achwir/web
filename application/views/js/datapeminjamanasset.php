<script>
    $(document).ready(function () {
        $('#body-peminjaman-asset').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var id_asset = $(this).attr('data-id_asset');
            var nama = $(this).attr('data-nama');
            var tempat = $(this).attr('data-tempat');
            var peminjam = $(this).attr('data-peminjam');
            var peminjaman = $(this).attr('data-peminjaman');
            var pengembalian = $(this).attr('data-pengembalian');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_asset"]').val(id_asset);
            $('[name="nama_asset_update"]').val(nama);
            $('[name="tempat_update"]').val(tempat);
            $('[name="nama_peminjam_update"]').val(peminjam);
            $('[name="tanggal_peminjaman_update"]').val(peminjaman);
            $('[name="tanggal_pengembalian_update"]').val(pengembalian);
        });

        $('#body-peminjaman-asset').on('click', '.btn-validation', function () {
            var id = $(this).attr('data-id');
            var id_asset = $(this).attr('data-id_asset');
            var nama = $(this).attr('data-nama');
            var tempat = $(this).attr('data-tempat');
            var peminjam = $(this).attr('data-peminjam');
            var peminjaman = $(this).attr('data-peminjaman');
            var pengembalian = $(this).attr('data-pengembalian');

            $('#modal-validation').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_asset"]').val(id_asset);
            $('[name="nama_asset_update"]').val(nama);
            $('[name="tempat_update"]').val(tempat);
            $('[name="peminjam_update"]').val(peminjam);
            $('[name="tanggal_peminjaman_update"]').val(peminjaman);
            $('[name="tanggal_pengembalian_update"]').val(pengembalian);
        });

        $('[name="id_asset"]').on('change', function(){
            var tempat = $('option:selected', this).data('tempat');
            $('[name="tempat"]').val(tempat);
        })
    });
</script>
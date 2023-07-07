<script>
    $(document).ready(function () {
       
        $('#body-barang-masuk').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var id_barang = $(this).attr('data-id_barang');
            var id_supplier = $(this).attr('data-id_supplier');
            var nama = $(this).attr('data-nama');
            var supplier = $(this).attr('data-supplier');
            var tanggal = $(this).attr('data-tanggal');
            var jumlah = $(this).attr('data-jumlah');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_barang"]').val(id_barang);
            $('[name="id_supplier"]').val(id_supplier);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="nama_supplier_update"]').val(supplier);
            $('[name="tanggal_masuk_update"]').val(tanggal);
            $('[name="jumlah_barang_update"]').val(jumlah);
            $('[name="jumlah_sebelum"]').val(jumlah);
        });

        $('#body-barang-masuk').on('click', '.btn-validation', function () {
            var id = $(this).attr('data-id');
            var id_barang = $(this).attr('data-id_barang');
            var id_supplier = $(this).attr('data-id_supplier');
            var nama = $(this).attr('data-nama');
            var supplier = $(this).attr('data-supplier');
            var tanggal = $(this).attr('data-tanggal');
            var jumlah = $(this).attr('data-jumlah');

            $('#modal-validation').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_barang"]').val(id_barang);
            $('[name="id_supplier"]').val(id_supplier);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="nama_supplier_update"]').val(supplier);
            $('[name="tanggal_masuk_update"]').val(tanggal);
            $('[name="jumlah_barang_update"]').val(jumlah);
            $('[name="jumlah_sebelum"]').val(jumlah);
        });

        // $('[name="id_barang"]').on('change', function(){
        //     var supplier = $('option:selected', this).data('supplier');
        //     $('[name="nama_supplier"]').val(supplier);
        // })
    });
</script>
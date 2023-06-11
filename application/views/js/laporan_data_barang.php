
<script>
    $(document).ready(function () {

        $('#laporan_data_barang').DataTable({
            "pageLength": 25,
            "dom": 'lBTfgtp',
            "buttons": [{
                extend: 'copy'
            },{
                extend: 'csv'
            },{
                extend: 'excel', title: 'Laporan Data Barang'
            },{
                extend: 'pdf', title: 'Laporan Data Barang'
            },{
                extend: 'print', 
                customize: function (win)
                {
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');
                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
            }
            ],
            // "processing": true, 
            // "serverSide": true,
            // "responsive": true,
            "order": [],
            "autoWidth" : true,
            // "scrollX": true,
            // "scrollY": "300px",
            
            // "ajax": {
            //     "url": "<?= base_url('items/store')?>",
            //     "type": "POST"
            // },

            "language": {
                "search": "",
                "searchPlaceholder": "Search . . .",
                "lengthMenu":"_MENU_",
                "emptyTable":"Tidak ada data",
                "zeroRecords":"Tidak ada data yang sesuai"
            }
        });

        $('#body-data-barang').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var supplier = $(this).attr('data-supplier');
            var kode = $(this).attr('data-kode');
            var harga = $(this).attr('data-harga');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="nama_supplier_update"]').val(supplier);
            $('[name="kode_barang_update"]').val(kode);
            $('[name="harga_barang_update"]').val(harga);
        });

        $('#btn-export').click(function (e) { 
            e.preventDefault();
            var dari = $('[name="start_date"]').val();
            var sampai = $('[name="end_date"]').val();

            var page = "export-data-barang"; 
            window.location = page; 
        });
    });
</script>
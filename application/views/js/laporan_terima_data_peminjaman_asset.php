
<script>
    $(document).ready(function () {

        $('#laporan_terima_data_peminjaman_asset').DataTable({
            "pageLength": 25,
            "dom": 'lBTfgtp',
            "buttons": [{
                extend: 'copy'
            },{
                extend: 'csv'
            },{
                extend: 'excel', title: 'ExampleFile'
            },{
                extend: 'pdf', title: 'ExampleFile'
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

        $('#body-terima-data-peminjaman-asset').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var id_asset = $(this).attr('data-id_asset');
            var nama = $(this).attr('data-nama');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_asset"]').val(id_asset);
            $('[name="nama_asset_update"]').val(nama);
        });

        $('#btn-export').click(function (e) { 
            e.preventDefault();
            var id_asset = $('[name="id_asset"]').val();
            var dari = $('[name="start_date"]').val();
            var sampai = $('[name="end_date"]').val();

            var page = "export-terima-data-peminjaman-asset?id_asset=" + id_asset + "&dari=" + dari + '&sampai=' + sampai; 
            window.location = page; 
        });
    });
</script>
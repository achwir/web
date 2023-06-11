
<script>
    $(document).ready(function () {

        $('#laporan_asset').DataTable({
            "pageLength": 25,
            "dom": 'lBTfgtp',
            "buttons": [{
                extend: 'copy'
            },{
                extend: 'csv'
            },{
                extend: 'excel', title: 'Laporan Data Asset'
            },{
                extend: 'pdf', title: 'Laporan Data Asset'
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

        $('#body-data-asset').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var tempat = $(this).attr('data-tempat');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_asset_update"]').val(nama);
            $('[name="tempat_update"]').val(tempat);
        });

        $('#btn-export').click(function (e) { 
            e.preventDefault();
            var dari = $('[name="start_date"]').val();
            var sampai = $('[name="end_date"]').val();

            var page = "export-data-asset"; 
            window.location = page; 
        });
    });
</script>
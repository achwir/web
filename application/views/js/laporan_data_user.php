
<script>
    $(document).ready(function () {

        $('#laporan_data_user').DataTable({
            "pageLength": 25,
            "dom": 'lBTfgtp',
            "buttons": [{
                extend: 'copy'
            },{
                extend: 'csv'
            },{
                extend: 'excel', title: 'Laporan Data User'
            },{
                extend: 'pdf', title: 'Laporan Data User'
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

        $('#body-data-user').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var username = $(this).attr('data-username');
            var email = $(this).attr('data-email');
            var nama_lengkap = $(this).attr('data-nama-lengkap');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="username_update"]').val(username);
            $('[name="email_update"]').val(email);
            $('[name="nama_lengkap_update"]').val(nama_lengkap);
        });
    });
</script>
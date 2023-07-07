
<script>
    $(document).ready(function () {

        $('#laporan_data_bidang').DataTable({
            "pageLength": 25,
            "dom": 'lBTfgtp',
            "buttons": [{
                extend: 'copy'
            },{
                extend: 'csv'
            },{
                extend: 'excel', title: 'Laporan Data Bidang'
            },{
                extend: 'pdf', title: 'Laporan Data Bidang'
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

        $('#body-data-bidang').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            var barang = $(this).attr('data-barang');
            var jenis = $(this).attr('data-jenis');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="nama_bidang_update"]').val(nama);
            $('[name="nama_barang_update"]').val(barang);
            $('[name="jenis_barang_update"]').val(jenis);
        });

        $('#btn-export').click(function (e) { 
            e.preventDefault();
            var id_bidang = $('[name="id_bidang"]').val();

            var page = "export-data-bidang?id_bidang=" + id_bidang"; 
            window.location = page; 
        });
    });
</script>

<script>
    $(document).ready(function () {

        $('#laporan_barang_keluar').DataTable({
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

        $('#body-barang-keluar').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var id_barang = $(this).attr('data-id_barang');
            var nama = $(this).attr('data-nama');
            var tanggal = $(this).attr('data-tanggal');
            var jumlah = $(this).attr('data-jumlah');

            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_barang"]').val(id_barang);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="tanggal_keluar_update"]').val(tanggal);
            $('[name="jumlah_barang_update"]').val(jumlah);
        });

        $('#btn-export').click(function (e) { 
            e.preventDefault();
            var dari = $('[name="start_date"]').val();
            var sampai = $('[name="end_date"]').val();

            var page = "export-barang-keluar?dari=" + dari + '&sampai=' + sampai; 
            window.location = page; 
        });
    });
</script>
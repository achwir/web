
<script>
    $(document).ready(function () {

        $('#laporan_transaksi').DataTable({
            "pageLength": 25,
            "dom": 'lBTfgtp',
            "buttons": [{
                extend: 'copy',
                footer: true 
            },{
                extend: 'csv',
                footer: true 
            },{
                extend: 'excel', title: 'Laporan Barang Masuk',
                footer: true 
            },{
                extend: 'pdf', title: 'Laporan Barang Masuk',
                footer: true
            },{
                extend: 'print', 
                footer: true,
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

    });
</script>
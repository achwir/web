<script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script>
<script>

    $(document).ready(function () {
        $('#body-barang-keluar').on('click', '.btn-update', function () {
            var id = $(this).attr('data-id');
            var id_barang = $(this).attr('data-id_barang');
            var id_bidang = $(this).attr('data-id_bidang');
            var nama = $(this).attr('data-nama');
            var peminjam = $(this).attr('data-peminjam');
            var tanggal = $(this).attr('data-tanggal');
            var jumlah = $(this).attr('data-jumlah');
// console.log(id_bidang);
            $('#modal-update').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_barang"]').val(id_barang);
            $('[name="id_bidang_update"]').val(id_bidang).trigger('change');
            $('[name="nama_barang_update"]').val(nama);
            $('[name="nama_peminjam_update"]').val(peminjam);
            $('[name="tanggal_keluar_update"]').val(tanggal);
            $('[name="jumlah_barang_update"]').val(jumlah);
            $('[name="jumlah_sebelum"]').val(jumlah);
        });

        $('#body-barang-keluar').on('click', '.btn-validation', function() {
            var id = $(this).attr('data-id');
            var id_barang = $(this).attr('data-id_barang');
            var nama = $(this).attr('data-nama');
            var peminjam = $(this).attr('data-peminjam');
            var peminjaman = $(this).attr('data-peminjaman');
            var pengembalian = $(this).attr('data-pengembalian');
            var jumlah = $(this).attr('data-jumlah');

            $('#modal-validation').modal('show');

            $('[name="id_update"]').val(id);
            $('[name="id_barang"]').val(id_barang);
            $('[name="nama_barang_update"]').val(nama);
            $('[name="nama_peminjam_update"]').val(peminjam);
            $('[name="tanggal_keluar_update"]').val(tanggal);
            $('[name="jumlah_barang_update"]').val(jumlah);
            $('[name="jumlah_sebelum"]').val(jumlah);
        });

    });

    let selectedDeviceId = null;
    const codeReader = new ZXing.BrowserMultiFormatReader();
    const sourceSelect = $("#pilihKamera");
    
    
    $('#modal-tambah').on('shown.bs.modal', function (e) {
        $(document).on('change','#pilihKamera',function(){
            selectedDeviceId = $(this).val();
            if(codeReader){
                codeReader.reset()
                initScanner()
            }
        })

    })
    
    function initScanner() {
        codeReader
        .listVideoInputDevices()
        .then(videoInputDevices => {
            videoInputDevices.forEach(device =>
                console.log(`${device.label}, ${device.deviceId}`)
            );

            if(videoInputDevices.length > 0){
                    
                if(selectedDeviceId == null){
                    if(videoInputDevices.length > 1){
                        selectedDeviceId = videoInputDevices[1].deviceId
                    } else {
                        selectedDeviceId = videoInputDevices[0].deviceId
                    }
                }
                    
                    
                if (videoInputDevices.length >= 1) {
                    sourceSelect.html('');
                    videoInputDevices.forEach((element) => {
                        const sourceOption = document.createElement('option')
                        sourceOption.text = element.label
                        sourceOption.value = element.deviceId
                        if(element.deviceId == selectedDeviceId){
                            sourceOption.selected = 'selected';
                        }
                        sourceSelect.append(sourceOption)
                    })
                
                }

                codeReader
                    .decodeOnceFromVideoDevice(selectedDeviceId, 'previewKamera')
                    .then(result => {

                            //hasil scan
                            console.log(result.text)
                            $("#hasilscan").val(result.text);
                            
                            if(codeReader){
                                codeReader.reset()
                            }
                    })
                    .catch(err => console.error(err));
                    
            } else {
                alert("Camera not found!")
            }
        })
        .catch(err => console.error(err));
    }

    if (navigator.mediaDevices) {
        initScanner()
    } else {
        alert('Cannot access camera.');
    }


</script>
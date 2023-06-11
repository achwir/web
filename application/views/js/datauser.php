<script>
    $(document).ready(function () {
        var base_url = '<?= base_url() ?>';
        $('#body-data-user').on('click', '.btn-update', function () {
            var foto = '';

            var id = $(this).attr('data-id');
            var username = $(this).attr('data-username');
            var email = $(this).attr('data-email');
            var nama_lengkap = $(this).attr('data-nama-lengkap');
            var group_id = $(this).attr('data-group_id');
            var status = $(this).attr('data-status');
            var foto1 = $(this).attr('data-foto');

            if (foto1 != '') {
                foto = foto1;
            }else{
                foto = 'default.png';
            }

            $('[name="id_update"]').val(id);
            // $('[name="foto_update_val"]').val(foto1);
            $('#preview-foto').attr('src', base_url + '/assets/img/' + foto);
            $('[name="username_update"]').val(username);
            $('[name="email_update"]').val(email);
            $('[name="nama_lengkap_update"]').val(nama_lengkap);
            $('[name="group_id_update"]').val(group_id);
            $('[name="status_update"]').val(status);

            $('#modal-update').modal('show');

        });
    });
</script>
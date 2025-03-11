<script>
$(document).on('submit', '#form-tambah', function(e) {
    
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?= base_url('proses-login') ?>",
        method: 'post',
        data: new FormData(this),
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function(res) {
            if (res.icon == 'success') {
                swal({
                    title: "Success",
                    icon: res.icon,
                    text: res.msg,
                    dangerMode: false,
                    buttons: {
                        confirm: "Lanjut ke dashboard",
                    }
                }).then((ok) => {
                    window.location.href = res.link;
                });
            } else {
                swal({
                    title: 'Gagal',
                    text: "Username atau Password Salah",
                    icon: "error",
                    closeOnClickOutside: false,
                    closeOnEsc: false
                });
            }
        }
    });
});
</script>
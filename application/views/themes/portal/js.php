<?php
$uri  = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
if($title != 'Page Not Found'):
    if($uri == null || $uri == ""):
        $this->load->view('portal/beranda/js/js-beranda');
    elseif($uri2 != null):
        $this->load->view('portal/customer/'.$uri2.'/js/js-'.$uri2);
    elseif($uri == 'customer' || $uri == 'forgot-password' || $uri == 'reset-password' || $uri == 'register'):
        $this->load->view('auth/js/js-'.$uri);
    else:
        $this->load->view('portal/'.$uri.'/js/js-'.$uri);
    endif;
endif;
?>
<script>
var ins = $('#form-add-new-data').on('submit', function(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?php echo base_url('save-komentar'); ?>",
        method: 'post',
        data: new FormData(this),
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function(r) {
            if (r.icon == 'success') {
                swal({
                    title: "Success",
                    icon: r.icon,
                    text: r.msg,
                    dangerMode: false,
                    buttons: {
                        confirm: "Ok",
                    }
                }).then((ok) => {
                    $('#email').val('');
                    $('#comment').val('');
                });
            } else {
                swal({
                    title: r.icon,
                    text: r.msg,
                    icon: r.icon
                });
            }
        }
    });
});

function underConstruction() {
    swal({
        title: "Peringatan",
        text: "Menu under construction",
        icon: "warning"
    });
}

function ubahKataSandi(key) {
    $("#id_reset").val(key);
    $("#modalResetPassword").modal({
        backdrop: 'static',
        keyboard: false
    }, 'show');
}

function checkResetPass() {
    var newPass = $('#r-newpass').val();
    var confirmPass = $('#r-confirm').val();
    if (newPass == confirmPass && newPass != "" && confirmPass != "" && newPass.length >= 8) {
        $('#btnSaveReset').attr('type', 'submit');
        $('#btnSaveReset').attr('class', 'btn btn-primary pd-y-12 btn-block');
        $('#msg-alert-reset').attr('style', 'display:block;');
        $('#msg-alert-reset').attr('class', 'alert alert-success');
        $('#msg-alert-reset span').html('Password sesuai');
    } else {
        $('#msg-alert-reset').attr('style', 'display:block;');
        $('#msg-alert-reset').attr('class', 'alert alert-danger');
        if (newPass != confirmPass) {
            $('#msg-alert-reset span').html('Password tidak sama');
        } else if (newPass.length < 8) {
            $('#msg-alert-reset span').html('Panjang password kurang dari 8');
        }
        $('#btnSaveReset').attr('type', 'button');
        $('#btnSaveReset').attr('class', 'btn disbled pd-y-12 btn-block');
    }
}

function closeResetPass() {
    $('#modalResetPassword').modal('hide');
    $('#form_reset_pass').trigger("reset");
    $('#msg-alert-reset').attr('style', 'display:none;');
    $('#btnSaveReset').attr('type', 'button');
    $('#btnSaveReset').attr('class', 'btn disbled');
}

var ins = $('#form-data-login').on('submit', function(e) {

    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?php echo base_url('proses-login'); ?>",
        method: 'post',
        data: new FormData(this),
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function(r) {
            if (r.icon == 'success') {
                swal({
                    title: "Success",
                    icon: r.icon,
                    text: r.msg,
                    dangerMode: false,
                    buttons: {
                        confirm: "Ok",
                    }
                }).then((ok) => {
                    window.location.href = "<?= base_url('/') ?>";
                });
            } else {
                swal({
                    title: r.icon,
                    text: r.msg,
                    icon: r.icon
                });
            }
        }
    });
});

<?php if($this->session->userdata('id_user') != null ): ?>

function keluar() {
    swal({
        title: "Peringatan",
        icon: "warning",
        text: "Apakah anda yakin ingin keluar ?",
        dangerMode: true,
        buttons: {
            cancel: "Batal",
            confirm: "Keluar",
        }
    }).then((ok) => {
        if (ok) {
            $.ajax({
                url: "<?php echo base_url('logout'); ?>",
                type: "POST",
                dataType: "JSON",
                success: function(r) {
                    swal({
                        title: "Berhasil",
                        icon: r.icon,
                        text: r.msg,
                        dangerMode: false,
                        buttons: {
                            confirm: "Ok",
                        }
                    }).then((ok) => {
                        window.location.href = "<?= base_url('/') ?>";
                    });
                }
            });
        } else {
            swal({
                title: "Dibatalkan",
                text: "Batal keluar",
                icon: "info"
            });
        }
    });
}
<?php endif; ?>
</script>
<script type="text/javascript">
CIPTA = {};
</script>

<script type="text/javascript">
CIPTA.editor_type = 1;
CIPTA.product_item_id = 338;
CIPTA.product_subtype_id = 2;
CIPTA.product_type_id = 1;
CIPTA.discount_table = {
    "338": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "1": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "10": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "2": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "385": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "31": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "297": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "130": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "30": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "458": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "84": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "32": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "33": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "205": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "12": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "11": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "420": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "419": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "418": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "52": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "316": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "317": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "179": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "112": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "111": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "16": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "15": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "14": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "13": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "433": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "432": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "270": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "197": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "397": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "405": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "415": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "319": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "288": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "273": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "203": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "318": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "169": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "94": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "231": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "235": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "346": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "276": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "166": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "165": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "92": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "239": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "238": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "378": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "416": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "277": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "241": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "195": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "141": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "78": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "48": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "324": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "242": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "194": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "168": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "93": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "37": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "325": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "243": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "377": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "233": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "232": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "315": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "167": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "144": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "51": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "83": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "49": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "50": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "349": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "348": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "350": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "347": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "206": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "215": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "198": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "193": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "114": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "118": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "79": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "19": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "18": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "17": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "47": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "56": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "57": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "58": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "86": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "85": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "59": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "39": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "53": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "38": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "44": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "46": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "36": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "100": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "152": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "153": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "101": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "417": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "274": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "296": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "229": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "452": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "96": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "209": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "115": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "290": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "254": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "341": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "292": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "208": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "217": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "253": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "263": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "249": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "264": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "246": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "262": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "333": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "225": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "35": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "76": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "77": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "55": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "54": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "45": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "34": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "431": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "430": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "429": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "323": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "375": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "216": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "250": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "245": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "171": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "75": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "376": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "301": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "303": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "302": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "252": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "251": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "300": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "212": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "393": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "244": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "404": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "363": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "269": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "268": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "365": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "364": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "289": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "213": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "170": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "211": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "200": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "214": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "176": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "40": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "228": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "43": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "178": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "199": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "41": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "42": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "62": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "87": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "20": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "21": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "66": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "88": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "89": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "69": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "90": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "91": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "60": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "65": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "61": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "403": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "402": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "287": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "219": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "218": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "361": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "201": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "177": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "127": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "220": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "145": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "248": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "223": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "396": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "222": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "286": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "221": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "247": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "224": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "64": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "202": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "226": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "74": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "63": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "67": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "68": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "124": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "426": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "154": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "71": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "70": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "72": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "73": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "82": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "95": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "109": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "369": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "370": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "372": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "117": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "104": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "106": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "116": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "108": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "183": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "120": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "139": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "140": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "142": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "143": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "146": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "149": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "119": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "97": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "98": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "99": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "102": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "103": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "105": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "107": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "447": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "410": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "110": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "134": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "135": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "158": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "159": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "121": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "414": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "413": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "122": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "180": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "291": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "184": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "308": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "185": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "309": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "310": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "398": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "123": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "126": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "125": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "337": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "335": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "128": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "129": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "131": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "147": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "182": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "132": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "133": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "421": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "136": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "137": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "138": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "151": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "265": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "450": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "148": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "455": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "456": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "150": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "155": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "360": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "381": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "394": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "395": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "428": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "435": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "156": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "173": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "434": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "188": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "189": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "230": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "311": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "312": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "336": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "157": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "163": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "164": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "339": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "295": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "192": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "160": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "162": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "329": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "161": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "380": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "172": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "174": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "196": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "207": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "175": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "181": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "186": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "187": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "406": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "190": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "191": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "343": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "371": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "210": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "281": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "285": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "374": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "392": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "400": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "401": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "237": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "236": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "255": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "271": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "279": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "259": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "256": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "362": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "389": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "390": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "391": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "261": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "373": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "260": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "227": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "278": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "234": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "272": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "258": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "257": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "440": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "444": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "451": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "454": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "460": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "266": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "457": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "267": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "328": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "275": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "330": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "399": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "280": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "282": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "283": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "284": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "462": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "463": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "464": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "379": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "204": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "293": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "299": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "313": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "340": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "353": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "407": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "409": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "461": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "294": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "320": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "321": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "352": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "354": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "298": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "459": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "408": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "411": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "412": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "304": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "305": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "306": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "307": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "332": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "331": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "327": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "326": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "322": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "342": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "344": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "345": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "359": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "355": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "357": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "356": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "358": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "383": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "366": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "334": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "314": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "382": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "388": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "387": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "386": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "384": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "367": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "368": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "443": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "442": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "445": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "446": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "448": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "449": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "453": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "113": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "240": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "422": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "423": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "424": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "425": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    },
    "427": {
        "disc_custom": null,
        "disc_design": null,
        "disc_store": null
    }
};
CIPTA.is_logged_in = false;
</script>

<script type="text/javascript"
    src="Desain%20Kaos%20Pria%20-%20Yarn%20&amp;%20Spindle%20(Y&amp;S)%20Custom%20Satuan%20Print%20-%20Ciptaloka.com_files/commonfooter20210208.js">
</script>
<script type="text/javascript"
    src="Desain%20Kaos%20Pria%20-%20Yarn%20&amp;%20Spindle%20(Y&amp;S)%20Custom%20Satuan%20Print%20-%20Ciptaloka.com_files/editorfooter20210208.js">
</script>


<script type="text/template" id="qq-template">
    <div class="qq-uploader-selector qq-uploader">
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span>Drop files here to upload</span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Upload a file</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list">
                <li>
                  <div class="qq-progress-bar-container-selector">
                      <div class="qq-progress-bar-selector qq-progress-bar"></div>
                  </div>
                  <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                  <span class="qq-edit-filename-icon-selector qq-edit-filename-icon"></span>
                  <span class="qq-upload-file-selector qq-upload-file"></span>
                  <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                  <span class="qq-upload-size-selector qq-upload-size"></span>
                  <a class="qq-upload-cancel-selector qq-upload-cancel" href="#">Cancel</a>
                  <a class="qq-upload-retry-selector qq-upload-retry" href="#">Retry</a>
                  <a class="qq-upload-delete-selector qq-upload-delete" href="#">Delete</a>
                  <span class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>
    </div>
</script>

<script type="text/template" id="qq-simple-thumbnails-template">
    <div class="qq-uploader-selector qq-uploader">
        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
          <span>Drop files here to upload</span>
        </div>
        <span class="qq-drop-processing-selector qq-drop-processing">
          <span>Processing dropped files...</span>
          <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
        </span>
        <ul class="qq-upload-list-selector qq-upload-list">
          <li>
            <div class="qq-progress-bar-container-selector">
              <div class="qq-progress-bar-selector qq-progress-bar"></div>
            </div>
            <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
            <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
            <span class="qq-edit-filename-icon-selector qq-edit-filename-icon"></span>
            <span class="qq-upload-file-selector qq-upload-file"></span>
            <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
            <span class="qq-upload-size-selector qq-upload-size"></span>
            <a class="qq-upload-cancel-selector qq-upload-cancel" href="#">Cancel</a>
            <a class="qq-upload-retry-selector qq-upload-retry" href="#">Retry</a>
            <a class="qq-upload-delete-selector qq-upload-delete" href="#">Delete</a>
            <span class="qq-upload-status-text-selector qq-upload-status-text"></span>
          </li>
        </ul>
        <div class="row" style="margin-bottom:5px; margin-top:40px;">        
          <div class="large-6 medium-6 small-6 columns">
            <!--div class="qq-upload-button-selector qq-upload-button">
              <div>Pilih File...</div>
            </div-->
            <a class="qq-upload-button-selector qq-upload-button button tiny cipta-button-darkblue expand" style="border-radius:0px;" id="button_choose_file">Pilih File...</a> 
          </div>
          <div class="large-6 medium-6 small-6 columns">
            <a class="button tiny cipta-button-lightgray close-reveal-modal expand" style="position:relative; top:0px; left:0px; line-height:normal;">Batal</a>
          </div>
        </div>
    </div>
</script>
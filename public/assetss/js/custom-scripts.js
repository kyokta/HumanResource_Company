// definition of link url
var link = window.location.href
var str = link.split("/")
var url = str[0] + '//' + str[2] + '/' + str[3] + '/' + str[4] + '/'

// pekerja
$(document).ready(function(){
    $('#tambahpekerja-seksi').select2({
        searching: false,
        placeholder: "Seksi",
        allowClear: true,
        ajax: {
            url: url + 'Pekerja/getSeksi',
            dataType: 'json',
            delay: 500,
            type: 'GET',
            data: function(params) {
                return {
                    term: params.term
                }
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(obj) {
                        return { id: obj.id_seksi, text: obj.seksi };
                    })
                }
            }
        }
    })

    $('#tambahpekerja-jabatan').select2({
        searching: false,
        placeholder: "Jabatan",
        allowClear: true,
        ajax: {
            url : url + 'Pekerja/getJabatan',
            dataType: 'json',
            delay: 500,
            type: 'GET',
            data: function(params) {
                return {
                    term: params.term
                }
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(obj) {
                        return {id : obj.id_jabatan, text: obj.kd_jabatan + ' - ' + obj.jabatan}
                    })
                }
            }
        }
    })

    $('#tambahpekerja-golongan').select2({
        searching: false,
        placeholder: "Golongan",
        allowClear: true,
        ajax: {
            url : url + 'Pekerja/getGolongan',
            dataType: 'json',
            delay: 500,
            type: 'GET',
            data: function(params) {
                return {
                    term: params.term
                }
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(obj) {
                        return {id : obj.id_golongan, text: obj.golongan}
                    })
                }
            }
        }
    })

    $('#tambahpekerja-pekerjaan').select2({
        searching: false,
        placeholder: "Pekerjaan",
        allowClear: true,
        ajax: {
            url : url + 'Pekerja/getPekerjaan',
            dataType: 'json',
            delay: 500,
            type: 'GET',
            data: function(params) {
                return {
                    term: params.term
                }
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(obj) {
                        return {id : obj.id_pekerjaan, text: obj.pekerjaan}
                    })
                }
            }
        }
    })

    $('#tambahpekerja-submit').on('click', function(e){
       e .preventDefault();
        var form = $(this).parents('form')
        Swal.fire({
            title: 'Data yakin dikirim?',
            text: "Data pekerja akan dimasukkan ke dalam database",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
                Swal.fire(
                    'Berhasil',
                    'Data telah berhasil ditambahkan',
                    'success'
                )
            }
        })
    })

    $('.hapuspekerja').on('click', function(){
        var id = $(this).val()
        Swal.fire({
            title: 'Hapus data?',
            text: "Data pekerja akan dinonaktifkan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url : url + "Pekerja/deletepekerja",
                    data: {
                        id_pekerja: id
                    },
                    success: function(response) {
                        if (response == 200){
                            Swal.fire(
                                'Gagal!',
                                'Pekerja dengan ID Pegawai ' + id + ' gagal dinonaktifkan',
                                'error'
                            )
                        } else {
                            Swal.fire({
                                title: "Berhasil",
                                text: "Pekerja dengan ID Pegawai " + id + " berhasil dinonaktifkan",
                                icon: "success"
                            }).then(function(){
                                location.reload()
                            })
                        }
                    }
                })
            }
        })
    })
    $('.detailpekerja').on('click', function(){
        var id = $(this).val()
        $.ajax({
            type: 'post',
            url: url + 'Pekerja/getDetail',
            dataType: 'json',
            data: {
                id_pekerja: id
            }, success: function(data){
                $.each(data, function(index, element) {
                    $('#detail-id').html(element.id_pegawai)
                    $('#detail-namapekerja').html(element.nama_lengkap)
                    $('#detail-tmplahir').html(element.tempat_lahir)
                    $('#detail-tgllahir').html(element.tanggal_lahir)
                    $('#detail-npwp').html(element.npwp)
                    $('#detail-alamat').html(element.alamat)
                    $('#detail-departemen').html(element.departemen)
                    $('#detail-unit').html(element.unit)
                    $('#detail-seksi').html(element.seksi)
                    $('#detail-jabatan').html(element.jabatan)
                    $('#detail-golongan').html(element.golongan)
                    $('#detail-pekerjaan').html(element.pekerjaan)
                });
            }
        })
    })
})

// Seksi
$(document).ready(function(){
    $('#seksi-departemen').select2({
        dropdownParent: $('#exampleModal'),
        searching: false,
        placeholder: "Departemen",
        allowClear: true,
        ajax: {
            url: url + 'Seksi/getDepartemen',
            dataType: 'json',
            delay: 500,
            type: 'GET',
            data: function(params) {
                return {
                    term: params.term
                }
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(obj) {
                        return { id: obj.id_departemen, text: obj.departemen };
                    })
                }
            }
        }
    });

})
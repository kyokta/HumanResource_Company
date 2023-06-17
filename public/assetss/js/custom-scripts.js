// definition of link url
var link = window.location.href
var str = link.split("/")
var url = str[0] + '//' + str[2] + '/' + str[3] + '/' + str[4] + '/'

// pekerja
$(document).ready(function(){
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
                    $('.detail-button').each(function(){
                        var oldhref = this.href
                        var newhref = oldhref.replace(oldhref, url + "pekerja/detail/" + element.id_pegawai)

                        $(this).attr("href", newhref);
                    })
                });
            }
        })
    })
    $('#editpekerja-submit').on('click', function(e){
        e .preventDefault();
         var form = $(this).parents('form')
         Swal.fire({
             title: 'Data yakin dikirim?',
             text: "Data pekerja akan diperbaharui",
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
                    'Data telah berhasil diperbaharui',
                    'success'
                )
                location.reload()
             }
         })
     })
})

// Seksi
$(document).ready(function(){
    $('.seksi-edit-btn').on('click', function(){
        var id = $(this).val()
        $.ajax({
            type: 'post',
            url : url + 'Seksi/editSeksi',
            dataType: 'json',
            data: {
                id_seksi: id
            }, success: function(data){
                $('#editseksi-id').val(data['id_seksi'])
                $('#editseksi-unit').val(data['unit'])
                $('#editseksi-seksi').val(data['seksi'])
            }
        })
    })
    $('.seksi-delete-btn').on('click', function(){
        var id = $(this).val()
        Swal.fire({
            title: 'Hapus Seksi?',
            text: "Jabatan ini akan dihapus dari data seksi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url : url + "Seksi/deleteSeksi",
                    data: {
                        id_seksi: id
                    },
                    success: function(response) {
                        if (response == 200){
                            Swal.fire(
                                'Gagal!',
                                'Terdapat pekerja dengan seksi ini',
                                'error'
                            )
                        } else {
                            Swal.fire({
                                title: "Berhasil",
                                text: "Seksi berhasil dihapus",
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
})

// Jabatan
$(document).ready(function(){
    $('.jabatan-edit-btn').on('click', function(){
        var id = $(this).val()
        $.ajax({
            type: 'post',
            url: url + 'Jabatan/detailJabatan',
            dataType: 'json',
            data: {
                id_jabatan: id
            }, success: function(data){
                $('#editjabatan-id').val(data['id_jabatan'])
                $('#editjabatan-kode').val(data['kd_jabatan'])
                $('#editjabatan-jabatan').val(data['jabatan'])
            }
        })
    })
    $('.jabatan-delete-btn').on('click', function(){
        var id = $(this).val()
        Swal.fire({
            title: 'Hapus Jabatan?',
            text: "Jabatan ini akan dihapus dari data jabatan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url : url + "Jabatan/deleteJabatan",
                    data: {
                        id_jabatan: id
                    },
                    success: function(response) {
                        if (response == 200){
                            Swal.fire(
                                'Gagal!',
                                'Terdapat pekerja dengan jabatan ini',
                                'error'
                            )
                        } else {
                            Swal.fire({
                                title: "Berhasil",
                                text: "Jabatan berhasil dihapus",
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
})

// Golongan
$(document).ready(function(){
    $('.golongan-edit-btn').on('click', function(){
        var id = $(this).val()
        $.ajax({
            type: 'post',
            url: url + 'Golongan/detailGolongan',
            dataType: 'json',
            data: {
                id_golongan: id
            }, success: function(data){
                $('#editgolongan-id').val(data['id_golongan'])
                $('#editgolongan-golongan').val(data['golongan'])
            }
        })
    })
    $('.golongan-delete-btn').on('click', function(){
        var id = $(this).val()
        Swal.fire({
            title: 'Hapus Golongan?',
            text: "Golongan ini akan dihapus dari data golongan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url : url + "Golongan/deleteGolongan",
                    data: {
                        id_golongan: id
                    },
                    success: function(response) {
                        if (response == 200){
                            Swal.fire(
                                'Gagal!',
                                'Terdapat pekerja dengan golongan ini',
                                'error'
                            )
                        } else {
                            Swal.fire({
                                title: "Berhasil",
                                text: "Golongan berhasil dihapus",
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
})

// Pekerjaan
$(document).ready(function(){
    $('.pekerjaan-edit-btn').on('click', function(){
        var id = $(this).val()
        $.ajax({
            type: 'post',
            url: url + 'Pekerjaan/detailPekerjaan',
            dataType: 'json',
            data: {
                id_pekerjaan: id
            }, success: function(data){
                $('#editpekerjaan-id').val(data['id_pekerjaan'])
                $('#editpekerjaan-pekerjaan').val(data['pekerjaan'])
            }
        })
    })
    $('.pekerjaan-delete-btn').on('click', function(){
        var id = $(this).val()
        Swal.fire({
            title: 'Hapus Pekerjaan?',
            text: "Pekerjaan ini akan dihapus dari data pekerjaan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url : url + "Pekerjaan/deletePekerjaan",
                    data: {
                        id_pekerjaan: id
                    },
                    success: function(response) {
                        if (response == 200){
                            Swal.fire(
                                'Gagal!',
                                'Terdapat pekerja dengan pekerjaan ini',
                                'error'
                            )
                        } else {
                            Swal.fire({
                                title: "Berhasil",
                                text: "Pekerjaan berhasil dihapus",
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
})

// Gaji
$(document).ready(function(){
    $('.gaji-detail-btn').on('click', function(){
        var id = $(this).val()
        $.ajax({
            type: 'post',
            url: url + 'Gaji/detailGaji',
            dataType: 'json',
            data: {
                id_pegawai: id
            }, success: function(data){
                $.each(data, function(index, rowData) {
                    var row = $("<tr></tr>");
                    
                    $.each(rowData, function(key, value) {
                        var cell = $("<td></td>").text(value);
                        row.append(cell);
                    });
                    
                    $("#detail-gaji").append(row);
                });
            }
        })
    })
})
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
                        var newhref = oldhref.replace(oldhref, "http://localhost/TA_MVC/public/pekerja/detail/" + element.id_pegawai)

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

})

// Jabatan
$(document).ready(function(){
})
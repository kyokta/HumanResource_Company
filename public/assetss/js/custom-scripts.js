// Seksi
$(document).ready(function(){
    $('#seksi-departemen').select2({
        dropdownParent: $('#exampleModal'),
        searching: false,
        placeholder: "Departemen",
        allowClear: true,
        ajax: {
            url: 'http://localhost/TA_MVC/public/Seksi/getDepartemen',
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
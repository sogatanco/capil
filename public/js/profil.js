$(document).ready(function () {
    $('#setting').click(function() {
        $('#modalEdit').modal('toggle');
    });

    $('select#kecamatan').change(function () {
        var selected=$(this).children('option:selected').val();
        if(selected!=0){
            $.ajax({
                url:'http://localhost:8080/capil/public/desa/'+selected,
                success:function(result) {
                    $('select#gampong').html('<option></option>')
                    $.each(result, function (i, v) {
                        $('select#gampong').append(`<option value="`+v.id+`">`+v.nama_desa+`</option>`)
                    });
                }
            });
        }
        $('select#gampong').html('')
    });

});
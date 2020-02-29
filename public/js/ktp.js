$(document).ready(function(){


    $('#smartwizard').smartWizard({
        toolbarSettings:{
            toolbarExtraButtons:[
                $('<button></button>').text('Finish')
                            .addClass('btn btn-danger')
                            .on('click', function(){ 
                                $('#submitKtp').submit()
                            })
            ]
        }
    });

     $('#submitKtp').on('submit', function(event){
         event.preventDefault();
         $.ajax({
             url:'ktp',
             method:'POST',
             data:new FormData(this),
             dataType:'JSON',
             contentType:false,
             cache:false,
             processData:false,
             success:function(data){
                 console.log(data)
                 $('#responModal').modal('toggle')
                 $('#submitStatus').html(data.status+' !')
                 $('#submitMessage').html(data.message+' !')
                 $('#submitIcon').attr('src', 'images/'+data.status+'.png')
                 if(data.status=='berhasil'){
                    $('#closeModal').attr('href', 'home')
                 }else{
                     $('#closeModal').attr('href', '')
                 }
                 
             }
         })
     });

// pengantar KTP
    $('#unggah_pengantar_ktp').click(function(){
        $('#file_pengantar_ktp').click()
    })

    $('#file_pengantar_ktp').on('change', function(){
        $('#pengantar_ktp').submit()
    })

   $('#pengantar_ktp').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'upload',
            method:'POST',
            data:new FormData(this),
            dataType:'JSON',
            contentType:false,
            cache:false,
            processData:false,
            success:function(data)
            {
                if(data.message=='yes'){
                    $('#view_pengantar_ktp').removeClass('disabled');
                    $('#view_pengantar_ktp2').removeClass('disabled');
                    $('#view_pengantar_ktp').attr('href',data.path);
                    $('#view_pengantar_ktp2').attr('href',data.path);
                    $('#unggah_pengantar_ktp').html('Re-Upload');
                }
                else
                {
                    alert(data.message)
                }
            }
        })
   });



// KK
    $('#unggah_kk').click(function(){
        $('#file_kk').click()
    })

    $('#file_kk').on('change', function(){
        $('#kk').submit()
    })

   $('#kk').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'upload',
            method:'POST',
            data:new FormData(this),
            dataType:'JSON',
            contentType:false,
            cache:false,
            processData:false,
            success:function(data)
            {
                if(data.message=='yes'){
                    $('#view_kk').removeClass('disabled');
                    $('#view_kk2').removeClass('disabled');
                    $('#view_kk').attr('href',data.path);
                    $('#view_kk2').attr('href',data.path);
                    $('#unggah_kk').html('Re-Upload');
                }
                else
                {
                    alert(data.message)
                }
            }
        })
   });



// akte_kelahiran
    $('#unggah_akte_kelahiran').click(function(){
        $('#file_akte_kelahiran').click()
    })

    $('#file_akte_kelahiran').on('change', function(){
        $('#akte_kelahiran').submit()
    })

   $('#akte_kelahiran').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'upload',
            method:'POST',
            data:new FormData(this),
            dataType:'JSON',
            contentType:false,
            cache:false,
            processData:false,
            success:function(data)
            {
                if(data.message=='yes'){
                    $('#view_akte_kelahiran').attr('href',data.path);
                    $('#view_akte_kelahiran2').attr('href',data.path);
                    $('#view_akte_kelahiran').removeClass('disabled');
                    $('#view_akte_kelahiran2').removeClass('disabled');
                    $('#unggah_akte_kelahiran').html('Re-Upload');
                }
                else
                {
                    alert(data.message)
                }
            }
        })
   });



// surat_pindah
    $('#unggah_surat_pindah').click(function(){
        $('#file_surat_pindah').click()
    })

    $('#file_surat_pindah').on('change', function(){
        $('#surat_pindah').submit()
    })

   $('#surat_pindah').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'upload',
            method:'POST',
            data:new FormData(this),
            dataType:'JSON',
            contentType:false,
            cache:false,
            processData:false,
            success:function(data)
            {
                if(data.message=='yes'){
                    $('#view_surat_pindah').attr('href',data.path);
                    $('#view_surat_pindah2').attr('href',data.path);
                    $('#view_surat_pindah').removeClass('disabled');
                    $('#view_surat_pindah2').removeClass('disabled');
                    $('#unggah_surat_pindah').html('Re-Upload');
                }
                else
                {
                    alert(data.message)
                }
            }
        })
   });



});
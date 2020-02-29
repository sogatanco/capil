$(document).ready(function(){

    $('#smartwizard').smartWizard({
        toolbarSettings:{
            toolbarExtraButtons:[
                $('<button></button>').text('Finish')
                            .addClass('btn btn-danger')
                            .on('click', function(){
                                $('#submitAkte').submit()
                            })
            ]
        }
    });

     $('#submitAkte').on('submit', function(event){
         event.preventDefault();
         $.ajax({
             url:'akte',
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



    // skk_kelurahan
    $('#unggah_skk_kelurahan').click(function(){
        $('#file_skk_kelurahan').click()
    })

    $('#file_skk_kelurahan').on('change', function(){
        $('#skk_kelurahan').submit()
    })

   $('#skk_kelurahan').on('submit', function(event){
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
                    $('#view_skk_kelurahan').removeClass('disabled');
                    $('#view_skk_kelurahan2').removeClass('disabled');
                    $('#view_skk_kelurahan').attr('href',data.path);
                    $('#view_skk_kelurahan2').attr('href',data.path);
                    $('#unggah_skk_kelurahan').html('Re-Upload');
                }
                else
                {
                    alert(data.message)
                }
            }
        })
   });


    // surat_nikah
    $('#unggah_surat_nikah').click(function(){
        $('#file_surat_nikah').click()
    })

    $('#file_surat_nikah').on('change', function(){
        $('#surat_nikah').submit()
    })

   $('#surat_nikah').on('submit', function(event){
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
                    $('#view_surat_nikah').removeClass('disabled');
                    $('#view_surat_nikah2').removeClass('disabled');
                    $('#view_surat_nikah').attr('href',data.path);
                    $('#view_surat_nikah2').attr('href',data.path);
                    $('#unggah_surat_nikah').html('Re-Upload');
                }
                else
                {
                    alert(data.message)
                }
            }
        })
   });


    // surat_nikah
    $('#unggah_skk_bidan').click(function(){
        $('#file_skk_bidan').click()
    })

    $('#file_skk_bidan').on('change', function(){
        $('#skk_bidan').submit()
    })

   $('#skk_bidan').on('submit', function(event){
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
                    $('#view_skk_bidan').removeClass('disabled');
                    $('#view_skk_bidan2').removeClass('disabled');
                    $('#view_skk_bidan').attr('href',data.path);
                    $('#view_skk_bidan2').attr('href',data.path);
                    $('#unggah_skk_bidan').html('Re-Upload');
                }
                else
                {
                    alert(data.message)
                }
            }
        })
   });


   $('#nama').on('input', function(){
     $('#nama1').html($(this).val())
   });

   $('#tempat').on('input', function(){
     $('#tempat1').html($(this).val())
   });

   $('#tgl_lahir').on('input', function(){
     $('#tgl_lahir1').html($(this).val())
   });

   $('#ayah').on('input', function(){
     $('#ayah1').html($(this).val())
   });

   $('#ibu').on('input', function(){
     $('#ibu1').html($(this).val())
   });

   $('#anakke').on('input', function(){
     $('#anakke1').html($(this).val())
   });

   $('#jk').change(function(){
     $('#jk1').html($(this).val())
   });


});
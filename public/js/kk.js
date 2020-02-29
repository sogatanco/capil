$(document).ready(function(){

    $('#smartwizard').smartWizard({
        toolbarSettings:{
            toolbarExtraButtons:[
                $('<button></button>').text('Finish')
                            .addClass('btn btn-danger')
                            .on('click', function(){
                                $('#submitKk').submit()
                            })
            ]
        }
    });

     $('#submitKk').on('submit', function(event){
         event.preventDefault();
         $.ajax({
             url:'kk',
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
    $('#unggah_pengantar_kk').click(function(){
        $('#file_pengantar_kk').click()
    })

    $('#file_pengantar_kk').on('change', function(){
        $('#pengantar_kk').submit()
    })

   $('#pengantar_kk').on('submit', function(event){
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
                    $('#view_pengantar_kk').removeClass('disabled');
                    $('#view_pengantar_kk2').removeClass('disabled');
                    $('#view_pengantar_kk').attr('href',data.path);
                    $('#view_pengantar_kk2').attr('href',data.path);
                    $('#unggah_pengantar_kk').html('Re-Upload');
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
                    $('#view_surat_pindah').removeClass('disabled');
                    $('#view_surat_pindah2').removeClass('disabled');
                    $('#view_surat_pindah').attr('href',data.path);
                    $('#view_surat_pindah2').attr('href',data.path);
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
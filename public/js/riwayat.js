$(document).ready(function() {
    $('.view').click(function(){
        // alert($(this).data('id'))

        $('#detail').modal('toggle')
        
        $.ajax({
            url:'data/pengurusan/'+$(this).data('id'),
            method:'get',
            type:'json',
            success:function(data){
                if(data.jenis=='ktp'){
                    $('.title').html(`<h3 style="text-transform:capitalize">Berkas Pengurusan `+data.jenis+`</h3>`)
                    $.ajax({
                        url:'data/user/'+data.nik,
                        method:'get',
                        type:'json',
                        success:function(data){
                            $('.data').html(`
                                <table width="100%" style="text-transform:capitalize">
                                    <tr>
                                        <th width="40%">Nik</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.nik+`</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Nama Lengkap</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.nama+`</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Jenis Kelamin</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.jk+`</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Tempat / Tgl Lahir</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.tempat+` / `+data.tgl_lahir+`</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Alamat</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.alamat+`</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Pekerjaan</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.pekerjaan+`</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Agama</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.agama+`</td>
                                    </tr>
                                    <tr>
                                        <th width="40%">Status</th>
                                        <td width="5%">:</td>
                                        <td width="65%">`+data.status+`</td>
                                    </tr>
                                </table>
                            `)
                        }
                    })

                    // get syarat
                    $.ajax({
                        url:'data/persyaratan/'+data.nik,
                        method:'get',
                        type:'json',
                        success:function(data){
                            $('.syarat').html(`
                                <div class="table-responsive">

                                <h4 class="mt-4">Persyaratan</h4>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <ol>
                                            <tr>
                                                <td><li>Surat Pengantar dari Kepala Desa.</li></td>
                                                <td><a href="storage/`+data.pengantar_ktp+`" target="blank">`+data.pengantar_ktp+`</a></td>
                                            </tr>
                                            <tr>
                                                <td><li>salinan Kartu Keluarga (KK).</li></td>
                                                <td><a href="storage/`+data.kk+`" target="blank">`+data.kk+`</a></td>
                                            </tr>
                                            <tr>
                                                <td><li>salinan Akte Kelahiran.</li></td>
                                                <td><a href="storage/`+data.akte_kelahiran+`" target="blank">`+data.akte_kelahiran+`</a></td>
                                            </tr>
                                            <tr>
                                                <td><li>Surat Keterangan Pindah.</li></td>
                                                <td><a href="storage/`+data.surat_pindah+`" target="blank">`+data.surat_pindah+`</a></td>
                                            </tr>
                                        </ol>
                                    </tbody>
                                </table>
                                </div>
                            `)
                        }
                    })
                }



                if(data.jenis=='kk'){
                    $('.title').html(`<h3 style="text-transform:capitalize">Berkas Pengurusan `+data.jenis+`</h3>`)
                    $('.data1').html(`
                        <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tempat</th>
                                                <th>Tgl Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Pekerjaan</th>
                                                <th>Status</th>
                                                <th>Golongan Darah</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>Hubungan Keluarga</th>
                                                <th>Pendidikan</th>
                                            </tr>
                                        </thead>
                                        <tbody id="anggotakeluarga">
                                            
                                        </tbody>
                                    </table>
                                </div>
                    `)

                    $.ajax({
                        url:'data/user/'+data.nik,
                        method:'get',
                        type:'json',
                        success:function(data){
                            $('.data').html(`
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Nik</th>
                                                <th>Nama</th>
                                                <th>Tempat</th>
                                                <th>Tgl Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Agama</th>
                                                <th>Pekerjaan</th>
                                                <th>Status</th>
                                                <th>Golongan Darah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>`+data.nik+`</td>
                                                <td>`+data.nama+`</td>
                                                <td>`+data.tempat+`</td>
                                                <td>`+data.tgl_lahir+`</td>
                                                <td>`+data.jk+`</td>
                                                <td>`+data.alamat+`</td>
                                                <td>`+data.agama+`</td>
                                                <td>`+data.pekerjaan+`</td>
                                                <td>`+data.status+`</td>
                                                <td>`+data.gol_darah+`</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            `)
                        }
                    })

                    $.ajax({
                        url:'data/anggota/'+data.nik,
                        method:'get',
                        type:'json',
                        success:function(data){
                            for(i=0;i<data.length;i++){
                                $('#anggotakeluarga').append(`
                                <tr>
                                    <td>`+data[0].nama+`</td>
                                    <td>`+data[0].tempat+`</td>
                                    <td>`+data[0].tgl_lahir+`</td>
                                    <td>`+data[0].jk+`</td>
                                    <td>`+data[0].agama+`</td>
                                    <td>`+data[0].pekerjaan+`</td>
                                    <td>`+data[0].status+`</td>
                                    <td>`+data[0].gol_darah+`</td>
                                    <td>`+data[0].nama_ayah+`</td>
                                    <td>`+data[0].nama_ibu+`</td>
                                    <td>`+data[0].hubungan_keluarga+`</td>
                                    <td>`+data[0].pendidikan+`</td>
                                </tr>
                            `)
                            }
                        }
                    })

                    // get syarat
                    $.ajax({
                        url:'data/persyaratan/'+data.nik,
                        method:'get',
                        type:'json',
                        success:function(data){
                            $('.syarat').html(`
                                <div class="table-responsive">

                                <h4 class="mt-4">Persyaratan</h4>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <ol>
                                            <tr>
                                                <td><li>Surat Pengantar dari Kepala Desa.</li></td>
                                                <td><a href="storage/`+data.pengantar_kk+`" target="blank">`+data.pengantar_kk+`</a></td>
                                            </tr>
                                            <tr>
                                                <td><li>Fotokopi buku nikah/akta perkawinan.</li></td>
                                                <td><a href="storage/`+data.surat_nikah+`" target="blank">`+data.surat_nikah+`</a></td>
                                            </tr>
                                            <tr>
                                                <td><li>Surat Keterangan Pindah.</li></td>
                                                <td><a href="storage/`+data.surat_pindah+`" target="blank">`+data.surat_pindah+`</a></td>
                                            </tr>
                                        </ol>
                                    </tbody>
                                </table>
                                </div>
                            `)
                        }
                    })

                }

                if(data.jenis=='akte'){
                     $('.title').html(`<h3 style="text-transform:capitalize">Berkas Pengurusan `+data.jenis+`</h3>`)
                    $.ajax({
                        url:'data/anak/'+data.data,
                        method:'get',
                        type:'json',
                        success:function(data){
                            $('.data').html(`
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat</th>
                                                <th>Tgl Lahir</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama ibu</th>
                                                <th>Anak ke</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>`+data.nama+`</td>
                                                <td>`+data.jk+`</td>
                                                <td>`+data.tempat+`</td>
                                                <td>`+data.tgl_lahir+`</td>
                                                <td>`+data.ayah+`</td>
                                                <td>`+data.ibu+`</td>
                                                <td>`+data.anakke+`</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            `)
                        }
                    })

                    // get syarat
                    $.ajax({
                        url:'data/persyaratan/'+data.nik,
                        method:'get',
                        type:'json',
                        success:function(data){
                            $('.syarat').html(`
                                <div class="table-responsive">

                                <h4 class="mt-4">Persyaratan</h4>
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <ol>
                                            <tr>
                                                <td><li>Surat Keterangan Kelahiran dari Kelurahan.</li></td>
                                                <td><a href="storage/`+data.skk_kelurahan+`" target="blank">`+data.skk_kelurahan+`</a></td>
                                            </tr>
                                            <tr>
                                                <td><li>Surat Keterangan Kelahiran dari dokter/bidan/penolong kelahiran/Nakhoda Kapal Laut atau Pilot Pesawat Terbang.</li></td>
                                                <td><a href="storage/`+data.skk_bidan+`" target="blank">`+data.skk_bidan+`</a></td>
                                            </tr>
                                            <tr>
                                                <td><li>Surat Nikah/Akta Perkawinan orangtua.</li></td>
                                                <td><a href="storage/`+data.surat_nikah+`" target="blank">`+data.surat_nikah+`</a></td>
                                            </tr>
                                        </ol>
                                    </tbody>
                                </table>
                                </div>
                            `)
                        }
                    })
                }

            }

            
        })
    });
});
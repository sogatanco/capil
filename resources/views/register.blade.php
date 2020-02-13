<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{url('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/register.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i&display=swap" rel="stylesheet">
</head>
<body>


<div class="container-fluid">
  <div class="row">
  <div class="col-sm-6 kiri">
        <h1 class ="tulisan text-center">Disdukcapil </h1>
        <h2 class ="tulisan2">Kota Lhokseumawe </h2>
    </div>
    
    <div class="col-sm-6 kanan">
        <h1 class ="tulisan_kanan text-center">REGISTRASI </h1>
        <h2 class ="tulisan_kanan2 text-center">Isi data berikut sesuai dengan data KTP </h2>
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <form class="form-horizontal" action="/action_page.php">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email"></label>
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="email" placeholder="NIK">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="pwd"></label>
                <div class="col-sm-12">
                  <input type="password" class="form-control" id="pwd" placeholder="NOMOR KK">
                </div>
              </di>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
            </form>
            </div>

    </div>
    
  </div>
</div>

    
</body>
</html>
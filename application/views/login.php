<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pusat Laboratorium Farmasi  - POLTEKKES Kemenkes Jambi</title>
    <link href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css" media="screen">
        body{
           background: #3a6186;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #89253e, #3a6186);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right,#483D8B, #00FFFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">
                 <center><img src="<?php base_url('') ?>assets/image/logo.jpg" align="center" class='img-responsive'><br/></center>
                    <div class="panel-heading">

                        <h3 class="panel-title"><b><center>Silahkan Masuk<b/></h3></center>
                    </div>
                    <div class="panel-body">
                       <form role="form" method="post" action="login/cek">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama Pengguna" required name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Kata Sandi" required name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-warning btn-block" name="masuk">MASUK</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

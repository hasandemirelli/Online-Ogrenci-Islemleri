<?php
session_start();


?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ÖĞRENCİ KART BAKİYE YÜKLEME İŞLEMİ</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/icheck/skins/all.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png"/>
</head>

<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

        <table>
            <table align=”center”>
                <tr align=”center”>
                    <td align=”center”>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">ÖĞRENCİ KART'A PARA YÜKLEME</h4>
            <p class="card-description">Öğrenci Kart No: <?= $_SESSION['data']['id'] ?></p>
            <form action="ogrbakiye_yukleme.php" method="POST">

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi mdi-menu text-white"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="KART ÜZERİNDEKİ AD-SOYAD" aria-label=""
                               aria-describedby="colored-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="KART NUMARASI" aria-label="kartno"
                               aria-describedby="colored-addon2">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="AY" aria-label="ay"
                               aria-describedby="colored-addon3">
                        <input type="text" class="form-control" placeholder="YIL" aria-label="yıl"
                               aria-describedby="colored-addon4">
                        <input type="text" class="form-control" placeholder="CV2" aria-label="cv2"
                               aria-describedby="colored-addon5">
                        <div class="input-group-append bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-menu text-white"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">₺</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append bg-primary border-primary">
                            <span class="input-group-text bg-transparent text-white">.00</span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </form>
            </table>
</div>
</body>
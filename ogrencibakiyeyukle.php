<?php

require "src/config.php";

// Eger giris yapilmamissa login.php git
if(!isset($_SESSION['login'])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Öğrenci İşlemleri - Öğrenci Kartı Bakiye Yükle</title>

    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-scroller">

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="/">
                <img src="images/logo.png" alt="logo" style="height: auto;" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Hoşgeldin, <?= $_SESSION['data']['ad'] ?> <?= $_SESSION['data']['soyad'] ?></span>
                        <img class="img-xs rounded-circle" src="images/faces/<?= $_SESSION['data']['id'] ?>.jpg "
                             alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a href="https://paroladegistirme.alanya.edu.tr" class="dropdown-item mt-2">
                            Şifremi Değiştir
                        </a>
                        <a href="logout.php" class="dropdown-item">
                            Çıkış Yap
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="images/faces/<?= $_SESSION['data']['id'] ?>.jpg" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name"><?= $_SESSION['data']['ad'] ?> <?= $_SESSION['data']['soyad'] ?></p>
                                <div>
                                    <small class="designation text-muted">Öğrenci</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Ana Sayfa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ogr-kart" aria-expanded="false" aria-controls="ogr-kart">
                        <i class="menu-icon mdi mdi-account-card-details"></i>
                        <span class="menu-title">Öğrenci Kartı</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ogr-kart">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="ogrencikartbilgi.php">Kart Bilgilerim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ogrencibakiyeyukle.php">Bakiye Yükle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kayipkart.php">Kayıp Kart Bildir</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#kent-kart" aria-expanded="false" aria-controls="kent-kart">
                        <i class="menu-icon mdi mdi-city"></i>
                        <span class="menu-title">Kent Kart</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="kent-kart">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="kentkartbilgi.php">Kart Bilgilerim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kentbakiyeyukle.php">Bakiye Yükle</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#uyelikler" aria-expanded="false" aria-controls="uyelikler">
                        <i class="menu-icon mdi mdi-account-multiple"></i>
                        <span class="menu-title">Üyelikler</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="uyelikler">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3dtDm3i9DUr2nXEQUOsiihc1VZePBsfOi2hC6bWuPcu18FL8-czesJObuPRnYckefktYPrhNyD8w3tEgs3RCf7hlY2Jt7od_j6bkTs7jT4UtE4IB5ZjDacWof95mv1EVWTc6IgYkPCgu31WUmhlUK_NcgkSdjTzaytuaQFKRbI0SAxeBOSZgDO_ZX9n3wU_LGR&nonce=636818440628335463.NTNlNWZhYWUtYmE5ZS00YzQ4LTk2ZTQtYTE1NjlkNDQ0N2NhYTkyOTg3YTItOTU5Zi00MmE2LThlYjUtNjkwM2Y2MDEzOWQw&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=tr-TR&mkt=tr-TR&client-request-id=6759fa5a-b9f6-4b4f-bbdf-052e03d17541&login_hint=170204013%40ogr.alanya.edu.tr">Office
                                    365</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-6 mx-auto grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Öğrenci Kartı Bakiye Yükle</h4>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label>Öğrenci Kart Numarası</label>
                                        <input type="text" class="form-control" value="<?= $_SESSION['data']['id'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-primary border-primary">
                                                <span class="input-group-text bg-transparent">
                                                  <i class="mdi mdi mdi-account-multiple text-white"></i>
                                                </span>
                                            </div>
                                            <input type="text" id="ad" class="form-control" placeholder="Kart Üzerindeki Ad ve Soyad" aria-label="" aria-describedby="colored-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-primary border-primary">
                                                <span class="input-group-text bg-transparent">
                                                  <i class="mdi mdi mdi-credit-card text-white"></i>
                                                </span>
                                            </div>
                                            <input type="text" id="kart" class="form-control" placeholder="Kart Numarası" aria-label="" aria-describedby="colored-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" id="ay" class="form-control" placeholder="Ay" aria-label="ay" aria-describedby="colored-addon3">
                                                <input type="text" id="yil" class="form-control" placeholder="Yıl" aria-label="yıl" aria-describedby="colored-addon4">
                                                <input type="text" id="cvv" class="form-control" placeholder="CVV Güvenlik Kodu" aria-label="cv2" aria-describedby="colored-addon5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-primary border-primary">
                                                <span class="input-group-text bg-transparent text-white">₺</span>
                                            </div>
                                            <input type="text" id="bakiye" placeholder="Yüklemek istediğiniz tutar" class="form-control" aria-label="">
                                            <div class="input-group-append bg-primary border-primary">
                                                <span class="input-group-text bg-transparent text-white">.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <button class="btn btn-success mr-2" onclick="basarili()">Gönder</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        Hasan & İrem & Feride
                    </span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                        PHP
                        <i class="mdi mdi-heart text-danger"></i>
                    </span>
                </div>
            </footer>

        </div>
    </div>
</div>

<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>

<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<script src="js/dashboard.js"></script>

<script src="js/sweetalert.min.js"></script>

<script>
    function basarili() {

        if( !$("#ad").val() || !$("#kart").val() || !$("#ay").val() || !$("#yil").val() || !$("#cvv").val() || !$("#bakiye").val()){
            swal({
                icon: "info",
                title: "Hata!",
                text: "Kart bilgileri boş bırakılamaz",
                type: "info"
            });
            return false;
        }

        swal("İşleminiz yapılıyor...", {
            buttons: false,
            timer: 3000,
            closeOnClickOutside: false,
        }).then(function() {
            var bakiye = $("#bakiye").val();
            $.ajax({
                type: "GET",
                url: "src/ogr_ajax.php",
                data: {
                    'bakiye' : bakiye
                },
                cache: false,
                success: function(data){
                    if(data != 'Hata'){
                        swal({
                            icon: "success",
                            title: "Başarılı!",
                            text: "Kartınıza "+bakiye+" TL bakiye yüklendi",
                            type: "success"
                        }).then(function() {
                            window.location = "/";
                        });
                    }else{
                        swal({
                            icon: "error",
                            title: "Hata!",
                            text: "Kart yüklemesi yaparken hata oluştu, tekrar deneyiniz",
                            type: "error"
                        });
                    }
                }
            });
        });
    }
</script>

</body>
</html>
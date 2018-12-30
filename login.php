<?php

// DB baglantisi
try{
    $db = new PDO("mysql:host=db4free.net:3306;dbname=fh_online_ogr", "fh_online_user", "fh159357");
}catch(PDOException $e){
    print $e->getMessage();
}

// Eger eposta ve sifre varsa islem yaptir
if(isset($_POST['eposta'], $_POST['sifre']))

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Öğrenci İşlemleri - Giriş</title>

    <link rel="shortcut icon" href="images/favicon.png"/>

    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label class="label">Kullanıcı Adı</label>
                                <div class="input-group">
                                    <input type="text" name="eposta" class="form-control" placeholder="Kullanıcı Adı"
                                           value="<?php echo (isset($_POST['eposta'])) ? $_POST['eposta'] : '' ?>">
                                    <div class="input-group-append">
                                      <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Parola</label>
                                <div class="input-group">
                                    <input type="password" name="sifre" class="form-control" placeholder="*********"
                                           value="<?php echo (isset($_POST['sifre'])) ? $_POST['sifre'] : '' ?>">
                                    <div class="input-group-append">
                                      <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary submit-btn btn-block" value="Giriş Yap">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>

<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>

</body>

</html>
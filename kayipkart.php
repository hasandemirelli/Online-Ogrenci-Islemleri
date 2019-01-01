<?php

session_start();

?>
<html>
<head>
    <meta charset="utf-8">
    <title> Online Ogrenci Isleleri/KAYIP KART BİLDİRİ FORM</title>
    <style type="text/css">
        @import "css/kayipkart.css";
    </style>

</head>

<body>
<div class="container">
    <form id="contact" action="#" method="post">
        <h3>KAYIP KART BİLDİRİ FORMU</h3>
        <h4>Kaybolan Kartınızı 48 Saat içerisinde Bildirmelisiniz !</h4>

        <fieldset>
            <input value="<?= $_SESSION['data']['id'] ?>" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
            <input value="<?= $_SESSION['data']['ad'] ?> <?= $_SESSION['data']['soyad'] ?>" type="text" tabindex="2"
                   required autofocus>
        </fieldset>
        <fieldset>
            <input value="<?= $_SESSION['data']['email'] ?>" type="text" tabindex="3" required autofocus>
        </fieldset>
        <fieldset>
            <input value="<?= $_SESSION['data']['tel'] ?>" type="text" tabindex="4" required autofocus>
        </fieldset>
        <fieldset>
            <input value="<?= $_SESSION['data']['fakulte'] ?> / <?= $_SESSION['data']['bolum'] ?>" type="text"
                   tabindex="5" required autofocus>
        </fieldset>
        <fieldset>
            <textarea placeholder="Bir aciklama Giriniz..." tabindex="6" required></textarea>
        </fieldset>
        <fieldset>
            <button name="Gonder" type="submit" id="contact-submit" data-submit="...Sending">Gonder</button>
        </fieldset>
    </form>


</div>
</body>
</html>

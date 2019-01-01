<?php
session_start();
?>


<html>
<table align=”center”>
    <tr align=”center”>
        <td align=”center”>
<body>
<table align=”center”>
    <tr align=”center”>
        <td align=”center”>
<table border="0" cellpadding="0" cellspacing="0" width="100%">

    <tbody>
    <tr>
        <td valign="middle" width="100%">
            <span id="lblZorunlu" style="color:Red;font-family:Tahoma;font-size:8pt;font-weight:normal;"></span>
        </td>
    </tr>
    <tr>
        <td style="height: 24px; background-color: #364960; text-align: center" valign="middle" width="100%">
            <span id="Label14" style="color:White;font-family:Tahoma;font-size:8pt;font-weight:normal;">.:: Kent Kart Bilgi Formu ::.</span>
        </td>
    </tr>
    </tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" style="border-right: #000033 1px solid;
                    border-top: #000033 1px solid; border-left: #000033 1px solid; border-bottom: #000033 1px solid; color: #000000;"
       width="100%">
    <tbody>
    <tr>
        <td valign="top" style="width: 100%">
            <table border="0" cellpadding="0" cellspacing="1" width="100%">
                <tbody>
                <tr>

                    <td style="width: 38px">
                        <span id="Label5"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:90px;">T.C. Kimlik No</span>
                    </td>
                    <td>
                        <input name="txtTCK" type="text" value="<?= $_SESSION['data']['tc'] ?>" readonly="readonly"
                               id="txtTCK" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:300px;">
                    </td>
                </tr>

                <tr>
                    <td style="width: 38px">
                        <span id="Label1"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:110px;">Adı</span>
                    </td>
                    <td style="width: 171px">
                        <input name="txtAd" type="text" value="<?= $_SESSION['data']['ad'] ?>" readonly="readonly"
                               id="txtAd" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:300px;">
                    </td>
                </tr>
                <tr>
                    <td style="width: 38px">
                        <span id="Label2"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:110px;">Soyadı</span>
                    </td>
                    <td style="width: 171px">
                        <input name="txtSoyad" type="text" value="<?= $_SESSION['data']['soyad'] ?>" readonly="readonly"
                               id="txtSoyad" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:300px;">
                    </td>
                </tr>
                <tr>
                    <td style="width: 38px">
                        <span id="Label2"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:110px;">Doğum Tarihi</span>
                    </td>
                    <td style="width: 171px">
                        <input name="txtDogum" type="text" value="<?= $_SESSION['data']['dogum'] ?>" readonly="readonly"
                               id="txtDogum" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:300px;">
                    </td>
                </tr>
                <tr>
                    <td style="width: 38px">
                        <span id="Label2"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:110px;">Okulu</span>
                    </td>
                    <td style="width: 171px">
                        <input name="txtOkulu" type="text" value="<?= $_SESSION['data']['uni'] ?>" readonly="readonly"
                               id="txtOkulu" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:300px;">
                    </td>
                </tr>


                </tbody>
            </table>
        </td>

    </tr>
    </tbody>
</table>

</body>
</html>
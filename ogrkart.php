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
                <form>
                    <tbody>
                    <tr>
                        <td valign="middle" width="100%">
                            <span id="lblZorunlu"
                                  style="color:Red;font-family:Tahoma;font-size:8pt;font-weight:normal;"></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 24px; background-color: #364960; text-align: center" valign="middle"
                            width="100%">
                            <span id="Label14" style="color:White;font-family:Tahoma;font-size:8pt;font-weight:normal;">.:: Öğrenci Kartı Bilgi Formu ::.</span>
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
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:220px;">
                    </td>
                    <td style="width: 40px">
                        <span id="Label7"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:90px;">Fakülte</span>
                    </td>
                    <td>
                        <input name="txtFakulte" type="text" value="<?= $_SESSION['data']['fakulte'] ?>"
                               readonly="readonly" id="txtFakulte" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:220px;">
                    </td>

                </tr>
                <tr>
                    <td style="width: 38px">
                        <span id="Label6"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:110px;">Öğrenci Numarası</span>
                    </td>
                    <td style="width: 171px">
                        <input name="txtOgrNo" type="text" value="<?= $_SESSION['data']['id'] ?>" readonly="readonly"
                               id="txtOgrNo" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:220px;">
                    </td>
                    <td style="width: 40px">
                        <span id="Label8"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:90px;">Bölüm</span>
                    </td>
                    <td>
                        <input name="txtBolum" type="text" value="<?= $_SESSION['data']['bolum'] ?>" readonly="readonly"
                               id="txtBolum" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:220px;">
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
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:220px;">
                    </td>
                    <td style="width: 40px">
                        <span id="Label9"
                              style="display:inline-block;font-family:Tahoma;font-size:8pt;font-weight:normal;width:90px;">Program</span>
                    </td>
                    <td>
                        <input name="txtProgram" type="text" value="<?= $_SESSION['data']['program'] ?>"
                               readonly="readonly" id="txtProgram" class="Textbox" autocomplete="off"
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:220px;">
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
                               style="color:#000040;background-color:#E0E0E0;font-family:Tahoma;font-size:8pt;font-weight:normal;width:220px;">
                    </td>
                </tr>


                </tbody>
            </table>
        </td>

    </tr>
    </tbody>
</table>
            </form>
</body>
</html>
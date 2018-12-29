
<?php


require_once('class.sanalpos.php');

/*
 * Banka'dan aldığınız bilgileri bu şekilde gireceksiniz.
 *
 * $clientId    = Banka tarafindan verilen is yeri numarasi
 * $amount      = Yapılan İşlem tutarı
 * $oid         = Yapılan işlem numarası, sizdeki sisteme kaydetmek için düşünülmüş birşey
 * $okUrl       = İşlem yapıldığında yönlenecek adres
 * $failUrl     = İşlem yapılmadığında yönlenilecek adres
 * $storeKey    = İş yeri ayiraci (is yeri anahtari)
 * $rand        = İşlemin micro zamanı
 *
 */

$clientId = 111111111;
$amount = 1.00;
$oid = 'I' . rand( 2, 99999 );
$okUrl = 'http://localhost/return.html';
$failUrl = 'http://localhost/return.html';
$storeKey = '5456456454564156563';
$rand = microtime();

$sanalpos = new SanalPOS();
$hash = $sanalpos->estModelHash( $clientId, $amount, $oid, $okUrl, $failUrl, $storeKey, $rand );

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Sanal POS Entegrasyon</title>
</head>
<body>

<div style="background: Lightblue; border-left:10px solid red; padding: 15px 10px">
    <form method="post" action="return.html">
        <table cellpadding="5" cellspacing="5">
            <tr>
                <td>Kredi Kart Numarasi:</td>
                <td><input type="text" name="pan" size="20"/>
            </tr>
            <tr>
                <td>Güvenlik Kodu:</td>
                <td><input type="text" name="cv2" size="4" value=""/></td>
            </tr>
            <tr>
                <td>Son Kullanma Yili:</td>
                <td><input type="text" name="Ecom_Payment_Card_ExpDate_Year" value=""/></td>
            </tr>
            <tr>
                <td>Son Kullanma Ayi:</td>
                <td><input type="text" name="Ecom_Payment_Card_ExpDate_Month" value=""/></td>
            </tr>
            <tr>
                <td>Visa/MC secimi</td>
                <td>
                    <select name="cardType">
                        <option value="1">Visa</option>
                        <option value="2">MasterCard</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Ödemeyi Tamamla"/>
                </td>
            </tr>
        </table>
        <input type="hidden" name="clientid" value="<?php echo $clientId ?>">
        <input type="hidden" name="amount" value="<?php echo $amount ?>">
        <input type="hidden" name="oid" value="<?php echo $oid ?>">
        <input type="hidden" name="okUrl" value="<?php echo $okUrl ?>">
        <input type="hidden" name="failUrl" value="<?php echo $failUrl ?>">
        <input type="hidden" name="rnd" value="<?php echo $rand ?>">
        <input type="hidden" name="hash" value="<?php echo $hash ?>">
        <input type="hidden" name="storetype" value="3d">
        <input type="hidden" name="lang" value="tr">
    </form>
</div>
</body>
</html>
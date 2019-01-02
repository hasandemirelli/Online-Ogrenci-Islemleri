<?php

require "config.php";

// DB baglantisi
try{
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
}catch(PDOException $e){
    print $e->getMessage();
}

if(isset($_GET['bakiye'])){
    $bakiye = intval($_GET['bakiye']);
    if($bakiye > 0){
        $data = [
            'id' => $_SESSION['data']['id']
        ];
        $sql = "UPDATE ogrenci_kart SET bakiye=bakiye+'$bakiye' WHERE id=:id";
        $stmt = $db->prepare($sql);
        if($stmt->execute($data)){
            $query = $db->prepare("SELECT * FROM birlesik_veriler WHERE id = :id");
            $query->bindValue(':id', $_SESSION['data']['id'], PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_OBJ);
            $_SESSION['data'] = json_decode(json_encode($data), TRUE);
            echo $_SESSION['data']['ogr_bakiye'];
        }else{
            echo "Hata";
        }
    }else{
        echo "Hata";
    }
}else{
    echo "Hata";
}
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
            'id' => $_SESSION['data']['tc']
        ];
        $sql = "UPDATE kent_kart SET bakiye=bakiye+'$bakiye' WHERE id=:id";
        $stmt = $db->prepare($sql);
        if($stmt->execute($data)){
            $query = $db->prepare("SELECT * FROM birlesik_veriler WHERE tc = :tc");
            $query->bindValue(':tc', $_SESSION['data']['tc'], PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_OBJ);
            $_SESSION['data'] = json_decode(json_encode($data), TRUE);
            echo $_SESSION['data']['kent_bakiye'];
        }else{
            echo "Hata";
        }
    }else{
        echo "Hata";
    }
}else{
    echo "Hata";
}
<?php
session_start();


?>
<html xmlns="http://www.w3.org/1999/html">
<head>

</head>

<body>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">ÖĞRENCİ KART'A PARA YÜKLEME</h4>
            <p class="card-description">Input groups with colors </p>
            <form action="ogrbakiye_yukleme.php" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend bg-info">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi-shield-outline text-white"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                               aria-describedby="colored-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                            <span class="input-group-text bg-transparent">
                              <i class="mdi mdi mdi-menu text-white"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                               aria-describedby="colored-addon2">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                               aria-describedby="colored-addon3">
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
                            <span class="input-group-text bg-transparent text-white">$</span>
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
</div>

</body>
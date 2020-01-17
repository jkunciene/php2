<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Forma</title>
</head>
<body>
<?php

$pastaba = $_POST['pastaba'];
$kryptisPirmyn = $_POST['kryptisPirmyn'];
$kryptisAtgal = $_POST['iKUr'];
$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$asmensKodas =  $_POST['asmkodas'];
$kilogramai = intval($_POST['bagazas']);

        $kaina = intval($_POST['kaina']);
                if ($kilogramai >= 20) {
                    $kainyte = $kaina + 30;
                } else {$kainyte=$kaina;}?>
<div class="container">
    <div class="row pirmaEilute">
        <div class="col-sm text-center ">
            <h4>Detali skrydzio informacija</h4>
        </div>
    </div>
    <div class="row antraEilute">
        <div class="col-sm">
            <p>Skrenda is...</p>
        </div>
        <div class="col-sm">
            <p>Skrenda i...</p>
        </div>
        <div class="col-sm">
            <p>Keleivio info</p>
        </div>
    </div>
    <div class="row treciaEilute">
        <div class="col-sm">
            <p><?= $kryptisPirmyn; ?></p>
        </div>
        <div class="col-sm">
            <p><?= $kryptisAtgal; ?></p>
        </div>
        <div class="col-sm">
            <p><?= $vardas."  ".$pavarde; ?></p>
        </div>
    </div>
    <div class="row ketvirtaEilute">
        <div class="col-6">
            <p>Pastaba: <?= $pastaba; ?></p>

        </div>
        <div class="col">
            <div class="row">
                <div class="col-9 text-right">
                    <p>Gesamte Preis:</p>
                </div>
                <div class="col">
                    <p><?= $kainyte; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col text-left">
                    <p>Die Preise sind in Euro gegeben</p>
                </div>
            </div>

        </div>
    </div>

    <a href="../index.php">Grizti</a>
</div>
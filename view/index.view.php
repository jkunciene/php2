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
    <title><?= sitetitle; ?></title>
</head>
<body>
<?php
$skrydzioNr = ['23145', '98751', '64587'];
$bagazas = [10, 20, 30, 40];
$isKur = ['KUN', 'VLN', 'PGN'];
$iKur = ['FRA', 'FRA', 'IEV'];
$validation_errors=[];
if (isset($_POST['submit'])) {
    if (!isset($_POST['skrydziai'])) {
        $validation_errors[] = "Skrydzio numeris privalo buti ivestas";
    }
    if (!isset($_POST['bagazas'])) {
        $validation_errors[] = "Bagazo svoris privalo buti ivestas";
    }
    if (!preg_match('/\w{1,100}$/',
        $_POST['vardas'])) {
        $validation_errors[] = "vardas negali virsyti 100 simboliu ir trumpesnis uz 1";
    } else {
        $_POST['vardas'];
    }
    if (!preg_match('/\w{1,100}/',
        $_POST['pavarde'])) {
        $validation_errors[] = "pavarde negali virsyti 100 simboliu ir trumpesnis uz 1";
    } else {
        $_POST['pavarde'];
    }
    if (!preg_match('/^([3-6]\d{10})$/',
        $_POST['asmkodas'])) {
        $validation_errors[] = "asmens kodas netinkamas formatas";
    } else {
        $_POST['asmkodas'];
    }
    if (!preg_match('/[\w\s{50,1000}]/i',
        $_POST['pastaba'])) {
        $validation_errors[] = "netinkamas pastabos formatas";
    } else {
        $_POST['pastaba'];
    }
}

?>

<?php if($validation_errors) :?>
<div class="errors">
    <ul>
        <?php foreach($validation_errors as $error) :?>
        <li><?= $error; ?></li>
    <?php endforeach; ?>
    </ul>
</div>
    
<?php endif; ?>

<div class="container ">
    <div class="row">
        <div class="col-sm text-center ">
            <h2 class="p-5">Lektuvo bilietu forma</h2>
            <form method="post" >
                <div class="form-group">
                    <select name="skrydziai" class="form-control">
                        <option selected disabled>--Pasirinkite skrydzio numeri--</option>
                        <?php foreach ($skrydzioNr as $skrydis): ?>
                            <option value="<?= $skrydis; ?>"><?= $skrydis; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="bagazas" class="form-control">
                        <option selected disabled>--Iveskite bagazo svori---</option>
                        <?php foreach ($bagazas as $kilogramai): ?>
                            <option value="<?= $kilogramai; ?>"><?= $kilogramai; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="kryptisPirmyn" class="form-control">
                        <option selected disabled>---Kryptis i prieki---</option>
                        <?php foreach ($isKur as $kryptisPirmyn): ?>
                            <option value="<?= $kryptisPirmyn; ?>"><?= $kryptisPirmyn; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="iKUr" class="form-control">
                        <option selected disabled>---Kryptis atgal----</option>
                        <?php foreach ($iKur as $kryptisAtgal): ?>
                            <option value="<?= $kryptisAtgal; ?>"><?= $kryptisAtgal; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="vardas">Suveskite keleivio varda</label>
                    <input type="text" class="form-control" id="vardas" name="vardas">
                </div>
                <div class="form-group">
                    <label for="pavarde">Suveskite keleivio pavarde</label>
                    <input type="text" class="form-control" id="pavarde" name="pavarde">
                </div>
                <div class="form-group">
                    <label for="asmkodas">Suveskite asmens koda</label>
                    <input type="number" class="form-control" id="asmkodas" name="asmkodas">
                </div>
                <div class="form-group">
                    <label for="kaina">Suveskite skrydzio kaina</label>
                    <input type="number" class="form-control" id="kaina" name="kaina">
                </div>
                <div class="form-group">
                    <label for="pastaba">Pastaba</label>
                    <textarea class="form-control" name="pastaba" id="pastaba" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Patvirtinti</button>
                <?php if (isset($_POST["submit"]) && !$validation_errors):?>

                    <?php $pastaba = $_POST['pastaba'];
                    $kryptisPirmyn = $_POST['kryptisPirmyn'];
                    $kryptisAtgal = $_POST['iKUr'];
                    $vardas = $_POST['vardas'];
                    $pavarde = $_POST['pavarde'];
                    $asmensKodas =  $_POST['asmkodas'];
                    $kilogramai = intval($_POST['bagazas']);

                    $kaina = intval($_POST['kaina']);
                    if ($kilogramai >= 20) {
                        $kainyte = $kaina + 30;
                    } else {$kainyte=$kaina;}
                    ?>
                    <button type="button" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#ticket">
                        Spausdinti bilietą
                    </button>
                <?php endif;?>
            </form>
        </div>
    </div>
</div>



<div class = "container ticket fade" id="ticket">
    <div class = "row">
        <div class = "col-sm-12"><h3>Bilieto informacija</h3></div>
    </div>
    <div class = "row">
        <div class = "col-sm">
            <div class = "row">Jūsų skrydžio numeris: <?=$skrydis?></div>
            <div class = "row">Kryptis pirmyn: <?=$kryptisPirmyn?></div>
            <div class = "row">Kryptis atgal: <?=$kryptisAtgal?></div>
        </div>
        <div class = "col-sm">
            <div class = "row">Keleivio vardas: <?=$vardas?></div>
            <div class = "row">Keleivio pavardė: <?=$pavarde?></div>
            <div class = "row">Keleivio asmens kodas: <?=$asmensKodas?></div>
        </div>
        <div class = "col-sm">
            <div class = "row">Skrydzio perziura</div>
            <div class = "row">Skrydžio kaina: <?=$kaina?></div>
            <div class = "row">Bagažo kiekis: <?=$kilogramai?>kg</div>
            <div class = "row">Bendra bilieto kaina: <?=$kainyte?></div>
        </div>
    </div>
    <div class = "row">Pastabos: <?=$pastaba?></div>
</div>

<footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</footer>
</body>
</html>
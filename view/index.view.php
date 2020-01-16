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

if (isset($_POST['submit'])) {
    foreach ($_POST as $value) {
       // echo "$value<br>";
    }

}
?>


<div class="container ">
    <div class="row">
        <div class="col-sm text-center ">
            <h2 class="p-5">Lektuvo bilietu forma</h2>
            <form method="post" action="view/bilietas.view.php">
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
                    <select name="padaliniai" class="form-control">
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
                    <label for="asmensKodas">Suveskite asmens koda</label>
                    <input type="number" class="form-control" id="asmensKodas" name="asmkodas">
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
            </form>
        </div>
    </div>
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
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
    <title><?=sitetitle; ?></title>
</head>
<body>
<?php
$padaliniai = ['IT', 'Fin', 'Admin'];

if(isset($_POST['submit'])){
    foreach ($_POST as $value){
        echo "$value<br>";
    }
}
?>


<div class="container ">
    <div class="row">
        <div class="col-sm">
<form method="post">
    <div class="form-group">
        <select name="" id="" class="form-control">
            <option selected disabled>---Pasirinkti----</option>
        <?php foreach ($padaliniai as $padalinys): ?>
        <option value="<?=$padalinys;?>"><?=$padalinys;?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Pavarde</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="pavarde">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1" name="email">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Patvirtinti</button>
</form>
</div>
</div>
</div>

<footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</footer>
</body>
</html>
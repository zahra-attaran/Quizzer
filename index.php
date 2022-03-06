<?php
include "database.php";
$porsesh_ha = $db->query("SELECT * FROM questions");
$total=$porsesh_ha->num_rows;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body dir="rtl">

<nav class="nav">
    <h1 class="logo">آزمون کده</h1>
    <input type="checkbox" id="hambergur-toggle" />
    <label for="hambergur-toggle" class="hambergur">
        <span class="bar"></span>
    </label>
    <ul class="nav-list">
        <li><a href="#">خانه</a></li>
        <li><a href="#">درباره ما</a></li>
        <li><a href="#">تماس با ما</a></li>
    </ul>
</nav>



<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h5 class="card-header">آزمون خوش اومدی</h5>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">تعداد سوالات این آزمون
                        <?php echo $total;?>
                        تاست</p>
                    <p class="card-text">زمان ازمون :
                        <?php echo $total/2; ?>
                        دقیقه است</p>
                    <a href="Question.php" class="btn btn-primary">بزن بریم</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
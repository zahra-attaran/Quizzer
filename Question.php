<?php
include "database.php";
$porsesh= $db->query("SELECT * FROM questions WHERE id=1");//یک جدولی که یک رکورد داره
$porsesh=$porsesh->fetch_assoc();//یک رک.رد یعنی توی جدول نیست دیگه
$pasokh_ha= $db->query("SELECT * FROM answers WHERE question_id =1");
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
<div class="row">
    <div class="col">
        <div class="card">
            <h5 class="card-header">سوال
                <?php echo $porsesh["id"]; ?>
                از
                <?php echo $total; ?>
            </h5>
            <div class="card-body">
                <h2 class="text-start">
                    <?php echo $porsesh["text"]; ?>
                </h2>
                <form>
                    <div>
                        <?php foreach ($pasokh_ha as $pasokh): ?>
                        <label>
                            <input type="radio" class="option-input radio" name="example"/>
                          <?php echo $pasokh["text"]; ?>
                        </label>
                        <?php endforeach; ?>
                    </div>

                    <button type="submit" class="btn btn-primary ">بعدی</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
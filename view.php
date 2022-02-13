<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once "db.php";
    $data =  $jsonarray[$_GET['id']];
    ?>
    <header>
        <div class="container">
            <table class="table">
                <tr>
                    <a href="" class="btn btn-danger">delete</a>
                    <a href="" class="btn btn-success">update</a>
                </tr>
                <tr>
                    <th>Id</th>
                    <td><?=$data['id']?></td>
                </tr>
                <tr>
                    <th>Ism</th>
                    <td><?=$data['ism']?></td>
                </tr>
                <tr>
                    <th>Familiya</th>
                    <td><?=$data['fam']?></td>
                </tr>
                <tr>
                    <th>Rasm</th>
                    <td><img src="./img/<?=$data['rasm']?>" width="300px" class="table-bordered"></td>
                </tr>
            </table>
        </div>
    </header>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
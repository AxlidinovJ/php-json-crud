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
    <header>
        <div class="container">
        <?php
            include_once "./funct.php";
            $user =  getUser();
            if(isset($_GET['id']) and isset($user[$_GET['id']])){
            $data = $user[$_GET['id']];
        ?>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <p class="h1"><a href="./">Index</a>/Korish</p>
                    <a href="delete.php?id=<?=$_GET['id']?>" class="btn btn-danger">delete</a>
                    <a href="form.php?id=<?=$_GET['id']?>" class="btn btn-success">update</a>
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

    <?php }else{
        echo "<p class='text-danger h1'>Bundan malumot topilmadi</p>";
    }?>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
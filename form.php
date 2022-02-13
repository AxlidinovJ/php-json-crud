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
        <p class="h1"><a href="./">Index</a>/User</p>
          <form action="save.php" class="form-control" method="POST" enctype="multipart/form-data">
              
            <?php
                $data = [];
                if(isset($_GET['id'])){
                    include_once "funct.php";
                    $data = getUserById($_GET['id']);
                    echo "<h2>Update User</h2>";
                    echo "<input type='hidden' value='updates' name='xolat'>";
                    echo "<input type='hidden' value='".$_GET['id']."' name='id'>";
                    echo "<input type='hidden' value='".$data['rasm']."' name='rasm2'>";
                }else{
                    $data['ism']= "";
                    $data['fam']= "";
                    $data['rasm']= "";
                    echo "<h2>Create User</h2>";
                    echo "<input type='hidden' value='create' name='xolat'>";
                }
                ?>
            
            <label for="ism" class="form-label">Ism</label>
            <input type="text" class="form-control" id="ism" name='ism' required value="<?=$data['ism']?>">
            <label for="fam" class="form-label">Familiya</label>
            <input type="text" class="form-control" id="fam" name="fam" required value="<?=$data['fam']?>">
            <label for="rasm" class="form-label">Rasm</label>
            <input type="file" class="form-control" id="rasm" <?=!isset($_GET['id'])?'required':'';?> name="rasm"> 
            <label for=""></label>
            <?php
                if(!isset($_GET['id'])){
                    echo '<input type="submit" value="Qo\'shish" class="form-control btn btn-primary">';
                }else{
                    echo '<input type="submit" value="O\'zgartirish" class="form-control btn btn-success">';
                }
                ?>
                       </form>
        </div>
    </header>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
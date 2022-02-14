        <?php
            include "./header.php";
            include_once "./funct.php";
            $user =  getUser();

            if(isset($_GET['id']) and isset($user[$_GET['id']])){
            $data = $user[$_GET['id']];
        ?>
            <table class="table table-striped table-bordered table-hover">
                <tr class="card-header">
                    <p class="h1"><a href="./">Index</a>/Korish</p>
                   <div class="btn2">
                        <a href="delete.php?id=<?=$_GET['id']?>" class="btn btn-danger">delete</a>
                        <a href="form.php?id=<?=$_GET['id']?>" class="btn btn-success">update</a>
                   </div>
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
            
            <?php }else{
                include_once "./error.php";
                exit;
            }?>

            <?php
                include "./footer.php";
            ?>

 
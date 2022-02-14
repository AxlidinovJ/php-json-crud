<?php
    include "./header.php";
?>
            <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="6" class="cart">
                        <a href="form.php" class="btn btn-primary">Create Users</a>
                    </th>
                </tr>
                <tr>
                    <th>tr</th>
                    <th>id</th>
                    <th>Ism</th>
                    <th>Familiya</th>
                    <th>Rasm</th>
                    <th></th>
                </tr>
            <?php 
            include_once "./funct.php"; $j=0;
            foreach(getUser() as $n=>$value):$j++; ?>
                <tr>
                    <td><?=$j?></td>
                    <td><?=$value['id']?></td>
                    <td><?=$value['ism']?></td>
                    <td><?=$value['fam']?></td>
                    <td><img src="./img/<?=$value['rasm']?>" width="100px" class="table-bordered"></td>
                    <td>
                        <a href="view.php?id=<?=$n?>" class="btn btn-primary">view</a>
                        <a href="delete.php?id=<?=$n?>" class="btn btn-danger">delete</a>
                        <a href="form.php?id=<?=$n?>" class="btn btn-success">update</a>
                     </td>
                </tr>  
                <?php endforeach; ?>
            </table>
<?php
    include "./footer.php";
?>
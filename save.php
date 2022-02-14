<pre>
<?php
include_once './funct.php';

$data = array_merge($_POST,$_FILES);

if($_POST['xolat']=="create"){
        CreateUser($data);
    }elseif($_POST['xolat']=="updates"){
        if(isset($_FILES['rasm']['name'])){
            $_FILES['rasm']['name']= $_POST['rasm2'];
            $data = array_merge($_POST,$_FILES);
        }
        UpdateUser($data, $_POST['id']);
    }




$d = move_uploaded_file($_FILES['rasm']['tmp_name'],"./img/".$_FILES['rasm']['name']);
echo $d?"Rasm saqlandi":"saqlashda xatolik";
header("location:./");
?>
</pre>
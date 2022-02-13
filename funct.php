<?php
 
function getUser(){
    $data = file_get_contents("data/data.json");
    $jsonarray = json_decode($data,true);
    return $jsonarray;
 }

 function getUserById($id){
     $data = [];
     $jsonarray = getUser();
     foreach($jsonarray as $n=>$value){
         if($n==$id){
             $data = $jsonarray;
         }
     }
     return $data;
 }
 
 function CreateUser($datas){
    if(file_exists("data/data.json")){
        $jsonarray = getUser();
    }else{
        $jsonarray = [];
    }
    $jsonarray[] = ['id'=>rand(100,1000000),'ism'=>$datas['ism'],'fam'=>$datas['fam'],'rasm'=>$datas['rasm']];
    file_put_contents("data/data.json",json_encode($jsonarray, JSON_PRETTY_PRINT));
 }

 function UpdateUser($data, $id){
   $jsonarray = getUser();
    foreach($jsonarray as $n=>$value){
        if($id==$n){

        }
    }
 }

 function delete($id){

 }


?>
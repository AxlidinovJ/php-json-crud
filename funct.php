<?php
 
if(!file_exists('data/data.json')){
    mkdir('data');
    file_put_contents('data/data.json',"[]");
}else{
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
                 $data = $jsonarray[$n];
             }
         }
         return $data;
     }
     
     function CreateUser($data){
        if(file_exists("data/data.json")){
            $jsonarray = getUser();
        }else{
            $jsonarray = [];
        }
        $jsonarray[] = [
            'id'=>rand(100,1000000),
            'ism'=>$data['ism'],
            'fam'=>$data['fam'],
            'rasm'=>$data['rasm']['name'],
        ];
        file_put_contents("data/data.json",json_encode($jsonarray, JSON_PRETTY_PRINT));
     }
    
     function UpdateUser($datas, $id){
       $jsonarray = getUser();
        foreach($jsonarray as $n=>$value){
            if($id==$n){
                $jsonarray[$id] = [
                    'id'=>rand(100,1000000),
                    'ism'=>$datas['ism'],
                    'fam'=>$datas['fam'],
                    'rasm'=>$datas['rasm']['name'],
                ];
                file_put_contents("data/data.json",json_encode($jsonarray, JSON_PRETTY_PRINT));
            }
        }
     }
    
     function DeleteUser($id){
        $jsonarray = getUser();
        echo (unlink("./img/".$jsonarray[$id]['rasm'])?"udalit yes":"udalit no");
        echo $jsonarray[$id]['rasm'];
        unset($jsonarray[$id]);
        file_put_contents("data/data.json",json_encode($jsonarray,JSON_PRETTY_PRINT));
     }
    
}

?>
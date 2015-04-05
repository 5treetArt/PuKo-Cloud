<?php
function get_current_dir(){
    return getcwd();
}
function dir_detail($__dir){
    
    if($__dir == ""){
        return;
    }
    
    $dir_detail_arr;//массив с информацией о всех файлах
    
    $files_arr = scandir($__dir);
    
    foreach ($files_arr as $file){
        if($file == "." || $file == ".."){
            continue;
        }
        //is_file не работает
        
        if(is_file($file)){
            $dir_detail_arr[$file]["ext"] = "Директория";
        }
        else{
            list($dir_detail_arr[$file]["name"], $dir_detail_arr[$file]["ext"]) = explode(".", $file);
        }
        
        $dir_detail_arr[$file]["name"] = $file;
    }
    //print_r($dir_detail_arr);
    return $dir_detail_arr;
}
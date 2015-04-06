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
      
        list($name, $dir_detail_arr[$file]["ext"]) = explode(".", $file);
        
        if(strpos($file, ".") === FALSE){
            $dir_detail_arr[$file]["ext"] = "Папка";
        }
        
        $dir_detail_arr[$file]["name"] = iconv( "windows-1251", "utf-8", $name);
    }
    //print_r($dir_detail_arr);
    return $dir_detail_arr;
}
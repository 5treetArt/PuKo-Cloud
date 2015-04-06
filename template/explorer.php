<?php
if($_SESSION["current_dir"] == "user"){
    $_SESSION["current_dir"] .= "/".$_SESSION["username"];
    
    $objects_arr = dir_detail($_SESSION["current_dir"]);
    
    foreach ($objects_arr as $file){
        if($file["ext"] == "Папка"){
            $dirs_arr[] = $file;
        }
        else{
            $files_arr[] = $file;
        }
    }
    
    $objects_arr = array_merge($dirs_arr, $files_arr);
}

?>
<div id="content">
    <div id="instrument_pannel" class="material">
        <a id="new _file"></a>
        <a id="new _dir"></a>
        
    </div>
    <div id="files" class="material">
        
    </div>
    <div id="explorer" class="material">
        <form method="POST" action="<?= $_SERVER["PHP_SELF"] ?>">
            <table>
            <tr>
                <td id="choose">Выбрать</td>
                <td id="name">Имя</td>
                <td id="ext">Тип</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    -----кнопка назад-----
                </td>
                <td></td>
            </tr>
            <? foreach ($objects_arr as $file):?>
                <tr>
                <td></td>
                <td><?= $file['name'] ?></td>
                <td><?= $file['ext'] ?></td>
                </tr>
            <? endforeach; ?>
            </table>
        </form>
    </div>
</div>
